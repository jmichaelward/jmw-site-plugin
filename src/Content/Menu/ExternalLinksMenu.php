<?php
/**
 * External Links menu registration.
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */

namespace JMichaelWard\JMWPlugin\Content\Menu;

use WebDevStudios\OopsWP\Structure\Menu\Menu;
use JMichaelWard\OopsWPPlus\Utility\Hydratable;

/**
 * Class ExternalLinksMenu
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */
class ExternalLinksMenu extends Menu implements Hydratable {
	/**
	 * Location of the external links menu.
	 *
	 * @var string
	 */
	protected $location = 'external-links-navigation';

	/**
	 * Hydrate the menu with additional data.
	 */
	public function hydrate() {
		$this->description = __( 'External Links', 'jmw-site-plugin' );
	}

	/**
	 * Register the menu with WordPress.
	 */
	public function register() {
		$this->hydrate();
		parent::register();
	}
}
