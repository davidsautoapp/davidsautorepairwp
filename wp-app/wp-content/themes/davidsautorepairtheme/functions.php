<?php
// echo get_template_directory_uri();
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css'); 
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');
  wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');


  wp_enqueue_script('bootstrap-js'
                                , get_template_directory_uri() . '/js/bootstrap.min.js'
                                , ['jquery']
                                , '1'
                                , true);
  wp_enqueue_script('jquery.prettyPhoto-js'
                                , get_template_directory_uri() . '/js/jquery.prettyPhoto.js'
                                , null
                                , '1'
                                , true);
  wp_enqueue_script('jquery.isotope-js'
                                , get_template_directory_uri() . '/js/jquery.isotope.min.js'
                                , null
                                , '1'
                                , true);
  wp_enqueue_script('wow.min-js'
                                , get_template_directory_uri() . '/js/wow.min.js'
                                , null
                                , '1'
                                , true);
  wp_enqueue_script('main-js'
                                , get_template_directory_uri() . '/js/main.js'
                                , null
                                , '1'
                                , true);
});