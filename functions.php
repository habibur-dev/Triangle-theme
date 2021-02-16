<?php

/**
 * 
 * Template Name: functions.php
 * Description: Add features to wordpress theme.
 * 
 */

/** customizer inclue */
require_once('templates/helpers/customizer.php');

 function triangle_theme_scripts()
 {
    /** include style files */

    /** Bootstrap CSS */
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');

    /** style.css */
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    /** Fontawesome CSS */
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css');

    /** Lightbox CSS */
    wp_enqueue_style('lightbox_css', get_template_directory_uri().'/css/lightbox.css');

    /** Animate CSS */
    wp_enqueue_style('animate_css', get_template_directory_uri().'/css/animate.min.css');

    /** Main CSS */
    wp_enqueue_style('main_css', get_template_directory_uri().'/css/main.css');

    /** Main CSS */
    wp_enqueue_style('responsive_css', get_template_directory_uri().'/css/responsive.css');

    
    //** All js */ 
    /* wp_enqueue_script( 'script', get_template_directory_uri() . '/js/bootstrap.min.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/coundown-timer.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/gmaps.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/holder.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/html5shiv.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.countTo.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.fitvids.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.isotope.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/lightbox.min.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/masonry.min.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/respond.min.js', array ( '' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/wow.min.js', array ( '' ), 1.1, true); 
    
    */
 }

 add_action('wp_enqueue_scripts', 'triangle_theme_scripts');

 /** add new features */
 function triangle_theme_supports()
 {
     add_theme_Support('title-tag');
     add_theme_Support('post-thumbnails');
     add_theme_Support('html5', array('search-form'));
     add_theme_Support('custom-logo');
 }
 add_action('after_setup_theme', 'triangle_theme_supports');

 /** Register navigation menu */
 function triangle_nav_menu()
 {
     register_nav_menus(array(
         'primary-menu' => __('Primary Menu', 'triangle')
     ));
 }

 add_action('init', 'triangle_nav_menu');

/** navigation active class */
function active_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 2);

/** class add in a tag */

function add_link_class($atts)
{
    $atts['class'] = 'menu-anchor';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_link_class');

?>