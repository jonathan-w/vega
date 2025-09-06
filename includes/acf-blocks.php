<?php
if (!defined('ABSPATH')) exit;

add_action('acf/init', function () {
  if (!function_exists('acf_register_block_type')) return;

  acf_register_block_type([
    'name'            => 'example-cta',
    'title'           => __('Example CTA', 'fse-mix-tailwind'),
    'description'     => __('A minimal CTA block using ACF.', 'fse-mix-tailwind'),
    'category'        => 'widgets',
    'icon'            => 'megaphone',
    'keywords'        => ['cta','button'],
    'mode'            => 'edit',
    'render_template' => get_theme_file_path('/blocks/example-cta.php'),
    'supports'        => [
      'align' => ['wide','full'],
      'jsx'   => false
    ]
  ]);
});
