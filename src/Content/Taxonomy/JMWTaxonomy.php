<?php
/**
 * Default structure for plugin taxonomies.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 */

namespace JMichaelWard\JMWPlugin\Content\Taxonomy;

use WebDevStudios\OopsWP\Structure\Content\Taxonomy;

/**
 * Class JMWTaxonomy
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-27
 * @package JMichaelWard\JMWPlugin\Content\Taxonomy
 */
abstract class JMWTaxonomy extends Taxonomy {
	/**
	 * Get default arguments for this taxonomy.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-05-27
	 * @return array
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
