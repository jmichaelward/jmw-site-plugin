<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin
 * @since   2019-05-19
 */

namespace JMichaelWard\JMWPlugin;

use JMichaelWard\JMWPlugin\Content\ContentActionRegistrar;
use JMichaelWard\JMWPlugin\Content\ContentRegistrar;
use WebDevStudios\OopsWP\Structure\Plugin\Plugin;

/**
 * Class Plugin
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin
 * @since   2019-05-19
 */
class JMWPlugin extends Plugin {
	/**
	 * JMWPlugin constructor.
	 *
	 * @param string $file_path The file path of this plugin.
	 *
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 * @since  2019-05-19
	 */
	public function __construct( string $file_path ) {
		$this->file_path = plugin_dir_path( $file_path );
	}

	/**
	 * The services for this plugin.
	 *
	 * @var array
	 * @since 2019-05-19
	 */
	protected $services = [
		ContentRegistrar::class,
		ContentActionRegistrar::class,
	];
}
