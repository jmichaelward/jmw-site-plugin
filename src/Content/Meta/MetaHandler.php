<?php
/**
 * Interface for MetaHandler objects.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Meta * @since 2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content\Meta;

use WebDevStudios\OopsWP\Utility\Hookable;
use WebDevStudios\OopsWP\Utility\Runnable;

/**
 * Interface MetaHandler
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Meta
 * @since   2019-05-27
 */
interface MetaHandler extends Hookable, Runnable {
	/**
	 * Set the file path for the handler.
	 *
	 * @param string $path The file path.
	 *
	 * @return mixed
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function set_file_path( string $path );
}
