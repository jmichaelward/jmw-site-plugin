<?php
/**
 * Class to register the SpeakingEvent post type.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-19
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;

/**
 * Class Event
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-19
 */
class Event extends JMWPostType {
	/**
	 * Slug for this post type.
	 *
	 * @var string
	 * @since 2019-05-19
	 */
	protected $slug = 'jmw-event';

	/**
	 * Get arguments for this post type.
	 *
	 * @return array
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_args(): array {
		return [
			'rewrite' => [
				'slug' => 'events',
			],
		];
	}

	/**
	 * Get labels for this post type.
	 *
	 * @return array
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_labels(): array {
		return [
			'name'          => esc_html__( 'Events', 'jmw-site-plugin' ),
			'singular_name' => esc_html__( 'Event', 'jmw-site-plugin' ),
		];
	}
}