<?php
/**
 * The template for the presentation details.
 *
 * @var Presentation $view The view model.
 */

use JMichaelWard\JMWPlugin\View\Event\Presentation;

function some_function( $param1, $param2 ) {}

array_merge( [ 'one' ], function () {

}
);
?>

<div class="jmw-presentation">
	<h2 class="jmw-presentation__title"><?php $view->title(); ?></h2>
	<p class="jmw-presentation__description"><?php $view->description(); ?></p>

	<?php if ( $view->get_slides_url() ) : ?>
		<p>
			<a class="jmw-presentation__slides-link" href="<?php $view->slides_url(); ?>">
				<?php esc_html_e( 'Slides available here.', 'jmw-site-plugin' ); ?>
			</a>
		</p>
	<?php endif; ?>
</div>
