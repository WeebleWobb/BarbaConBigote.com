<?php

/* ===========================================================
Theme Support Functions
============================================================== */

add_theme_support( 'post-thumbnails' ); 

add_theme_support('menus');

/* ===========================================================
Navigation Functions
============================================================== */

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu'  =>  __('Primary Menu')
        )
    );
}

add_action('init', 'register_theme_menus');

// Custom Walker Nav Menu
class barba_walker extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $permalink = $item->url;

        $output .= '<li class="nav-item">';
        $output .= '<a href="' . $permalink . '" class="nav-link">';
        $output .= $title;
        $output .= '</a>';
        $output .= '</li>';

    }

}

/* ===========================================================
Stylesheets and Scripts Enqueue function
============================================================== */

// CSS to head
function barba_theme_style() {
    wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Signika+Negative:400,600,700');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    
}

add_action('wp_enqueue_scripts', 'barba_theme_style');


// Scripts to footer
function barba_theme_scripts() {
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '', true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js', array(), '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'barba_theme_scripts');
