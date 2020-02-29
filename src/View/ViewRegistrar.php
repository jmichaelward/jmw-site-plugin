<?php
/**
 * Registers the various ViewTemplates to make their hooks available to the front-end.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View
 */

namespace JMichaelWard\JMWPlugin\View;

use JMichaelWard\JMWPlugin\View\Event\Event;
use JMichaelWard\JMWPlugin\View\Event\Presentation;
use WebDevStudios\OopsWP\Structure\Service;
use WebDevStudios\OopsWP\Utility\FilePathDependent;

/**
 * Class ViewRegistrar
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View
 */
class ViewRegistrar extends Service {
	use FilePathDependent;

	/**
	 * The various views that this plugin registers.
	 *
	 * @var array
	 * @since 2019-07-03
	 */
	private $views = [
		Event::class,
		Presentation::class,
	];

	/**
	 * Register this service with WordPress.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return void
	 */
	public function register_hooks() {
		add_action( 'after_setup_theme', [ $this, 'register_views' ] );
	}

	/**
	 * Register the TemplateView actions with WordPress.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return void
	 */
	public function register_views() {
		foreach ( $this->views as $view_class ) {
			/* @var TemplateView $view TemplateView instance. */
			$view = new $view_class();
			$view->set_file_path( $this->file_path );
			$view->register_hooks();
		}
	}
}
