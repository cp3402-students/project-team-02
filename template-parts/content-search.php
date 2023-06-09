<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package countrytheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post__content">

		<?php if (has_post_thumbnail()) : ?>
			<figure class="featured-image index-image">
				<?php the_post_thumbnail('countrytheme-index-image'); ?>
			</figure>
		<?php endif; ?>

		<header class="entry-header">
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
					countrytheme_posted_on();
					countrytheme_posted_by();
					?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$file_embed = get_media_embedded_in_content( $content, array( 'object', 'embed', 'iframe' ) );
		?>

		<div class="entry-summary">
			<?php
			the_excerpt();
			?>

			<?php
			if ( ! empty( $file_embed ) ) {
				foreach ( $file_embed as $file_embed_html ) {
					echo '<div class="entry-file">';
					echo $file_embed_html;
					echo '</div>';
				}
			}
			?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php countrytheme_entry_footer(); ?>
		</footer><!-- .entry-footer -->

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
