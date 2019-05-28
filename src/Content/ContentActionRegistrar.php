<?php
/**
 * A little service to register actions for particular content-related events in WordPress.
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content
 * @since   2019-05-27
 */

namespace JMichaelWard\JMWPlugin\Content;

use WebDevStudios\OopsWP\Structure\Service;
use WP_Post;

/**
 * Class ContentActionRegistrar
 *
 * @author  Jeremy Ward <jeremy.ward@webdevstudios.com>
 * @package JMichaelWard\JMWPlugin\Content
 * @since   2019-05-27
 */
class ContentActionRegistrar extends Service {
	/**
	 * Register this service's hooks with WordPress.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function register_hooks() {
		add_action( 'publish_jmw-project-cpt', [ $this, 'create_project_relationship_term' ], 10, 2 );
	}

	/**
	 * Automatically create a project relationship term to make available to the Update post type.
	 *
	 * @param int     $post_id The post ID.
	 * @param WP_Post $post    The Project post object.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	public function create_project_relationship_term( $post_id, $post ) {
		if ( get_term_by( 'slug', $post->post_name, 'jmw-project-relationship' ) ) {
			return;
		}

		$previous_term = get_post_meta( $post_id, 'jmw-project-previous-term', true );

		if ( ! $this->term_has_changed( $post, $previous_term ) ) {
			wp_insert_term( $post->post_title, 'jmw-project-relationship', [ 'slug' => $post->post_name ] );

			return;
		}

		$this->update_term( $post, $previous_term );
	}

	/**
	 * Update the term with the new term.
	 *
	 * @param WP_Post $post          A Project post object.
	 * @param string  $previous_term The previous taxonomy term.
	 *
	 * @return void
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	private function update_term( $post, $previous_term ) {
		$term = get_term_by( 'slug', $previous_term, 'jmw-project-relationship' );

		update_post_meta( $post->ID, 'jmw-project-previous-term', $post->post_name );
		wp_update_term(
			$term->term_id,
			'jmw-project-relationship',
			[
				'name' => $post->post_title,
				'slug' => $post->post_name,
			]
		);
	}

	/**
	 * Determine whether a post term has changed.
	 *
	 * @param WP_Post $post          A Project post instance.
	 * @param string  $previous_term The previous term.
	 *
	 * @return bool
	 * @since  2019-05-27
	 * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
	 */
	private function term_has_changed( $post, $previous_term ) {
		return $previous_term !== $post->post_name;
	}
}
