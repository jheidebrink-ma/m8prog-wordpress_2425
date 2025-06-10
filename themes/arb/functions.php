<?php
function arb_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'main_menu' => __('Hoofdmenu', 'amsterdamse-reddingsbrigade')
  ]);
}
add_action('after_setup_theme', 'arb_theme_setup');

function arb_theme_scripts() {
  wp_enqueue_style('arb-main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'arb_theme_scripts');
