<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package countrytheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php countrytheme_the_category_lists(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				countrytheme_posted_by();
				countrytheme_posted_on();
				?>
				<div class="entry-meta">
					<?php
					countrytheme_posted_on();
					countrytheme_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php countrytheme_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_excerpt();

//			the_content(
//				sprintf(
//					wp_kses(
//						/* translators: %s: Name of current post. Only visible to screen readers */
//						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'countrytheme' ),
//						array(
//							'span' => array(
//								'class' => array(),
//							),
//						)
//					),
//					wp_kses_post( get_the_title() )
//				)
//			);
//
//			wp_link_pages(
//				array(
//					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'countrytheme' ),
//					'after'  => '</div>',
//				)
//			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php countrytheme_entry_footer(); ?>
		</footer>

		<div class="continue-reading">
			<?php
			$read_more_link = sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'countrytheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
			?>
			<a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark">
				<?php echo $read_more_link; ?>
			</a>
		</div>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
