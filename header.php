<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package countrytheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'countrytheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();?>
			<div class="site-branding__text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			$countrytheme_description = get_bloginfo( 'description', 'display' );
			if ( $countrytheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $countrytheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'countrytheme' ); ?></button>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'header-menu',
				)
			);
			?>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'social-header',
					'link_before' => '<span>',
					'link_after' => '</span>'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div class="header-image">
		<?php if ( is_front_page()) :
			the_header_image_tag(); ?>
			<div class='header-image-overlay'>


		<div class="header-image-group">
				<h2>Welcome to the Country Music Family!</h2>
				<p>Interested in joining the club? Let's have a chat.</p>

			<div class="action-button">
			<?php
			$action_link = site_url('contact-us') ?>
			<a href="<?php echo $action_link ?>" rel="bookmark">
				Contact Us
			</a>
			</div>
		</div>
			</div>


		<?php endif; ?>

	</div>
