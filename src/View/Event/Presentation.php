<?php
/**
 * ViewHandler for the Presentation templates.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View\Event
 */

namespace JMichaelWard\JMWPlugin\View\Event;

use JMichaelWard\JMWPlugin\View\TemplateView;

/**
 * Class Presentation
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View\Event
 */
class Presentation extends TemplateView {
	/**
	 * The name of the template file.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	protected $template_file = 'presentation-details';

	/**
	 * The presentation title.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	private $title;

	/**
	 * The presentation description.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	private $description;

	/**
	 * URL to the slides.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	private $slides_url;

	/**
	 * Register the custom hooks for this view.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return void
	 */
	public function register_hooks() {
		add_action( 'jmw_view_presentation_details', [ $this, 'render' ] );
	}

	/**
	 * Hydrate the presentation details model.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	protected function hydrate() {
		$this->title       = get_field( 'jmw_presentation_title' );
		$this->description = get_field( 'jmw_presentation_description' );
		$this->slides_url  = get_field( 'jmw_presentation_slides_url' );
	}

	/**
	 * Output the title.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	public function title() {
		echo esc_html( $this->title );
	}

	/**
	 * Output the description.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	public function description() {
		echo wp_kses_post( $this->description );
	}

	/**
	 * Getter for the slides url property.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return string
	 */
	public function get_slides_url() {
		return $this->slides_url;
	}

	/**
	 * Output the slides url.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	public function slides_url() {
		echo esc_url( $this->slides_url );
	}
}
