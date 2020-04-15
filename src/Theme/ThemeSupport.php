<?php
/**
 * Class for registering theme support features regardless of theme.
 *
 * @package JMichaelWard\JMWPlugin\Theme
 */

namespace JMichaelWard\JMWPlugin\Theme;

use WebDevStudios\OopsWP\Utility\Registerable;

/**
 * Class ThemeSupport
 *
 * @package JMichaelWard\Theme2020
 */
class ThemeSupport implements Registerable {
	/**
	 * Register this theme's support with WordPress.
	 */
	public function register() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
	}
}
