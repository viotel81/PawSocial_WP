<?php

function my_custom_post_question()
{
  $labels = array(
    'name'               => _x('FAQs', 'faqs'),
    'singular_name'      => _x('FAQ', 'faq'),
    'add_new'            => _x('Add New', 'faq'),
    'add_new_item'       => __('Add New FAQ'),
    'edit_item'          => __('Edit FAQ'),
    'new_item'           => __('New FAQ'),
    'all_items'          => __('All FAQs'),
    'view_item'          => __('View FAQ'),
    'search_items'       => __('Search FAQs'),
    'not_found'          => __('No faqs found'),
    'not_found_in_trash' => __('No faqs found in the Trash'),
    'parent_item_colon'  => '’',
    'menu_name'          => 'Questions'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Frequently Asked Questions and Answers',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'   => true,
  );
  register_post_type('faq', $args);
}
add_action('init', 'my_custom_post_question');

function my_custom_post_entertainer()
{
  $labels = array(
    'name'               => _x('People', 'entertainers'),
    'singular_name'      => _x('Person', 'entertainer'),
    'add_new'            => _x('Add New', 'entertainer'),
    'add_new_item'       => __('Add New Entertainer'),
    'edit_item'          => __('Edit Entertainer'),
    'new_item'           => __('New Entertainer'),
    'all_items'          => __('All Entertainers'),
    'view_item'          => __('View Entertainer'),
    'search_items'       => __('Search Entertainers'),
    'not_found'          => __('No entertainers found'),
    'not_found_in_trash' => __('No entertainers found in the Trash'),
    'parent_item_colon'  => '’',
    'menu_name'          => 'Entertainers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'About our entertainers and their skills',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'   => true,
  );
  register_post_type('entertainer', $args);
}
add_action('init', 'my_custom_post_entertainer');

function my_custom_post_service()
{
  $labels = array(
    'name'               => _x('Services', 'services'),
    'singular_name'      => _x('Service', 'services'),
    'add_new'            => _x('Add New', 'service'),
    'add_new_item'       => __('Add New Service'),
    'edit_item'          => __('Edit Service'),
    'new_item'           => __('New Service'),
    'all_items'          => __('All Services'),
    'view_item'          => __('View Service'),
    'search_items'       => __('Search Services'),
    'not_found'          => __('No services found'),
    'not_found_in_trash' => __('No services found in the Trash'),
    'parent_item_colon'  => '’',
    'menu_name'          => 'Services'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'About our services',
    'public'        => true,
    'menu_position' => 2,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'show_in_rest'  => true,
    'has_archive'   => true,
  );
  register_post_type('service', $args);
}
add_action('init', 'my_custom_post_service');

function pawsocial_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'pawsocial_theme_support');

function pawsocial_menus()
{
  $locations = array(
    'primary' => "Desktop Primary Topbar Menu",
    'footer' => "Footer Menu"
  );
  register_nav_menus($locations);
}

add_action('init', 'pawsocial_menus');


function pawsocial_register_styles()
{

  wp_enqueue_style('pawsocial-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
  wp_enqueue_style('pawsocial-style', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), '1.0', 'all');
  wp_enqueue_style('pawsocial-bootstrap-icon', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css", array(), '1.3.0', 'all');
  wp_enqueue_style('pawsocial-fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css", array(), '4.4.0', 'all');
}

add_action('wp_enqueue_scripts', 'pawsocial_register_styles');

function pawsocial_register_scripts()
{

  wp_enqueue_script('pawsocial-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), '5.1.3', true);
  wp_enqueue_script('pawsocial-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'pawsocial_register_scripts');

function pawsocial_widget_areas()
{

  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<div class="social">',
      'after_widget' => '</div>',
      'name' => 'Footer Area',
      'id' => 'footer-1',
      'description' => 'Footer Widget Area'
    )
  );
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Ent Card area',
      'id' => 'card-1',
      'description' => 'Entertainment Card Widget Area'
    )
  );
}

add_action('widgets_init', 'pawsocial_widget_areas');
