<?php
/**
 * Plugin Name: JMW Site Plugin
 * Description: The main plugin for jmichaelward.com.
 * Author: Jeremy Ward
 * Author URI: https://jmichaelward.com
 * Text Domain: jmw-site-plugin
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin
 */

use JMichaelWard\JMWPlugin\JMWPlugin;

$autoload = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

if ( ! class_exists( '\JMichaelWard\JMWPlugin\JMWPlugin' ) ) {
	return;
}

add_action( 'plugins_loaded', [ new JMWPlugin( __FILE__ ), 'run' ] );
