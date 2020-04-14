<?php
/**
 * Model for the main navigation menu.
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */

namespace JMichaelWard\JMWPlugin\Content\Menu;

use JMichaelWard\OopsWPPlus\Utility\Hydratable;
use WebDevStudios\OopsWP\Structure\Menu\Menu;

/**
 * Class MainMenu
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */
class MainMenu extends Menu implements Hydratable {
	/**
	 * Location name for the main menu.
	 *
	 * @var string
	 */
	protected $location = 'primary-navigation';

	/**
	 * Hydrate this object with additional data.
	 *
	 * Description must be string translatable, and we don't want to call
	 * WordPress methods in our constructor.
	 */
	public function hydrate() {
		$this->description = __( 'Primary Navigation', 'jmw-site-plugin' );
	}

	/**
	 * Register the menu with WordPress.
	 */
	public function register() {
		$this->hydrate();
		parent::register();
	}
}
