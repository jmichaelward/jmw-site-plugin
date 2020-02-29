<?php

use JMichaelWard\JMWPlugin\View\Event\Event;

/**
 * The template for event details.
 *
 * @var Event $view The Event view model.
 * @author Jeremy Ward <jeremy@jmichaelward.com>
 * @since  2019-07-03
 */

?>

<section class="jmw-event">
	<h2 class="jmw-event__title"><?php esc_html_e( 'Details', 'jmw-site-plugin' ); ?></h2>

	<?php
	if ( $view->is_presentation( get_the_ID() ) ) {
		do_action( 'jmw_view_presentation_details' );
	}
	?>

	<div class="jmw-event__details">
		<p><?php esc_html_e( 'Date: ', 'jmw-site-plugin' ); ?>
			<span class="jmw-event__date"><?php $view->date(); ?></span>
		</p>

		<p>
			<a class="jmw-event__link" href="<?php $view->url(); ?>">
				<?php esc_html_e( 'Event Website', 'jmw-site-plugin' ); ?>
			</a>
		</p>
	</div>
</section>

