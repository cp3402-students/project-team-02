<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package countrytheme
 */

?>

		<main id="main" class="site-main <?php if ( is_404() ) { echo 'error-404'; } else { echo 'no-results'; } ?> not-found">

			<header class="page-header">
				<h1 class="page-title">
					<?php
					if ( is_404() ) { esc_html_e( 'No Posts Found', 'countrytheme' );
					} else if ( is_search() ) {
						/* translators: %s = search query */
						printf( esc_html__( 'No Matches Found for &ldquo;%s&rdquo;', 'countrytheme'), get_search_query() );
					} else {
						esc_html_e( 'No Matches Found', 'countrytheme' );
					}
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p><?php printf( wp_kses( __( 'Is this your first rodeo? <a href="%1$s">Get started here</a>.', 'countrytheme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

				<?php elseif ( is_search() ) : ?>

					<p><?php esc_html_e( 'Sorry partner, we couldn&rsquo;t find any matches. Check out our latest posts or try searching something else.', 'countrytheme' ); ?></p>
					<?php get_search_form(); ?>

				<?php elseif ( is_404() ) : ?>

					<p><?php esc_html_e( 'Sorry partner, there&rsquo;s nothing here. Check out our latest posts or try searching something else.', 'countrytheme' ); ?></p>
					<?php get_search_form(); ?>

				<?php else : ?>

					<p><?php esc_html_e( 'Sorry partner, there&rsquo;s nothing here. Check out our latest posts or try searching something else.', 'countrytheme' ); ?></p>
					<?php get_search_form(); ?>

				<?php endif; ?>
			</div><!-- .page-content -->

			<?php
			if ( is_404() || is_search() ) {
				?>
				<h2 class="page-title secondary-title"><?php esc_html_e( 'Most Recent Posts:', 'countrytheme' ); ?></h2>
				<?php
				// Get the 6 latest posts
				$args = array(
					'posts_per_page' => 4
				);
				$latest_posts_query = new WP_Query( $args );
				// The Loop
				if ( $latest_posts_query->have_posts() ) {
					while ( $latest_posts_query->have_posts() ) {
						$latest_posts_query->the_post();
						// Get the standard index page content
						get_template_part( 'template-parts/content', get_post_format() );
					}
				}
				/* Restore original Post Data */
				wp_reset_postdata();
			} // endif
			?>


		</main><!-- #main -->

<?php
//get_sidebar();
get_footer();