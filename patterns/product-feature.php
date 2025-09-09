<?php
/**
 * Title: Product Feature
 * Slug: vega/product-feature
 * Categories: featured
 * Description: Two-column feature with large image, title and two paragraphs.
 * Inserter: yes
 *
 * @package vega
 * @since 1.0.0
 */
?>

<!-- wp:group {"className":"flex flex-col md:flex-row gap-8 md:gap-0 md:items-center justify-between py-6 md:py-24","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group flex flex-col md:flex-row gap-8 md:gap-0 md:items-center justify-between py-6 md:py-24">

  <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"md:w-7/12 hero-media rounded-lg overflow-hidden mb-0 mr-0 w-full bg-base"} -->
  <figure class="wp-block-image size-full md:w-7/12 hero-media rounded-lg overflow-hidden mb-0 mr-0 w-full bg-base">
    <img src="<?php echo esc_url( get_theme_file_uri('src/images/50-50 Image.jpg') ); ?>" alt="Stock photo of a person working at a desk" />
  </figure>
  <!-- /wp:image -->

  <!-- wp:group {"className":"md:w-4/12 px-3 md:px-0"} -->
  <div class="wp-block-group md:w-4/12 px-3 md:px-0">

    <!-- wp:heading {"level":2,"className":"text-2xl md:text-4xl font-bold"} -->
    <h2 class="text-2xl md:text-4xl font-bold">Sed ut nisi quis felis varius molestie.</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"mt-4 mb-8"} -->
    <p class="mt-4 mb-8">Cras fermentum risus ac interdum euismod. Aliquam dui neque, convallis eu pharetra porta,
      condimentum in quam. Donec dictum lacus ac lectus cursus eleifend. Aliquam vulputate ipsum eu tincidunt dictum.
      Aliquam pretium sollicitudin quam, convallis porttitor risus vehicula sed.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"mt-4 mb-8"} -->
    <p class="mt-4 mb-8">Sed finibus dui sit amet turpis vehicula, at tincidunt urna sollicitudin. Integer justo quam,
      faucibus nec metus a, bibendum venenatis arcu. Integer interdum sapien tellus, vel imperdiet elit gravida non. Sed
      et placerat neque, at pellentesque eros.</p>
    <!-- /wp:paragraph -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->