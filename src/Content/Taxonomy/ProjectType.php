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
 * Class ProjectType
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
 */
class ProjectType extends JMWTaxonomy {
	/**
	 * Slug for this taxonomy.
	 *
	 * @var string
	 * @since 2019-05-27
	 */
	protected $slug = 'project-type';

	/**
	 * Object types for this taxonomy.
	 *
	 * @var array
	 * @since 2019-05-27
	 */
	protected $object_types = [ 'jmw-project' ];

	/**
	 * Labels for this taxonomy.
	 *
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_labels(): array {
		return [
			'name'          => _x( 'Project Types', 'jmw-site-plugin' ),
			'singular_name' => _x( 'Project Types', 'jmw-site-plugin' ),
		];
	}
}
