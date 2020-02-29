<?php
/**
 * Model for the event details template.
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View\Event
 */

namespace JMichaelWard\JMWPlugin\View\Event;

use JMichaelWard\JMWPlugin\View\TemplateView;

/**
 * Class Event
 *
 * @author  Jeremy Ward <jeremy@jmichaelward.com>
 * @since   2019-07-03
 * @package JMichaelWard\JMWPlugin\View\Event
 */
class Event extends TemplateView {
	/**
	 * The template file for this View.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	protected $template_file = 'event-details';

	/**
	 * The date of the event.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	private $date;

	/**
	 * The url of the event.
	 *
	 * @var string
	 * @since 2019-07-03
	 */
	private $url;

	/**
	 * Register the hooks for this view.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	public function register_hooks() {
		add_action( 'jmw_view_event_details', [ $this, 'render' ] );
	}

	/**
	 * Hydrate the event details with values.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	protected function hydrate() {
		$this->date = get_field( 'jmw_event_date' );
		$this->url  = get_field( 'jmw_event_url' );
	}

	/**
	 * Output the event date.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	public function date() {
		echo esc_html( date( 'F j, Y', strtotime( $this->date ) ) );
	}

	/**
	 * Output the event URL.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 */
	public function url() {
		echo esc_url( $this->url );
	}

	/**
	 * Determine whether the current event is of type presentation.
	 *
	 * @param int $post_id The ID of the event.
	 *
	 * @author Jeremy Ward <jeremy@jmichaelward.com>
	 * @since  2019-07-03
	 * @return bool
	 */
	public function is_presentation( $post_id ) {
		$terms = get_the_terms( $post_id, 'event-type' );

		return empty( $terms )
			? false
			: in_array( 'presentation', wp_list_pluck( $terms, 'slug' ), true );
	}
}
