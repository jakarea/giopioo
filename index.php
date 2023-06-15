<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giopioo
 */

get_header();
?>
	<?php get_template_part('template-parts/home-hero'); ?>
	<?php get_template_part('template-parts/service');?>

	<?php get_template_part('template-parts/recent-work');?>

	<?php get_template_part('template-parts/our-team');?>
    
	<!-- <?php get_template_part('template-parts/testimonials');?>
    
	<?php get_template_part('template-parts/latest-blog');?>
    
	<?php get_template_part('template-parts/faq');?>
    
<?php
get_footer();
