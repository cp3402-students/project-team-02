<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package countrytheme
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php
        if ( have_posts() ) :

            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            the_posts_pagination( array(
                "prev_text" => countrytheme_get_svg( array( 'icon' => 'arrow-left', 'fallback' => true )) . " " . __("Newer", "countrytheme"),
                "next_text" => __("Older", "countrytheme") . " " . countrytheme_get_svg( array( 'icon' => 'arrow-right', 'fallback' => true )) ,
                "before_page_number" => "<span class='screen-reader-text'>" . __("Page ", "countrytheme") . "</span>"
            ));

        else : ?>

            <?php
		    while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

            endwhile; // End of the loop.

        endif;
        ?>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
