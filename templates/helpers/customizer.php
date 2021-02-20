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
        'label' => __('Banner Background Image'),
        'description' => __('Add banner background image.'),
        'section' => 'banner'
    )));

    /** Banner title text */
    $wp_customizer->add_setting('banner_title', array(
        'capability' => 'edit_theme_options'
    ));

    /** banner titile control */
    $wp_customizer->add_control('banner_title_control', array(
        'label' => __('Banner Title'),
        'description' => 'Add banner title text.',
        'section' => 'banner',
        'settings' => 'banner_title'
    ));

    /** Banner details text */
    $wp_customizer->add_setting('banner_details', array(
        'capability' => 'edit_theme_options'
    ));

    /** banner details control */
    $wp_customizer->add_control('banner_details_control', array(
        'label' => __('Banner Description'),
        'description' => 'Add banner description text.',
        'section' => 'banner',
        'settings' => 'banner_details'
    ));

}
add_action('customize_register', 'triangle_customizer_setting');


?>