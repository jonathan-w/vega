<?php
/**
 * Title: Hero
 * Slug: vega/hero
 * Categories: featured
 * Block Types: core/image
 *
 * @package vega
 * @since 1.0.0
 */
?>
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom","flexWrap":"nowrap","backgroundColor":"base-alt"}} -->
<div class="wp-block-group flex items-end bg-base-alt rounded-lg overflow-hidden">

  <!-- wp:group -->
  <div class="wp-block-group w-1/2 px-12 py-16">

    <!-- wp:heading {"level":1} -->
    <h1 class="text-4xl md:text-6xl font-bold">A <span
        class="bg-gradient-to-r from-secondary via-primary to-accent bg-clip-text text-transparent">new world</span>
      <br /> of solutions.
    </h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p class="mt-4 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"11px"}}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"className":"is-style-primary"} -->
      <div class="wp-block-button">
        <a class="wp-block-button__link wp-element-button">
          Book a demo
          <svg class="h-3 w-3 ml-4" focusable="false" viewBox="0 0 13.218 13" fill="#11111f">
            <path d="M12.827,9.886,8.469,5.4,9.618,4.222l6.32,6.5-6.32,6.5L8.469,16.04l4.358-4.482H2.72V9.886Z"
              transform="translate(-2.72 -4.222)" />
          </svg>
        </a>
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
     
  </div>
  <!-- /wp:group -->

  <!-- wp:image {"align":"center","width":50%,"height":100%,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
  <figure class="wp-block-image aligncenter size-full is-resized w-1/2 m-0">
    <img src="<?php echo esc_url(get_theme_file_uri('src/images/Header Image.jpg')); ?>"
      alt="Stock photo of two people in a meeting" />
  </figure>
  <!-- /wp:image -->

</div>
<!-- /wp:group -->