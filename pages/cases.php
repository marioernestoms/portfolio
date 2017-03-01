<?php
/**
 * Template Name: Cases
 *
 * The template for displaying pages with sidebar.
 *
 * @package marioernestoms
 */

get_header( 'internals' ); ?>

<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/content', 'cases' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
?>

<?php get_footer(); ?>