<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\PostType
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;

/**
 * Class Project
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\PostType
 */
class Project extends JMWPostType {
	/**
	 * @var string
	 * @since 2019-05-27
	 */
	protected $slug = 'jmw-project-cpt';

	/**
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-27
	 * @return array
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
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-27
	 * @return array
	 */
	protected function get_labels(): array {
		return [
			'name'          => esc_html__( 'Projects', 'jmw-site-plugin' ),
			'singular_name' => esc_html__( 'Project', 'jmw-site-plugin' ),
			'add_new'       => esc_html__( 'Add New Project', 'jmw-site-plugin' ),
		];
	}
}
