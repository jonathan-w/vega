<?php
/**
 * Title: Headline Quote
 * Slug: vega/headline-quote
 * Categories: testimonials
 * Description: Full width block quote with image.
 * Inserter: yes
 *
 * @package vega
 * @since 1.0.0
 */
?>

<!-- wp:group {"className":"flex flex-col md:flex-row bg-secondary justify-between rounded-xl has-quote-bg bg-size-[0] md:bg-cover bg-center p-3","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div
  class="wp-block-group flex flex-col md:flex-row bg-secondary justify-between rounded-xl has-quote-bg bg-size-[0] md:bg-cover bg-center p-3">

  <!-- wp:group {"className":"md:w-7/12 lg:w-8/12 flex flex-col justify-between items-start md:p-12 text-on-secondary","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
  <div class="wp-block-group md:w-7/12 lg:w-8/12 flex flex-col justify-between items-start px-6 py-8 md:py-12 md:px-12 text-on-secondary">

    <!-- wp:heading {"level":2,"className":"text-2xl lg:text-4xl font-bold mb-24 md:mb-0"} -->
    <h2 class="text-3xl lg:text-4xl font-bold mb-24 md:mb-0">“unc non massa sit amet metus condimentum varius ac eget
      libero. Vestibulum nec semper nulla. Aliquam at interdum lacus.”</h2>
    <!-- /wp:heading -->

    <!-- wp:group -->
    <div class="wp-block-group">

      <!-- wp:paragraph {"className":"font-black"} -->
      <p class="font-black">Andrew Andrews</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"mt-1"} -->
      <p class="mt-1">Marketing Manager</p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

  <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-mobile-cover md:w-5/12 lg:w-3/12 rounded-lg lg:rounded-l-none overflow-hidden mb-0 mr-0 w-full bg-base max-h-64 md:max-h-none lg:h-full "} -->
  <figure class="wp-block-image size-full is-mobile-cover md:w-5/12 lg:w-3/12 rounded-lg lg:rounded-l-none overflow-hidden mb-0 mr-0 w-full bg-base max-h-64 md:max-h-none lg:h-full ">
    <img src="<?php echo esc_url(get_theme_file_uri('src/images/Testimonial Image.jpg')); ?>"
      alt="Stock photo of a person working at a desk" />
  </figure>
  <!-- /wp:image -->

</div>
<!-- /wp:group -->