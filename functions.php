<?php
if (!defined('ABSPATH'))
  exit;

add_action('after_setup_theme', function () {
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  add_theme_support('disable-layout-styles');

  add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
  });
});

require_once get_theme_file_path('/includes/acf-blocks.php');

/**
 * Resolve Mix asset URL.
 * - Dev: if dist/hot exists, load from dev server URL inside.
 * - Prod: read dist/mix-manifest.json and return hashed filename.
 */
function fmt_mix($path)
{
  $theme_dir = get_stylesheet_directory();
  $theme_uri = get_stylesheet_directory_uri();
  $dist = $theme_dir . '/dist';
  $hot_file = $dist . '/hot';

  // Dev server (hot)
  if (file_exists($hot_file)) {
    $url = trim(file_get_contents($hot_file)); // e.g. http://localhost:8080
    return rtrim($url, '/') . $path;
  }

  // Production manifest
  $manifest = $dist . '/mix-manifest.json';
  if (!file_exists($manifest))
    return null;

  $map = json_decode(file_get_contents($manifest), true);
  if (!isset($map[$path]))
    return null;

  return trailingslashit($theme_uri) . 'dist' . $map[$path];
}

add_action('wp_enqueue_scripts', function () {
  // Tailwind CSS (built by CLI to dist/tailwind.css)

  $css_file = get_stylesheet_directory() . '/dist/tailwind.css';
  if (file_exists($css_file)) {
    wp_enqueue_style('main', get_theme_file_uri('/dist/tailwind.css'), [], filemtime($css_file));
  }

  // Mix JS bundle
  $js = fmt_mix('/js/main.js');
  if ($js) {
    wp_enqueue_script('fmt-js', $js, [], null, true);
  }

  wp_enqueue_style(
    'onest-font',
    'https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap',
    [],
    null
  );
}, 100);

function register_button_styles()
{
  register_block_style(
    'core/button',
    array(
      'name' => 'primary',
      'label' => __('Primary', 'vega'),
    )
  );

  register_block_style(
    'core/button',
    array(
      'name' => 'secondary',
      'label' => __('Secondary', 'vega'),
    )
  );

  register_block_style(
    'core/button',
    array(
      'name' => 'gradient',
      'label' => __('Gradient', 'vega'),
    )
  );

  register_block_style(
    'core/button',
    array(
      'name' => 'icon-white',
      'label' => __('Icon (White)', 'vega'),
    )
  );

  register_block_style(
    'core/button',
    array(
      'name' => 'icon',
      'label' => __('Icon', 'vega'),
    )
  );
}

// Allow SVG uploads (no sanitization). Prefer a sanitizer plugin in production.
add_filter('upload_mimes', function ($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
  if (strtolower(pathinfo($filename, PATHINFO_EXTENSION)) === 'svg') {
    $data['ext'] = 'svg';
    $data['type'] = 'image/svg+xml';
  }
  return $data;
}, 10, 4);

add_action('init', 'register_button_styles');

