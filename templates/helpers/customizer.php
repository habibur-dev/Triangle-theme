<?php 

/**
 * 
 * Theme Name: Wordpress customizer settings
 * 
 */

function triangle_customizer_setting($wp_customizer){

    /** add new section */
    $wp_customizer->add_section('banner', array(
        'title'     => __('Banner Settings'),
        'priority'  => 160
    ));

    /** add capability */
    $wp_customizer->add_setting('banner_image', array(
        'capability' => 'edit_theme_options'
    ));

    /** add controls */
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'banner_image', array(
        'label' => __('Banner background Image'),
        'description' => __('Add banner background image.'),
        'section' => 'banner'
    )));

}
add_action('customize_register', 'triangle_customizer_setting');


?>