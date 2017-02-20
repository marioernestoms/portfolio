<?php
/**
 * Template Name: Portfolio
 *
 * The template for displaying pages with sidebar.
 *
 * @package marioernestoms
 */

?>

<section id="section-portfolio" class="portfolio-section">
	<div class="container">
		<h1>Case Studies</h1>
		<h2 class="subtitles highlight">I’ve currently put my latest or most amazing projects.</h2>
		<div class="row" style="padding-top: 5%;">
			<div class="tab-base tab-stacked-left"> 
				<div class="col-md-9 col-sm-8">
					<?php the_content(); ?>
					<!--Tabs Content-->
					<div class="tab-content">
						<?php 
						$count = 1;
						?>

						<div id="tab-1" class="tab-pane fade active in">
							<?php
							$exec_query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );
							if ( $exec_query->have_posts() ) {
							?>

							<?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

								<div class="col-xs-6 col-sm-6 col-md-3 portfolio-item branded logos">
									<div class="portfolio-wrapper">
										<div class="portfolio-single">
											<div class="portfolio-thumb">
												<?php if ( has_post_thumbnail() ) {
													the_post_thumbnail( 'portfolio-size' );
												}else { ?>
												<img src="http://placehold.it/180x180" class="img-responsive" alt="">
												<!--<img src="<?php bloginfo('template_directory'); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />-->
												<?php } ?>
											</div>
											<div class="portfolio-view">
												<ul class="nav nav-pills">
													<li><a href="<?php echo the_field( 'link_externo' ); ?>" target="_blank"><i class="fa fa-link"></i></a></li>
													<li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="portfolio-info ">
											<p><?php the_title();?></p>
										</div>
									</div>
								</div>

							<?php endwhile; ?>

							<?php wp_reset_postdata(); } ?>
						</div>

						<div id="tab-2" class="tab-pane fade">
							<?php include( get_template_directory() . '/template-parts/portfolio-html.php' ); ?>
						</div>
						<div id="tab-3" class="tab-pane fade">
							<?php include( get_template_directory() . '/template-parts/portfolio-php.php' ); ?>
						</div>
						<div id="tab-4" class="tab-pane fade">\
							<?php include( get_template_directory() . '/template-parts/portfolio-wordpress.php' ); ?>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-4">
					<div>
						<!--Nav tabs-->
						<div class="sidebar portfolio-sidebar">
							<div class="sidebar-item categories">
								<h4><?php _e( 'Project Categories', 'marioernestoms' ); ?></h4>
								<?php

								$taxonomy = 'portfolio_categories';
								$terms = get_terms($taxonomy); //Get all terms of a taxonomy
								$cat = 2;
								$count = 2;

								if ( $terms && !is_wp_error( $terms ) ) : ?>

								<ul class="nav navbar-stacked">
									<?php foreach ( $terms as $term ) { ?>
									<li><a data-toggle="tab" href="<?php echo '#tab-'.$count++ ?>"><?php echo $term->name; ?></a></li>
									<?php } ?>
								</ul>

								<?php endif;?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
