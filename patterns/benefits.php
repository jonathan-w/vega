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

$query = new WP_Query([
    'post_type'      => 'service',
    'nopaging'       => true,
    'posts_per_page' => 4,
    'orderby'        => 'date',
    'order'          => 'ASC',
]);
?>

<!-- wp:group {"className":"flex flex-col lg:flex-row lg:items-stretch","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group flex flex-col lg:flex-row lg:items-stretch justify-between py-8 lg:py-24 gap-8">

    <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>

            <!-- wp:group {"className":"lg:w-1/4 flex"} -->
            <div class="wp-block-group lg:w-1/4 flex">

                <!-- wp:group {"className":"benefit-card group border border-white relative rounded-xl p-6 lg:p-8 focus-within:ring-2 focus-within:ring-primary/40 hover:bg-base-alt transition-colors ease-in duration-200 flex flex-col h-full w-full","layout":{"type":"constrained"}} -->
                <div class="wp-block-group benefit-card group border border-white relative rounded-xl p-6 lg:p-8 focus-within:ring-2 focus-within:ring-primary/40 hover:bg-base-alt transition-colors ease-in duration-200 flex flex-col h-full w-full">

                    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":78,"className":"mb-18"} -->
                    <figure class="wp-block-image size-thumbnail is-resized mb-8 lg:mb-18">
                        <?php
                        $icon = get_field('icon');
                        if ($icon):
                            if (is_array($icon) && isset($icon['url'])): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>" width="78" />
                            <?php else: ?>
                                <img src="<?php echo esc_url($icon); ?>" alt="" width="78" />
                            <?php endif;
                        endif;
                        ?>
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"level":3,"className":"text-lg lg:text-2xl font-bold"} -->
                    <h3 class="text-lg lg:text-2xl font-bold">
                        <?php echo esc_html(get_field('title') ?: get_the_title()); ?>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"mt-4 mb-8 lg:mb-14"} -->
                    <p class="mt-4 mb-8 lg:mb-14">
                        <?php echo esc_html(get_field('description')); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"mt-auto"} -->
                    <p class="mt-auto">
                        <span class="inline-flex items-center font-medium text-white no-underline">
                            Learn more
                            <svg class="h-4 w-4 ml-4 transition-transform duration-200 group-hover:translate-x-2 group-focus-within:translate-x-2"
                                focusable="false" viewBox="0 0 13.218 13" fill="#fff">
                                <path
                                    d="M12.827,9.886,8.469,5.4,9.618,4.222l6.32,6.5-6.32,6.5L8.469,16.04l4.358-4.482H2.72V9.886Z"
                                    transform="translate(-2.72 -4.222)" />
                            </svg>
                        </span>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:html -->
                    <a href="<?php the_permalink(); ?>" class="absolute inset-0 rounded-xl" aria-label="Learn more">
                        <span class="sr-only">Learn more</span>
                    </a>
                    <!-- /wp:html -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

</div>
<!-- /wp:group -->
