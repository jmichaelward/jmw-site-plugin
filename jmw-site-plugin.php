<?php
/**
 * Plugin Name: JMW Site Plugin
 * Description: The main plugin for jmichaelward.com.
 * Author: Jeremy Ward
 * Author URI: https://jmichaelward.com
 * Text Domain: jmw-site-plugin
 *
 * @package JMichaelWard\JMWPlugin
 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @since  2019-05-19
 */

use JMichaelWard\JMWPlugin\JMWPlugin;

$autoload = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

if ( ! class_exists( '\JMichaelWard\JMWPlugin\JMWPlugin' ) ) {
	return;
}

$plugin = new JMWPlugin( __FILE__ );
$plugin->run();
