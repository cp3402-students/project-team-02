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
            the_title( '<h1 class="entry-title">', '</h1>' );

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

        <?php
        $content = apply_filters( 'the_content', get_the_content() );
        ?>

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->

    </div>
</article><!-- #post-<?php the_ID(); ?> -->

