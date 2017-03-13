<?php
/**
 * Template Name: Blog
 *
 * The template for displaying pages with sidebar.
 *
* @package marioernestoms
 */

?>

<section id="section-blog" class="blog-section">
	<div class="container">
		<h1>Blog</h1>
		<h2 class="subtitles highlight">Sharing knowledge is always enriching.</h2>
		<div class="row" style="padding-top: 5%;">
			<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>

			<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

				<div class="col-md-3 col-sm-5">
					<div class="blog-wrapper">
						<div class="blog-single">
							<div class="blog-thumb">
								<a href="<?php the_permalink() ?>">
									<?php if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'blog-size', array( 'class' => 'img-fluid' ) );
									?>
								</a>
									<?php else : ?>
								
										<a href="<?php the_permalink() ?>">
											<img data-src="holder.js/200x200" src="https://placehold.it/180x100" class="img-fluid" width="180px" height="180px">
										<!--<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />-->
										</a>
									<?php endif; ?>
							</div>
						</div>
						<div class="blog-info ">
							<div class="panel-body">
								<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
								<p><?php the_excerpt( __( '(more…)' ) ); ?></p>
							</div>
						</div>
					</div>
				</div>

			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="more-about ui stacked spaced segment">
					<a href="<?php echo the_permalink(); ?>blog"><?php _e( 'See More Posts', 'marioernestoms' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
