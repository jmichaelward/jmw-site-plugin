<?php

namespace JMichaelWard\JMWPlugin\Content\Menu;

use WebDevStudios\OopsWP\Structure\Menu\Menu;

/**
 * Register the primary navigation menu.
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */
class PrimaryMenu extends Menu {
	/**
	 * @var string
	 */
	protected $location = 'primary';

	/**
	 * PrimaryMenu constructor.
	 */
	public function __construct() {
		$this->description = esc_html__( 'Primary Navigation', 'jmw-plugin' );
	}
}
