<header id="header-cases" class="section-white">
	<div class="container">
		<h1><?php esc_html_e( 'Case Studies', 'marioernestoms' ); ?></h1>
		<h2 class="subtitles highlight"><?php esc_html_e( 'I’ve currently put my latest or most amazing projects.', 'marioernestoms' ); ?></h2>
	</div>
</header>

<section id="section-cases" class="section-gray">
	<div class="row">
		<div class="col-lg-6">
			<img src="<?php bloginfo( 'template_directory' )?>/dist/images/macbookpro.jpeg" class="img-responsive">
		</div>
		<div class="timeline col-lg-6">
					
			<!-- Timeline header -->
			<div class="timeline-header">
				<div class="timeline-header-title bg-info"><?php _e( 'Now', 'marioernestoms' ); ?></div>
			</div>
			
			<!-- Timeline Loop -->
			<?php
			$exec_query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );

			if ( $exec_query->have_posts() ) { ?>

			<?php while ( $exec_query->have_posts() ) : $exec_query->the_post(); ?>
				
				<div class="timeline-entry">
					<div class="timeline-stat">
						<div class="timeline-icon"></div>
						<div class="timeline-time">3 Hours ago</div>
					</div>
					<div class="timeline-label">
						<h4 class="text-info text-lg"><?php the_title();?></h4>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			
			<?php endwhile; ?>

			<?php wp_reset_postdata(); } ?>
			<!-- /Timeline Loop -->
		</div>
	</div>
</section>

<section id="section-testimonials" class="section-white">
	<div class="container">
		<h3><?php _e( 'What people say about my work', 'marioernestoms' ); ?></h3>
		<div class="flexslider">
		  <ul class="slides">
		    <!-- Testimonials Loop -->
			<?php
			$exec_query = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1 ) );

			if ( $exec_query->have_posts() ) { ?>

			<?php while ( $exec_query->have_posts() ) : $exec_query->the_post(); ?>
				
				<li>
			     	<?php if ( has_post_thumbnail() ) {
			     		the_post_thumbnail( 'testimonials-size' );
			     	} else { ?>

			     	<img src="http://placehold.it/70x70"  width="70px" height="70px" />

			     	<?php } ?>
			      
				    <div class="testimonials">
				    	<h4><?php the_title(); ?></h4>
					    <?php the_excerpt(); ?>
					    <div class="testimonials-description">
					    	<?php the_content(); ?>
					    </div>
				    </div>
			    </li>
			
			<?php endwhile; ?>

			<?php wp_reset_postdata(); } ?>
			<!-- /Testimonials Loop -->
		  </ul>
		</div>
	</div>
</section>

