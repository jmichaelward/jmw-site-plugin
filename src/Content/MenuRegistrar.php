<?php
/**
 * Menu registration service.
 *
 * @package JMichaelWard\JMWPlugin\Content\Menu
 */

namespace JMichaelWard\JMWPlugin\Content;

use WebDevStudios\OopsWP\Structure\Service;
use WebDevStudios\OopsWP\Structure\Menu\MenuInterface;
use JMichaelWard\JMWPlugin\Content\Menu;

/**
 * Class MenuRegistrar
 *
 * @package JMichaelWard\JMWPlugin\Content
 */
class MenuRegistrar extends Service {
	/**
	 * Menus provided to the themes.
	 *
	 * @var array
	 */
	private $menus = [
		Menu\MainMenu::class,
		Menu\ExternalLinksMenu::class,
	];

	/**
	 * Register this service with WordPress.
	 */
	public function register_hooks() {
		add_action( 'after_setup_theme', [ $this, 'register_menus' ] );
	}

	/**
	 * Register menus with WordPress.
	 */
	public function register_menus() {
		foreach ( $this->menus as $menu_class ) {
			$this->register_menu( new $menu_class() );
		}
	}

	/**
	 * Register a menu with WordPress.
	 *
	 * @param MenuInterface $menu An object which implements the MenuInterface.
	 */
	private function register_menu( MenuInterface $menu ) {
		$menu->register();
	}
}
