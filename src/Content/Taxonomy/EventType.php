<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 */

namespace JMichaelWard\JMWPlugin\Content\Taxonomy;

/**
 * Class EventType
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 */
class EventType extends JMWTaxonomy {
	/**
	 * Slug for this taxonomy.
	 *
	 * @var string
	 * @since 2019-05-27
	 */
	protected $slug = 'event-type';

	/**
	 * Object types this taxonomy supports.
	 *
	 * @var array
	 * @since 2019-05-27
	 */
	protected $object_types = [ 'jmw-event' ];

	/**
	 * Labels for this taxonomy.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-27
	 * @return array
	 */
	protected function get_labels(): array {
		return [
			'name'          => _x( 'Event Types', 'jmw-site-plugin' ),
			'singular_name' => _x( 'Event Type', 'jmw-site-plugin' ),
		];
	}
}
