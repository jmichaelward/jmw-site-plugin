<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content\Taxonomy;

/**
 * Class EventType
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
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
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_labels(): array {
		return [
			'name'          => _x( 'Event Types', 'jmw-site-plugin' ),
			'singular_name' => _x( 'Event Type', 'jmw-site-plugin' ),
		];
	}
}
