<?php
/*
Plugin Name: Elementor Templater
Plugin URI: http://www.wpdevhq.com/
Version: 1.0.0
Author: WPDevHQ
Author URI: http://www.wpdevhq.com/
*/

/* Do not access this file directly */
if ( ! defined( 'WPINC' ) ) { die; }

/* Constants
------------------------------------------ */

/* Set plugin version constant. */
define( 'ET_VERSION', '1.0.0' );

/* Set constant path to the plugin directory. */
define( 'ET_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );

/* Set the constant path to the plugin directory URI. */
define( 'ET_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

/* ElemenTemplater Class */
require_once( ET_PATH . 'elementemplater-class.php' );

/* Template Functions */
require_once( ET_PATH . 'inc/elementemplater-functions.php' );