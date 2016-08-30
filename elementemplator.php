<?php
/*
 * Plugin Name: Elementor Templater: ElemenTemplator
 * Plugin URI: http://www.wpdevhq.com/plugins/elementor-templator
 * Description: A helper plugin for users of [Elementor Pagebuilder] (https://wordpress.org/plugins/elementor/).
 * Version: 1.0.0
 * Author: WPDevHQ
 * Author URI: http://www.wpdevhq.com/
 * Requires at least:   4.4
 * Tested up to:        4.6
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