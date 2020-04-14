<?php
/**
 *
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin
 */

namespace JMichaelWard\JMWPlugin;

use JMichaelWard\JMWPlugin\Content\ContentActionRegistrar;
use JMichaelWard\JMWPlugin\Content\ContentRegistrar;
use JMichaelWard\JMWPlugin\Content\AcfHandler;
use JMichaelWard\JMWPlugin\Content\MenuRegistrar;
use JMichaelWard\JMWPlugin\Theme\ThemeService;
use JMichaelWard\JMWPlugin\View\ViewRegistrar;
use WebDevStudios\OopsWP\Structure\Plugin\Plugin;

/**
 * Class Plugin
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-05-19
 * @package JMichaelWard\JMWPlugin
 */
class JMWPlugin extends Plugin {
	/**
	 * JMWPlugin constructor.
	 *
	 * @param string $file_path The file path of this plugin.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
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
		MenuRegistrar::class,
		AcfHandler::class,
		ThemeService::class,
		ViewRegistrar::class,
	];
}
