<?php
/**
 * Template Name: Section About
 *
 * The template for displaying page About Me.
 *
 * @package marioernestoms
 */

?>

<section id="section-about" class="section-gray">
	<div class="container">
		<h1><?php _e( 'About Me', 'marioernestoms' ); ?></h1>
		<h2 class="subtitles highlight"><?php _e( 'This is the place to know a little bit about me and my work.', 'marioernestoms' ); ?></h2>
		
		<div class="row">
			<div class="about-img col-sm-4 col-md-3">
				<img src="<?php bloginfo( 'template_directory' )?>/assets/images/eu.jpg" class="img-responsive" alt="Mario Ernesto Profile" width="254" height="254">
			</div>
			<div class="col-sm-8 col-md-5">
				<h3 class="top-zero"><?php the_field( 'top_zero' ) ?></h3>
				
				<!-- Show content of page about-me by ID -->
				<?php $the_query = new WP_Query( 'page_id=163' ); ?>
				
				<?php while ( $the_query -> have_posts() ) : $the_query -> the_post();  ?>
					<?php the_excerpt(); ?>
				<?php endwhile;?>
			</div>
			<div class="col-md-4">
				<h3 class="top-zero"><?php _e( 'My skills', 'marioernestoms' ); ?></h3>
				<?php
					require get_template_directory() . '/template-parts/my-skills.php';
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="more-about ui stacked spaced segment">
					<a href="<?php echo the_permalink(); ?>/about"><?php _e( 'See More About Me', 'marioernestoms' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
