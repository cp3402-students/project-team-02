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
            <div class="archive-description"><?php the_content(); ?></div>
        </header><!-- .page-header -->

        <?php
        $posts = query_category("magazine");

        if ( $posts->have_posts() ) :

            while ( $posts->have_posts() ) :

                $posts->the_post();

                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            custom_page_pagination($posts->max_num_pages);

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;

        wp_reset_postdata();

        ?>

    </main><!-- .site-main -->

<?php
get_footer();
?>