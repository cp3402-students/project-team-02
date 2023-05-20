<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package countrytheme
 */

?>
<html lang="en">
<body>
	<footer id="colophon" class="site-footer">

		<?php get_search_form(); ?>

		<div class="footer-columns">
			<div class="footer-column">
				<h3>Quick Links</h3>
				<nav class="footer-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						)
					);
					?>
				</nav>
			</div>
			<div class="footer-column">
				<h3>Recent Events</h3>
				<?php
				$magazines = query_category("events", 7);

				echo '<div class="footer-links"><ul>';

				if ( $magazines->have_posts() ) :

					while ( $magazines->have_posts() ) :

						$magazines->the_post();
						echo '<li>' . the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ) . '</li>';

					endwhile;

				endif;

				wp_reset_postdata();
				echo '</ul></div>';

				?>
			</div>
			<div class="footer-column">
				<h3>Recent Magazines</h3>
				<?php
				$magazines = query_category("magazine", 7);

				echo '<div class="footer-links"><ul>';

				if ( $magazines->have_posts() ) :

					while ( $magazines->have_posts() ) :

						$magazines->the_post();
						echo '<li>' . the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ) . '</li>';

					endwhile;

				endif;

				wp_reset_postdata();
				echo '</ul></div>';

				?>
			</div>
		</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'countrytheme' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %s', 'countrytheme' ), 'WordPress' );
				?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://github.com/cp3402-students/project-team-02', 'countrytheme' ) ); ?>"><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme by %s', 'countrytheme' ), 'Project Team 02' );
				?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
