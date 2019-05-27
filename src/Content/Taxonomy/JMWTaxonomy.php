<?php
/**
 * Default structure for plugin taxonomies.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content\Taxonomy;

use WebDevStudios\OopsWP\Structure\Content\Taxonomy;

/**
 * Class JMWTaxonomy
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 * @since   2019-05-27
 */
abstract class JMWTaxonomy extends Taxonomy {
	/**
	 * Get default arguments for this taxonomy.
	 *
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	protected function get_default_args(): array {
		return array_merge(
			parent::get_default_args(),
			[
				'hierarchical' => true,
				'show_in_rest' => true,
			]
		);
	}
}
