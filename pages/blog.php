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
		<div class="row">
			<h1>Blog</h1>
			<div id="recent-posts col-md-12" style="padding-top: 5%;">
				<ul>
					<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>

					<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<div class="col-xs-6 col-sm-6 col-md-3 portfolio-item branded logos">
							<div class="portfolio-wrapper">
								<div class="portfolio-single">
									<div class="portfolio-thumb">
										<a href="<?php the_permalink() ?>">
											<?php if ( has_post_thumbnail() ) :
												the_post_thumbnail( 'blog-size' );
											?>
										</a>
											<?php else : ?>
										
												<a href="<?php the_permalink() ?>">
													<img src="http://placehold.it/180x100" class="img-responsive" alt="">
												<!--<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />-->
												</a>
											<?php endif; ?>
									</div>
								</div>
								<div class="portfolio-info ">
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
				</ul>
			</div>
			<!-- End Recent Posts -->
		</div>
	</div>
</section>
