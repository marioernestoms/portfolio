<?php

$exec_query = new WP_Query( array (
  'post_type' => 'portfolio',
  'portfolio_categories'  => 'html-css-js',
  'posts_per_page' => -1
) );

if ( $exec_query->have_posts() ) { ?>

<?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

	<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
		<div class="portfolio-wrapper">
			<div class="portfolio-thumb">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'portfolio-size' );
				}else { ?>
				<img src="https://placehold.it/180x180" class="img-responsive" alt="">
				<!--<img src="<?php bloginfo('template_directory'); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />-->
				<?php } ?>
			</div>
			<!--<div class="portfolio-view">
				<ul class="nav nav-pills">
					<li><a href="<?php echo the_field( 'link_externo' ); ?>" target="_blank"><i class="fa fa-link"></i></a></li>
					<li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
				</ul>
			</div>-->
			<div class="portfolio-info ">
				<p><?php the_title();?></p>
			</div>
		</div>
	</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); } ?>