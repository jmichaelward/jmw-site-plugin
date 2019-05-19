<?php
/**
 * Class to register the SpeakingEvent post type.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-19
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class SpeakingEvent
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-19
 */
class SpeakingEvent extends PostType {
	/**
	 * Slug for this post type.
	 *
	 * @var string
	 * @since 2019-05-19
	 */
	protected $slug = 'jmw-speaking-event';

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
				'slug' => 'speaking-events',
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
			'name'          => esc_html__( 'Speaking Events', 'jmw-site-plugin' ),
			'singular_name' => esc_html__( 'Speaking Event', 'jmw-site-plugin' ),
		];
	}
}