<?php
/**
 * Title: Benefits
 * Slug: vega/benefits
 * Categories: featured
 * Description: Four column feature with icons and links to more information.
 * Inserter: yes
 *
 * @package vega
 * @since 1.0.0
 */
?>

<!-- wp:group {"className":"flex items-center","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group flex items-center justify-between py-24">

  <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"md:w-7/12"} -->
  <figure class="wp-block-image size-full md:w-7/12 rounded-lg overflow-hidden mb-0 bg-base">
    <img src="<?php echo esc_url(get_theme_file_uri('src/images/50-50 Image.jpg')); ?>"
      alt="Stock photo of a person working at a desk" class="block w-full h-full object-cover bg-base" />
  </figure>
  <!-- /wp:image -->

  <!-- wp:group {"className":" md:w-4/12"} -->
  <div class="wp-block-group md:w-4/12">

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