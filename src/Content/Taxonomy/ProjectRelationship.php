<?php
/**
 * Taxonomy for Projects.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 */

namespace JMichaelWard\JMWPlugin\Content\Taxonomy;

/**
 * Class ProjectRelationship
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 */
class ProjectRelationship extends JMWTaxonomy {
	/**
	 * Slug for this taxonomy.
	 *
	 * @var string
	 * @since 2019-05-27
	 */
	protected $slug = 'jmw-project-relationship';

	/**
	 * Object types for this taxonomy.
	 *
	 * @var array
	 * @since 2019-05-27
	 */
	protected $object_types = [ 'jmw-project-updates' ];

	/**
	 * Labels for this taxonomy.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-27
	 * @return array
	 */
	protected function get_labels(): array {
		return [
			'name'          => _x( 'Projects', 'jmw-site-plugin' ),
			'singular_name' => _x( 'Project', 'jmw-site-plugin' ),
		];
	}
}
