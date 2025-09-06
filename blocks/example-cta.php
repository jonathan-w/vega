<?php if (!defined('ABSPATH')) exit; ?>
<?php
$heading = get_field('heading') ?: 'Call to action';
$content = get_field('content') ?: 'Add some persuasive copy in ACF fields.';
?>
<section class="tw:my-8 tw:rounded-xl tw:p-6 tw:bg-primary/10 tw:border tw:border-primary/20">
  <h2 class="tw:text-2xl tw:font-semibold"><?php echo esc_html($heading); ?></h2>
  <div class="tw:mt-3">
    <?php echo wp_kses_post($content); ?>
  </div>
  <a href="#" class="tw:inline-block tw:mt-4 tw:px-4 tw:py-2 tw:rounded-lg tw:bg-primary tw:text-white tw:no-underline">Do the thing</a>
</section>
