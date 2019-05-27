<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin
 * @since   2019-05-19
 */

namespace JMichaelWard\JMWPlugin\Content;

use JMichaelWard\JMWPlugin\Content\Meta as Meta;
use JMichaelWard\JMWPlugin\Content\PostType\ProjectUpdate;
use JMichaelWard\JMWPlugin\Content\PostType\Event;
use JMichaelWard\JMWPlugin\Content\Taxonomy\EventType;
use JMichaelWard\JMWPlugin\Content\Taxonomy\Project;
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
		ProjectUpdate::class,
		Event::class,
	];

	/**
	 * Array of taxonomy classes.
	 *
	 * @var array
	 * @since 2019-05-19
	 */
	private $taxonomies = [
		Project::class,
		EventType::class,
	];

	/**
	 * Array of meta content handlers.
	 *
	 * @var array
	 * @since 2019-05-27
	 */
	private $meta_handlers = [
		Meta\AcfHandler::class,
	];

	/**
	 * Run this registrar.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function run() {
		parent::run();
		$this->setup_meta_handlers();
	}

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
	 * Register meta handlers with WordPress.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function setup_meta_handlers() {
		foreach ( $this->meta_handlers as $meta_handler_class ) {
			$this->run_meta_handler( new $meta_handler_class() );
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

	/**
	 * Run the MetaHandler object.
	 *
	 * @param Meta\MetaHandler $meta_handler MetaHandler instance.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	private function run_meta_handler( Meta\MetaHandler $meta_handler ) {
		$meta_handler->set_file_path( $this->file_path );
		$meta_handler->run();
	}
}
