<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin
 */

namespace JMichaelWard\JMWPlugin\Content;

use JMichaelWard\JMWPlugin\Content\PostType as PostType;
use JMichaelWard\JMWPlugin\Content\Taxonomy as Taxonomy;
use JMichaelWard\JMWPlugin\Content\Menu as Menu;
use WebDevStudios\OopsWP\Structure\Content\ContentType;
use WebDevStudios\OopsWP\Structure\Menu\MenuInterface;
use WebDevStudios\OopsWP\Structure\Service;
use WebDevStudios\OopsWP\Utility\FilePathDependent;
use WebDevStudios\OopsWP\Utility\Registerable;

/**
 * Class ContentRegistrar
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin
 */
class ContentRegistrar extends Service {
	use FilePathDependent;

	/**
	 * Array of PostType classes.
	 *
	 * @var array
	 * @since 2019-05-19
	 */
	private $post_types = [
		PostType\Project::class,
		PostType\ProjectUpdate::class,
		PostType\Event::class,
	];

	/**
	 * Array of taxonomy classes.
	 *
	 * @var array
	 * @since 2019-05-19
	 */
	private $taxonomies = [
		Taxonomy\ProjectRelationship::class,
		Taxonomy\EventType::class,
	];

	/**
	 * Array of menu class.
	 *
	 * @var array
	 * @since 2021-01-10
	 */
	private $menus = [
		Menu\PrimaryMenu::class,
		Menu\ExternaLinksMenu::class,
	];

	/**
	 * Register this service's hooks with WordPress.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-19
	 * @return void
	 */
	public function register_hooks() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'init', [ $this, 'register_taxonomies' ] );
		add_action( 'after_setup_theme', [ $this, 'register_menus'] );
	}

	/**
	 * Register the post types for this site.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-19
	 * @return void
	 */
	public function register_post_types() {
		foreach ( $this->post_types as $post_type_class ) {
			$this->register_content_type( new $post_type_class() );
		}
	}

	/**
	 * Register the taxonomies for this site.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-19
	 * @return void
	 */
	public function register_taxonomies() {
		foreach ( $this->taxonomies as $taxonomy_class ) {
			$this->register_content_type( new $taxonomy_class() );
		}
	}

	/**
	 * Register navigation menus for the site.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since 2021-01-10
	 * @return void
	 */
	public function register_menus() {
		foreach ( $this->menus as $menu_class ) {
			$this->register_content_type( new $menu_class() );
		}
	}

	/**
	 * Register ContentType objects with WordPress.
	 *
	 * @param Registerable $content_type A ContentType instance.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-19
	 * @return void
	 */
	private function register_content_type( Registerable $content_type ) {
		$content_type->register();
	}
}
