<?php
/**
 * Class to register the Project post type.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin\Content\PostType
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;

/**
 * Class ProjectUpdate
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin\Content\PostType
 */
class ProjectUpdate extends JMWPostType {
	/**
	 * The slug for this post type.
	 *
	 * @var string
	 * @since 2019-05-19
	 */
	protected $slug = 'jmw-project-updates';

	/**
	 * Get arguments for this post type.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-19
	 * @return array
	 */
	protected function get_args(): array {
		return [
			'hierarchical'      => true,
			'show_in_menu'      => 'edit.php?post_type=jmw-project-cpt',
			'show_in_nav_menus' => false,
			'rewrite'           => [
				'slug' => 'project-update',
			],
			'supports'          => [
				'title',
				'editor',
				'page-attributes',
			],
			'taxonomies'        => [
				'jmw-project-relationship',
			],
		];
	}

	/**
	 * Get the labels for this post type.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-19
	 * @return array
	 */
	protected function get_labels(): array {
		return [
			'name'          => esc_html__( 'Project Updates', 'jmw-site-plugin' ),
			'singular_name' => esc_html__( 'Project Update', 'jmw-site-plugin' ),
		];
	}
}
