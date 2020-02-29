<?php
/**
 * Abstract post type class for this plugin's content.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\PostType
 */

namespace JMichaelWard\JMWPlugin\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class JMWPostType
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\PostType
 */
abstract class JMWPostType extends PostType {
	/**
	 * Default arguments for post types.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-27
	 * @return array
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
