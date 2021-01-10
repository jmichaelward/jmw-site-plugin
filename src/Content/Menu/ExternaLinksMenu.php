<?php


namespace JMichaelWard\JMWPlugin\Content\Menu;


use WebDevStudios\OopsWP\Structure\Menu\Menu;

/**
 * Register the external links menu.
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */
class ExternaLinksMenu extends Menu {
	/**
	 * @var string
	 */
	protected $location = 'external-links-navigation';

	/**
	 * ExternaLinksMenu constructor.
	 */
	public function __construct() {
		$this->description = esc_html__( 'External Links', 'jmw-plugin' );
	}
}
