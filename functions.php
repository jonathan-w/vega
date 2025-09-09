<?php
/**
 * Theme bootstrap
 *
 * @package vega
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * -----------------------------------------------------------------------------
 * Theme Setup
 * -----------------------------------------------------------------------------
 */
add_action( 'after_setup_theme', function () {
	// Remove generator & emoji scripts/styles on the front-end.
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Editor styles (keeps editor close to front-end).
	add_editor_style( 'src/styles/editor.css' );

	if ( ! is_admin() && ! wp_is_json_request() ) {
		add_theme_support( 'disable-layout-styles' );
	}
} );


/**
 * -----------------------------------------------------------------------------
 * Asset helpers
 * -----------------------------------------------------------------------------
 */

/**
 * Resolve Mix asset URL.
 * - Dev: if dist/hot exists, load from dev server URL inside.
 * - Prod: read dist/mix-manifest.json and return hashed filename.
 *
 * @param string $path Path beginning with a leading slash, e.g. '/js/main.js'.
 * @return string|null
 */
function vega_mix( string $path ) : ?string {
	$theme_dir = get_stylesheet_directory();
	$theme_uri = get_stylesheet_directory_uri();
	$dist      = $theme_dir . '/dist';
	$hot_file  = $dist . '/hot';

	// Ensure leading slash.
	if ( $path === '' || $path[0] !== '/' ) {
		$path = '/' . ltrim( $path, '/' );
	}

	// Dev server (hot).
	if ( file_exists( $hot_file ) ) {
		$url = trim( (string) file_get_contents( $hot_file ) ); // e.g. http://localhost:5173
		if ( $url !== '' ) {
			return rtrim( $url, '/' ) . $path;
		}
	}

	// Production manifest.
	$manifest = $dist . '/mix-manifest.json';
	if ( ! file_exists( $manifest ) ) {
		return null;
	}

	$map = json_decode( (string) file_get_contents( $manifest ), true );
	if ( ! is_array( $map ) || ! isset( $map[ $path ] ) ) {
		return null;
	}

	return trailingslashit( $theme_uri ) . 'dist' . $map[ $path ];
}


/**
 * -----------------------------------------------------------------------------
 * Front-end & editor enqueues
 * -----------------------------------------------------------------------------
 */
add_action( 'wp_enqueue_scripts', function () {
	// Tailwind CSS (built to dist/tailwind.css).
	$css_file = get_stylesheet_directory() . '/dist/tailwind.css';
	if ( file_exists( $css_file ) ) {
		wp_enqueue_style(
			'vega-main',
			get_theme_file_uri( '/dist/tailwind.css' ),
			[],
			filemtime( $css_file )
		);
	}

	// Mix JS bundle (dev server or production build).
	if ( $js = vega_mix( '/js/main.js' ) ) {
		wp_enqueue_script( 'vega-js', $js, [], null, true );
	}

	add_filter('wp_resource_hints', function($urls, $relation_type){
		if ($relation_type === 'preconnect') {
			$urls[] = 'https://fonts.googleapis.com';
			$urls[] = 'https://fonts.gstatic.com';
		}
		return $urls;
	}, 10, 2);
	wp_enqueue_style(
		'vega-onest-font',
		'https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap',
		[],
		null
	);
}, 100 );


/**
 * -----------------------------------------------------------------------------
 * Block styles
 * -----------------------------------------------------------------------------
 */
add_action( 'init', function () {
	$styles = [
		'primary'      => __( 'Primary', 'vega' ),
		'secondary'    => __( 'Secondary', 'vega' ),
		'gradient'     => __( 'Gradient', 'vega' ),
		'icon-white'   => __( 'Icon (White)', 'vega' ),
		'icon'         => __( 'Icon', 'vega' ),
	];

	foreach ( $styles as $name => $label ) {
		register_block_style( 'core/button', [
			'name'  => $name,
			'label' => $label,
		] );
	}
} );


/**
 * -----------------------------------------------------------------------------
 * SVG upload policy (admins only by default)
 * -----------------------------------------------------------------------------
 */
add_filter( 'upload_mimes', function ( array $mimes ) : array {
	// Limit SVG uploads to admins to reduce risk.
	if ( current_user_can( 'manage_options' ) ) {
		$mimes['svg'] = 'image/svg+xml';
	}
	return $mimes;
} );

add_filter( 'wp_check_filetype_and_ext', function ( $data, $file, $filename, $mimes ) {
	$ext = strtolower( pathinfo( (string) $filename, PATHINFO_EXTENSION ) );
	if ( $ext === 'svg' ) {
		$data['ext']  = 'svg';
		$data['type'] = 'image/svg+xml';
	}
	return $data;
}, 10, 4 );


/**
 * -----------------------------------------------------------------------------
 * Navigation block: replace the burger SVG (opt-in via marker class)
 * -----------------------------------------------------------------------------
 *
 * Safer than replacing the first <svg> unconditionally:
 * Only run when the Navigation block wrapper contains `class="use-custom-burger"`.
 */
function vega_render_navigation_icon( string $block_content, array $block ) : string {
	if (
		( $block['blockName'] ?? '' ) !== 'core/navigation' ||
		is_admin() ||
		wp_is_json_request() ||
		$block_content === ''
	) {
		return $block_content;
	}

	// Only act when author opted-in by adding this custom class on the block.
	if ( strpos( $block_content, 'use-custom-burger' ) === false ) {
		return $block_content;
	}

	static $burger_svg = null;
	if ( $burger_svg === null ) {
		$svg_path = get_theme_file_path( 'src/images/Burger.svg' );
		if ( ! file_exists( $svg_path ) ) {
			return $block_content; // Fail safe.
		}
		$burger_svg = (string) file_get_contents( $svg_path );
		// Strip XML declaration if present.
		$burger_svg = preg_replace( '#<\?xml[^>]*\?>#', '', $burger_svg );
	}

	// Replace only the first <svg> (open icon). Leave close icon alone.
	return preg_replace( '#<svg\b[^>]*>.*?</svg>#s', $burger_svg, $block_content, 1 ) ?: $block_content;
}
add_filter( 'render_block', 'vega_render_navigation_icon', 10, 2 );
