<?php
/**
 * Taxonomy for Projects.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content\Taxonomy;

/**
 * Class Project
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
 */
class Project extends JMWTaxonomy {
	/**
	 * Slug for this taxonomy.
	 *
	 * @var string
	 * @since 2019-05-27
	 */
	protected $slug = 'jmw-project';

	/**
	 * Object types for this taxonomy.
	 *
	 * @var array
	 * @since 2019-05-27
	 */
	protected $object_types = [ 'jmw-project-updates' ];

	/**
	 * Rewrite the project taxonomy slug.
	 *
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_args(): array {
		return [
			'rewrite' => [
				'slug' => 'projects',
			],
		];
	}

	/**
	 * Labels for this taxonomy.
	 *
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_labels(): array {
		return [
			'name'          => _x( 'Projects', 'jmw-site-plugin' ),
			'singular_name' => _x( 'Project', 'jmw-site-plugin' ),
		];
	}
}