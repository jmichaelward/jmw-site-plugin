<?php
/**
 * Abstract post type class for this plugin's content.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class JMWPostType
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\PostType
 * @since   2019-05-27
 */
abstract class JMWPostType extends PostType {
	/**
	 * Default arguments for post types.
	 *
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_default_args(): array {
		return array_merge(
			parent::get_default_args(),
			[
				'show_in_rest' => true,
			]
		);
	}
}
