<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;
/**
 * Class Project
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-27
 */
class Project extends JMWPostType {
	/**
	 * @var string
	 * @since 2019-05-27
	 */
	protected $slug = 'jmw-project-cpt';

	/**
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_args(): array {
		return [
			'hierarchical' => true,
			'rewrite'      => [
				'slug' => 'project',
			],
		];
	}

	/**
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_labels(): array {
		return [
			'name'          => esc_html__( 'Projects', 'jmw-site-plugin' ),
			'singular_name' => esc_html__( 'Project', 'jmw-site-plugin' ),
			'add_new'       => esc_html__( 'Add New Project', 'jmw-site-plugin' ),
		];
	}
}
