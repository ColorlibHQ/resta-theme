<?php 
/**
 * @Packge     : Resta
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'resta_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'resta' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'resta_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'resta_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'resta_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'resta_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'resta_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'resta_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'resta_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'resta_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'resta' ),
            'panel'    => 'resta_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>