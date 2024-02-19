<?php
/**
 * Plugin Name: Elementor Custom Widget
 * Description: This Simple Custom Widget.
 * Plugin URI:  https://github.com/rahuldevphp
 * Version:     1.0.0
 * Author:      Rahul Prajapati
 * Author URI:  https://github.com/rahuldevphp
 * Text Domain: elementor-custom-widget
 * 
 * 
 * @package Elementor Custom Widget
 * @author Rahul Prajapati
 */

/**
 * Basic plugin definitions
 * 
 * @package Elementor Custom Widget
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if( ! defined( 'ECW_VERSION' ) ) {
	define( 'ECW_VERSION', '1.0.0' ); // Version of plugin
}

if( ! defined( 'ECW_DIR' ) ) {
	define( 'ECW_DIR', dirname( __FILE__ ) ); // Plugin dir
}

if( ! defined( 'ECW_URL' ) ) {
	define( 'ECW_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}

if( ! defined( 'ECW_PLUGIN_BASENAME' ) ) {
	define( 'ECW_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); // plugin base name
}

/**
 * Include the Elementor_Custom_Widget class file.
 */
require ECW_DIR . '/includes/class-elementor-custom-widget.php';
