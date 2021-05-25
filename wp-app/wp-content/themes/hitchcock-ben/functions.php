<?php
add_theme_support('menus');
add_theme_support('post_thumbnail');
add_theme_support('title-tag');


class Hitchcock_Theme {

  public static function init() {
    add_action('wp_enqueue_scripts', function() {
      wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
      wp_register_style('main-style', get_stylesheet_uri());

      wp_enqueue_style('parent-style');
      wp_enqueue_style('main-style');
    });
  }
}


Hitchcock_Theme::init();
