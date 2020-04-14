<?php
/**
 * Service to enable features which should be portable across themes.
 *
 * @package JMichaelWard\JMWPlugin\Theme
 */

namespace JMichaelWard\JMWPlugin\Theme;

use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class ThemeService
 *
 * @package JMichaelWard\JMWPlugin\Theme
 */
class ThemeService extends Service {
	/**
	 * Register this service's elements with WordPress.
	 */
	public function register_hooks() {
		add_action( 'after_setup_theme', [ $this, 'register_theme_support' ] );
	}

	/**
	 * Register theme support.
	 */
	public function register_theme_support() {
		( new ThemeSupport() )->register();
	}
}
