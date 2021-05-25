<?php
/*
Plugin Name: Hitchcock Ben
Plugin URI: 
Description: Associated plugin for the Hitchcock Ben child template
Version: 1.0
Author: Ben
Author URI; http://ben.com
License: GPL
License URI: http://GPL.com
*/

// add_theme_support('menus');
// add_theme_support('post_thumbnail');
// add_theme_support('title-tag');

class Hitchcock_Plugin {

  public static function init() {
    add_action('admin_enqueue_scripts', function() {
      wp_enqueue_style('admin-style', get_stylesheet_directory_uri() . '/style-admin.css');
    });

    add_action('init', [__CLASS__, 'register_post_types']);

    add_action('add_meta_boxes_hb_book', [__CLASS__, 'add_hb_book_mb']);
    add_action('save_post_hb_book', [__CLASS__, 'save_hb_book'], 10, 1);
    add_filter('manage_edit-hb_book_columns', [__CLASS__, 'manage_hb_book_cln']);
    add_action('manage_hb_book_posts_custom_column', [__CLASS__, 'manage_hb_book_clns'], 10, 2);
    add_filter('the_content', [__CLASS__, 'hb_book_content_ft']);

    add_action('add_meta_boxes_hb_author', [__CLASS__, 'add_hb_author_mb']);
    add_action('save_post_hb_author', [__CLASS__, 'save_hb_author']);
    add_filter('manage_edit-hb_author_columns', [__CLASS__, 'manage_hb_author_cln']);
    add_action('manage_hb_author_posts_custom_column', [__CLASS__, 'manage_hb_author_clns'], 10, 2);
  }


  public static function register_post_types() {
    register_post_type('hb_book', [
      'labels' => [
        'name' => __( 'Books', 'book-pub' ),
        'singular_name' => __( 'Book', 'book-pub' ),
        'menu_name' => __( 'Books', 'book-pub' ),
        'name_admin_bar' => __( 'Book', 'book-pub' ),
        'add_new' => __( 'Add New', 'book-pub' ),
        'add_new_item' => __( 'Add New Book', 'book-pub' ),
        'new_item' => __( 'New Book', 'book-pub' ),
        'edit_item' => __( 'Edit Book', 'book-pub' ),
        'view_item' => __( 'View Book', 'book-pub' ),
        'all_items' => __( 'All Books', 'book-pub' ),
        'search_items' => __( 'Search Books', 'book-pub' ),
        'parent_item_colon' => __( 'Parent Books:', 'book-pub' ),
        'not_found' => __( 'No Books Found.', 'book-pub' ),
        'not_found_in_trash' => __( 'No Book Found in Trash.', 'book-pub' ) 
      ],
      'description' => __('Book custom post type.', 'book-pub'),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => ['slug' => 'hb_book'],
      'capability_type' => 'book',
      'map_meta_cap'    =>  true,
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 20,
      'menu_icon' =>  'dashicons-book',
      'supports' => ['title', 'editor', 'book', 'thumbnail', 'page-attributes'],
      'taxonomies' => ['category', 'post_tag'],
      'show_in_rest' => true
    ]);

    register_post_type('hb_author', [
      'labels' => [
        'name' => __( 'Authors', 'book-pub' ),
        'singular_name' => __( 'Author', 'book-pub' ),
        'menu_name' => __( 'Authors', 'book-pub' ),
        'name_admin_bar' => __( 'Author', 'book-pub' ),
        'add_new' => __( 'Add New', 'book-pub' ),
        'add_new_item' => __( 'Add New Author', 'book-pub' ),
        'new_item' => __( 'New Author', 'book-pub' ),
        'edit_item' => __( 'Edit Author', 'book-pub' ),
        'view_item' => __( 'View Author', 'book-pub' ),
        'all_items' => __( 'All Authors', 'book-pub' ),
        'search_items' => __( 'Search Authors', 'book-pub' ),
        'parent_item_colon' => __( 'Parent Authors:', 'book-pub' ),
        'not_found' => __( 'No Authors found.', 'book-pub' ),
        'not_found_in_trash' => __( 'No Authors found in Trash.', 'book-pub' ) 
      ],
      // 'description' => __('Author custom post type.', 'book-pub'),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => ['slug' => 'hb_author'],
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 20,
      'menu_icon' =>  'dashicons-businessman',
      'supports' => ['title', 'editor', 'book', 'thumbnail'],
      'taxonomies' => ['category', 'post_tag'],
      'show_in_rest' => true
    ]);

    $taxonomies = [
      'hb_book_type' => [
        'labels'  =>  [
          'name'                       => _x( 'Book Types', 'Taxonomy General Name', 'book-pub' ),
          'singular_name'              => _x( 'Book Type', 'Taxonomy Singular Name', 'book-pub' ),
          'menu_name'                  => __( 'Book Types', 'book-pub' ),
          'all_items'                  => __( 'All Items', 'book-pub' ),
          'parent_item'                => __( 'Parent Item', 'book-pub' ),
          'parent_item_colon'          => __( 'Parent Item:', 'book-pub' ),
          'new_item_name'              => __( 'New Item Name', 'book-pub' ),
          'add_new_item'               => __( 'Add New Item', 'book-pub' ),
          'edit_item'                  => __( 'Edit Item', 'book-pub' ),
          'update_item'                => __( 'Update Item', 'book-pub' ),
          'view_item'                  => __( 'View Item', 'book-pub' ),
          'separate_items_with_commas' => __( 'Separate items with commas', 'book-pub' ),
          'add_or_remove_items'        => __( 'Add or remove items', 'book-pub' ),
          'choose_from_most_used'      => __( 'Choose from the most used', 'book-pub' ),
          'popular_items'              => __( 'Popular Items', 'book-pub' ),
          'search_items'               => __( 'Search Items', 'book-pub' ),
          'not_found'                  => __( 'Not Found', 'book-pub' ),
          'no_terms'                   => __( 'No items', 'book-pub' ),
          'items_list'                 => __( 'Items list', 'book-pub' ),
          'items_list_navigation'      => __( 'Items list navigation', 'book-pub' )
        ],
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
      ]
    ];

    foreach($taxonomies as $taxonomy_id => $taxonomy_options) {
      register_taxonomy($taxonomy_id, ['hb_book', 'hb_author'], $taxonomy_options);
    }

    flush_rewrite_rules();

  }


  public static function add_hb_book_mb() {
    add_meta_box('book_details', 'book Details', function($post) {
      $meta = get_post_meta($post->ID, 'hb_book_meta', true);
      $meta = array_merge([
        'short_description' =>  '',
        'distributor'       =>  '',
        'authors'           =>  '',
        'sku'               =>  '',
        'price'             =>  0
      ], $meta ? $meta : []);
      ?>
      <label for="short_description">Short Description: </label>
      <input type="text" class="widefat metadata" id="short_description" name="short_description" value="<?=$meta['short_description']?>">
      <label for="distributor">Distributor: </label>
      <input type="text" class="widefat metadata" id="distributor" name="distributor" value="<?=$meta['distributor']?>">
      <label for="authors">Authors: </label>
      <input type="text" class="widefat metadata" id="authors" name="authors" value="<?=$meta['authors']?>">
      <label for="sku">SKU: </label>
      <input type="text" class="widefat metadata" id="sku" name="sku" value="<?=$meta['sku']?>">
      <label for="price">Price: </label>
      <input type="text" class="widefat metadata" id="price" name="price" value="<?=$meta['price']?>">
      <?php
    }, 'hb_book', 'normal', 'high');
  }


  public static function save_hb_book($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // wp_nonce()

    if (isset($_POST['post_title']) && $_POST['post_title'] != '') {
      update_post_meta($post_id, 'hb_book_meta', [
        'short_description' =>  $_POST['short_description'],
        'distributor'       =>  $_POST['distributor'],
        'authors'           =>  $_POST['authors'],
        'sku'               =>  $_POST['sku'],
        'price'             =>  $_POST['price']
      ]);
    }
  }


  public static function manage_hb_book_cln($columns) {
    unset($columns['categories']);
    unset($columns['tags']);
    $columns['price'] = __('Price', '');
    $columns['sku']  = __('SKU', '');
    return $columns;
  }


  public static function manage_hb_book_clns($column_name, $post_id) {
    $hb_book_meta = get_post_meta($post_id, 'hb_book_meta', true);
    switch($column_name) {
      case 'price':
        echo isset($hb_book_meta['price']) ? $hb_book_meta['price'] : 'n/a';
        break;
      case 'sku':
        echo isset($hb_book_meta['sku']) ? $hb_book_meta['sku'] : 'n/a';
        break;
    }
  }


  public static function hb_book_content_ft($content) {
    global $post;

    if (is_singular('hb_book')) {
      $meta = get_post_meta( $post->ID, 'hb_book_meta', true);
      if ($meta) {
        $meta = array_merge([
          'short_description' =>  '',
          'distributor'       =>  '#',
          'authors'           =>  '',
          'sku'               =>  '',
          'price'             =>  0
        ], $meta);
        $template = file_get_contents(get_stylesheet_directory() . '/views/book_meta.html');
        $template = str_replace("SDSCR", $meta['short_description'], $template);
        $template = str_replace('DIST', $meta['distributor'], $template); 
        $template = str_replace('AUTH', $meta['authors'], $template);
        $template = str_replace('_SKU', $meta['sku'], $template);
        $template = str_replace('PRI', $meta['price'], $template, );
        $content  = "<h3>Basic Info:</h3>" . $template . '<br>' . "<h3>Synopsis:</h3>" . $content;
      }
    }

    return $content;
  }


  public static function add_hb_author_mb() {
    add_meta_box('author_details', 'Author Details', function($post) {
      $meta = get_post_meta($post->ID, 'hb_author_meta', true);
      $meta = array_merge([
        'short_description' =>  '',
        'distributor'       =>  '',
        'authors'           =>  '',
        'sku'               =>  '',
        'cost'              =>  0
      ], $meta ? $meta : []);
      ?>
        <label for="short_description">Short Description: </label>
        <input type="text" class="widefat metadata" id="short_description" name="short_description" value="<?=$meta['short_description']?>">
        <label for="distributor">F: </label>
        <input type="text" class="widefat metadata" id="distributor" name="distributor" value="<?=$meta['distributor']?>"> 
        <label for="authors">Authors: </label>
        <input type="text" class="widefat metadata" id="authors" name="authors" value="<?=$meta['authors']?>">
        <label for="sku">SKU: </label>
        <input type="text" class="widefat metadata" id="sku" name="sku" value="<?=$meta['sku']?>">
        <label for="price">Price: </label>
        <input type="text" class="widefat metadata" id="price" name="price" value="<?=$meta['cost']?>">
      <?php
    }, 'hb_author', 'normal', 'high');
  }


  public static function save_hb_author($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // wp_nonce()

    if (isset($_POST['content']) && $_POST['content'] != '' && isset($_POST['post_title']) && $_POST['post_title'] != '') {
      update_post_meta( $post_id, 'hb_author_meta', [
        'short_description' =>  $_POST['short_description'],
        'distributor'       =>  $_POST['distributor'],
        'authors'           =>  $_POST['authors'],
        'sku'               =>  $_POST['sku'],
        'cost'              =>  $_POST['cost']
      ]);
    }
  }


  public static function manage_hb_author_cln($columns) {
    unset($columns['categories']);
    unset($columns['tags']);
    $columns['price'] = __('Price', '');
    $columns['sku']   = __('SKU', '');
    return $columns;
  }


  public static function manage_hb_author_clns($column_name, $post_id) {
    $hb_book_meta = get_post_meta($post_id, 'hb_author_meta', true);
    switch($column_name) {
      case 'price':
        echo $hb_book_meta['cost'];
        break;
      case 'sku':
        echo $hb_book_meta['sku'];
        break;
    }
  }

}


Hitchcock_Plugin::init();

