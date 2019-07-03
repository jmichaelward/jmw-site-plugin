<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin
 * @since   2019-05-19
 */

namespace JMichaelWard\JMWPlugin\Content;

use JMichaelWard\JMWPlugin\Content\PostType as PostType;
use JMichaelWard\JMWPlugin\Content\Taxonomy as Taxonomy;
use WebDevStudios\OopsWP\Structure\Content\ContentType;
use WebDevStudios\OopsWP\Structure\Service;
use WebDevStudios\OopsWP\Utility\FilePathDependent;

/**
 * Class ContentRegistrar
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin
 * @since   2019-05-19
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
	 * Register this service's hooks with WordPress.
	 *
	 * @return void
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function register_hooks() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'init', [ $this, 'register_taxonomies' ] );
	}

	/**
	 * Register the post types for this site.
	 *
	 * @return void
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function register_post_types() {
		foreach ( $this->post_types as $post_type_class ) {
			$this->register_content_type( new $post_type_class() );
		}
	}

	/**
	 * Register the taxonomies for this site.
	 *
	 * @return void
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function register_taxonomies() {
		foreach ( $this->taxonomies as $taxonomy_class ) {
			$this->register_content_type( new $taxonomy_class() );
		}
	}

	/**
	 * Register ContentType objects with WordPress.
	 *
	 * @param ContentType $content_type A ContentType instance.
	 *
	 * @return void
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	private function register_content_type( ContentType $content_type ) {
		$content_type->register();
	}
}
