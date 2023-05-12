<?php
/**
 * Template Name: Magazine Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package countrytheme
 */

get_header();
?>

    <main id="main" class="site-main" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="archive-description"><?php the_excerpt(); ?></div>
        </header><!-- .page-header -->

        <?php
        $posts = new WP_Query(
            array (
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'magazine', // change category here
            'posts_per_page' => 10,
            'paged' => (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1,
            )
        );

        if ( $posts->have_posts() ) :

            while ( $posts->have_posts() ) :

                $posts->the_post();

                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            the_posts_pagination( array(
                "prev_text" => __("Newer", "countrytheme"),
                "next_text" => __("Older", "countrytheme"),
                "before_page_number" => "<span class='screen-reader-text'>" . __("Page ", "countrytheme") . "</span>"
            ));

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

    </main><!-- .site-main -->

<?php
get_footer();
?>