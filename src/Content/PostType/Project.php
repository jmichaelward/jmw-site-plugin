<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-19
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;
use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class Project
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-19
 */
class Project extends PostType {
	/**
	 * The slug for this post type.
	 *
	 * @var string
	 * @since 2019-05-19
	 */
	protected $slug = 'jmw-project';

	/**
	 * Get arguments for this post type.
	 *
	 * @return array
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_args(): array {
		return [
			'hierarchical' => true,
			'supports'     => [
				'title',
				'editor',
				'page-attributes',
			],
		];
	}

	/**
	 * Get the labels for this post type.
	 *
	 * @return array
	 * @since  2019-05-19
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_labels(): array {
		return [
			'name'          => esc_html__( 'Projects', 'jmw-site-plugin' ),
			'singular_name' => esc_html__( 'Project', 'jmw-site-plugin' ),
		];
	}
}
