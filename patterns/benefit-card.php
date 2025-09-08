<?php
/**
 * Title: Benefit Card
 * Slug: vega/benefit-card
 * Categories: featured
 * Description: Bordered card with icon, title, one-line description, and a Learn more link.
 * Inserter: yes
 *
 * @package vega
 * @since 1.0.0
 */
?>

<!-- wp:group {"className":"benefit-card group border border-white relative rounded-xl p-6 md:p-8 focus-within:ring-2 focus-within:ring-primary/40 hover:bg-base-alt transition-colors ease-in duration-200","layout":{"type":"constrained"}} -->
<div class="wp-block-group benefit-card group border border-white relative rounded-xl p-6 md:p-8 focus-within:ring-2 focus-within:ring-primary/40 hover:bg-base-alt transition-colors ease-in duration-200">

  <!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":78,"className":"mb-18"} -->
  <figure class="wp-block-image size-thumbnail is-resized mb-18">
    <img alt="" width="78" />
  </figure>
  <!-- /wp:image -->

  <!-- wp:heading {"level":3,"className":"text-lg md:text-2xl font-bold"} -->
  <h3 class="text-lg md:text-2xl font-bold">Benefit title</h3>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"className":"mt-4 mb-14"} -->
  <p class="mt-4 mb-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
  <!-- /wp:paragraph -->

  <!-- wp:paragraph {"className":"mt-4"} -->
  <p class="mt-4">
    <span class="inline-flex items-center font-medium text-white no-underline">
      Learn more
      <svg
        class="h-4 w-4 ml-4 transition-transform duration-200 group-hover:translate-x-2 group-focus-within:translate-x-2"
        focusable="false" viewBox="0 0 13.218 13" fill="#fff">
        <path d="M12.827,9.886,8.469,5.4,9.618,4.222l6.32,6.5-6.32,6.5L8.469,16.04l4.358-4.482H2.72V9.886Z"
          transform="translate(-2.72 -4.222)" />
      </svg>
    </span>
  </p>
  <!-- /wp:paragraph -->

  <!-- wp:html -->
  <a href="#" class="absolute inset-0 rounded-xl" aria-label="Learn more">
    <span class="sr-only">Learn more</span>
  </a>
  <!-- /wp:html -->

</div>
<!-- /wp:group -->