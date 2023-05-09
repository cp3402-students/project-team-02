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

    <div class="post__content">

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
                    countrytheme_posted_on();
                    countrytheme_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <?php if (has_post_thumbnail()) : ?>
            <figure class="featured-image full-bleed">
                <?php the_post_thumbnail('countrytheme-full-bleed'); ?>
            </figure>
        <?php endif; ?>

        <div class="entry-content">
            <?php
            the_excerpt();
            ?>
        </div><!-- .entry-content -->

    </div>
</article><!-- #post-<?php the_ID(); ?> -->

