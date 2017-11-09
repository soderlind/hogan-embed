<?php
/**
 * Plugin Name: Hogan Module: Embed
 * Plugin URI: https://github.com/dekodeinteraktiv/hogan-embed
 * Description: oEmbed Module for Hogan
 * Version: 1.0.0-dev
 * Author: Dekode
 * Author URI: https://dekode.no
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * * Text Domain: hogan-embed
 * Domain Path: /languages/
 *
 * @package Hogan
 * @author Dekode
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once 'class-embed.php';

add_action( 'plugins_loaded', 'hogan_embed_load_textdomain' );
add_action( 'hogan/include_modules', 'hogan_embed_register_module' );

/**
 * Register module text domain
 */
function hogan_embed_load_textdomain() {
	load_plugin_textdomain( 'hogan-embed', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

/**
 * Register module in Hogan
 */
function hogan_embed_register_module() {
	hogan_register_module( new \Dekode\Hogan\Embed() );
}
