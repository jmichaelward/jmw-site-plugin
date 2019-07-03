<?php
/**
 * Handler for updating the location where ACF saves JSON data.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Meta
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content;

use WebDevStudios\OopsWP\Structure\Service;
use WebDevStudios\OopsWP\Utility\FilePathDependent;

/**
 * Class AcfHandler
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content\Meta
 * @since   2019-05-27
 */
class AcfHandler extends Service {
	use FilePathDependent;

	/**
	 * Register hooks with WordPress.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function register_hooks() {
		add_filter( 'acf/settings/save_json', [ $this, 'set_save_path' ] );
		add_filter( 'acf/settings/load_json', [ $this, 'set_load_path' ] );
	}

	/**
	 * Override for FilePathDependent, since we need to modify the path value a bit.
	 *
	 * @param string $path The file path.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function set_file_path( string $path ) {
		$this->file_path = $path . 'acf-json';
	}

	/**
	 * Set the ACF save file path.
	 *
	 * @return mixed
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function set_save_path() {
		return $this->file_path;
	}

	/**
	 * Set the load file path for ACF field groups.
	 *
	 * @param array $file_paths ACF's array of file paths.
	 *
	 * @see https://www.advancedcustomfields.com/resources/local-json/#loading-explained
	 *
	 * @return array
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function set_load_path( array $file_paths ) {
		unset( $file_paths[0] );

		$file_paths[] = $this->file_path;

		return $file_paths;
	}
}
