<?php

function pawsocial_theme_support(){
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'pawsocial_theme_support');

function pawsocial_menus(){
    $locations = array(
        'primary' => "Desktop Primary Topbar Menu",
        'footer'=> "Footer Menu"
    );
    register_nav_menus($locations);
}

add_action('init', 'pawsocial_menus');


function pawsocial_register_styles(){

    wp_enqueue_style('pawsocial-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('pawsocial-style', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), '1.0', 'all');
    wp_enqueue_style('pawsocial-bootstrap-icon', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css", array(), '1.3.0', 'all');
    wp_enqueue_style('pawsocial-fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css", array(), '4.4.0', 'all');
    
}

add_action('wp_enqueue_scripts', 'pawsocial_register_styles');

function pawsocial_register_scripts(){
    
    wp_enqueue_script('pawsocial-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), '5.1.3', true);
    wp_enqueue_script('pawsocial-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'pawsocial_register_scripts');
