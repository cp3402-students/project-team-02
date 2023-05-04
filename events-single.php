<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package countrytheme
 */

//get_header();
?>

	<main id="primary" class="site-main">

		<?php //Basic data for bedugging purposes ?>

		<?php $event_title = "Country Club Sing along" ?>
		<?php $event_date = "16th May 2023" ?>
		<?php $event_time = "7:30pm" ?>
		<?php $event_category = "Featured" ?>
		<?php $event_cost = "$15" ?>
		<?php $event_location = "Bellevue Hotel" ?>
		<?php $event_phone = "0411 222 233" ?>
		<?php $event_email = "joey_badass@hotmail.com" ?>
		<?php $event_description = "Come and sing along to country music songs!" ?>

		<div style="text-align: center;"><img src="images/event_title_main.png" width="750" height="400"/>

		<h1><div style="text-align: center;"><?= $event_title ?></h1></div>
		<p><div style="text-align: center;"><b>Date: </b><?=$event_date?></div>
		<p><div style="text-align: center;"><b>Time: </b><?=$event_time?></div>
		<p><div style="text-align: center;"><b>Category: </b><?=$event_category?></div>
		<p><div style="text-align: center;"><b>Cost: </b><?=$event_cost?></div>
		<p><div style="text-align: center;"><b>Location: </b><?=$event_location?></div>
		<p><div style="text-align: center;"><b>Phone: </b><?=$event_phone?></div>
		<p><div style="text-align: center;"><b>Email: </b><?=$event_email?></div>
		<p><div style="text-align: center;"><b>Description: </b><?=$event_description?></div>

	</main><!-- #main -->

<?php
//get_sidebar();
//get_footer();
