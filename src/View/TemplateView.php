<?php
/**
 * Abstract class for template views.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View
 */

namespace JMichaelWard\JMWPlugin\View;

use WebDevStudios\OopsWP\Utility\FilePathDependent;
use WebDevStudios\OopsWP\Utility\Hookable;
use WebDevStudios\OopsWP\Utility\Renderable;

/**
 * Class TemplateView
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View
 */
abstract class TemplateView implements Hookable, Renderable {
	use FilePathDependent;

	/**
	 * The template file name.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	protected $template_file;

	/**
	 * Method to hydrate the model with data.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return mixed
	 */
	abstract protected function hydrate();

	/**
	 * Get the root file path to templates.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return string
	 */
	public function get_file_path(): string {
		return $this->file_path . '/templates/';
	}

	/**
	 * Render the template for this view.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return void
	 */
	public function render() {
		$view = $this;
		$view->hydrate();

		include $this->get_file_path() . '/' . $this->template_file . '.php';
	}
}
