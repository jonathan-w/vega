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

<!-- wp:group {"className":"flex bg-secondary justify-between rounded-xl has-quote-bg bg-cover bg-center p-3","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group flex bg-secondary justify-between rounded-xl has-quote-bg bg-cover bg-center p-3">

  <!-- wp:group {"className":"md:w-8/12 flex flex-col justify-between items-start md:p-12 text-on-secondary","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
  <div class="wp-block-group md:w-8/12 flex flex-col justify-between items-start md:p-12 text-on-secondary">

    <!-- wp:heading {"level":2,"className":"text-2xl md:text-4xl font-bold"} -->
    <h2 class="text-2xl md:text-4xl font-bold">“unc non massa sit amet metus condimentum varius ac eget libero. Vestibulum nec semper nulla. Aliquam at interdum lacus.”</h2>
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

  <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"md:w-3/12 rounded-r-lg overflow-hidden mb-0 mr-0 w-full bg-base"} -->
  <figure class="wp-block-image size-full md:w-3/12 rounded-r-lg overflow-hidden mb-0 mr-0 w-full bg-base">
    <img src="<?php echo esc_url( get_theme_file_uri('src/images/Testimonial Image.jpg') ); ?>" alt="Stock photo of a person working at a desk" />
  </figure>
  <!-- /wp:image -->

</div>
<!-- /wp:group -->
