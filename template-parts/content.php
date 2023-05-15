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

	<?php $post_link = esc_url( get_permalink() ) ?>
	<div class="post__content">

		<?php if (has_post_thumbnail()) : ?>
			<figure class="featured-image index-image">
				<a href="<?php echo $post_link ?>" rel="bookmark">
				<?php the_post_thumbnail('countrytheme-index-image'); ?>
				</a>
			</figure>
		<?php endif; ?>

		<header class="entry-header">
			<?php countrytheme_the_category_lists(); ?>

			<?php
			the_title( '<h2 class="entry-title"><a href="' . $post_link . '" rel="bookmark">', '</a></h2>' );

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

		<div class="entry-content">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->

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
			<a href="<?php echo $post_link ?>" rel="bookmark">
				<?php echo $read_more_link; ?>
			</a>
		</div>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->

