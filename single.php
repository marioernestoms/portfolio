<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marioernestoms
 */

get_header( 'internals' ); ?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<header class="entry-header" style="background-image: url('<?php echo $thumb['0'];?>'); background-repeat: no-repeat">
	<div class="header-post container">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</div>
</header><!-- .entry-header -->

<div class="container pad-top">
    <div class="row">

		<div class="col-md-9 col-sm-8">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		<div class="col-md-3 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
