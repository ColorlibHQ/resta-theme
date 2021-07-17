<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'RESTA_DIR_URI' ) ) {
	define( 'RESTA_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'RESTA_DIR_ASSETS_URI' ) ) {
	define( 'RESTA_DIR_ASSETS_URI', RESTA_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'RESTA_DIR_CSS_URI' ) ) {
	define( 'RESTA_DIR_CSS_URI', RESTA_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'RESTA_DIR_JS_URI' ) ) {
	define( 'RESTA_DIR_JS_URI', RESTA_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'RESTA_DIR_IMGS_URI' ) ) {
	define( 'RESTA_DIR_IMGS_URI', RESTA_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'RESTA_DIR_ICON_IMG_URI' ) ) {
	define( 'RESTA_DIR_ICON_IMG_URI', RESTA_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'RESTA_DIR_PATH' ) ) {
	define( 'RESTA_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'RESTA_DIR_PATH_INC' ) ) {
	define( 'RESTA_DIR_PATH_INC', RESTA_DIR_PATH . 'inc/' );
}

//Resta Libraries Folder Directory
if ( ! defined( 'RESTA_DIR_PATH_LIBS' ) ) {
	define( 'RESTA_DIR_PATH_LIBS', RESTA_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'RESTA_DIR_PATH_CLASSES' ) ) {
	define( 'RESTA_DIR_PATH_CLASSES', RESTA_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'RESTA_DIR_PATH_HOOKS' ) ) {
	define( 'RESTA_DIR_PATH_HOOKS', RESTA_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function resta_admin_script(){
    wp_enqueue_style( 'resta-admin', get_template_directory_uri().'/assets/css/resta-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'resta_admin', get_template_directory_uri().'/assets/js/resta-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'resta_admin_script' );



/**
 * Include File
 *
 */
require_once( RESTA_DIR_PATH_INC . 'resta-breadcrumbs.php' );
require_once( RESTA_DIR_PATH_INC . 'resta-widgets-reg.php' );
require_once( RESTA_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( RESTA_DIR_PATH_INC . 'post-like.php' );
require_once( RESTA_DIR_PATH_INC . 'resta-functions.php' );
require_once( RESTA_DIR_PATH_INC . 'resta-commoncss.php' );
require_once( RESTA_DIR_PATH_INC . 'support-functions.php' );
require_once( RESTA_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( RESTA_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( RESTA_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( RESTA_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( RESTA_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( RESTA_DIR_PATH_HOOKS . 'hooks.php' );
require_once( RESTA_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( RESTA_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( RESTA_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Resta object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Resta = new Resta();