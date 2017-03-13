<section id="section-about" class="section-white container-fluid">
	<div class="container">
		<h1><?php esc_html_e( 'About Me', 'marioernestoms' ); ?></h1>
		<h2 class="subtitles highlight"><?php the_field( 'highlight' ) ?></h2>
		<div class="about-us row">

			<div class="about-img col-sm-4 col-md-3">
				<img src="<?php bloginfo( 'template_directory' )?>/assets/images/eu.jpg" class="img-responsive" alt="Mario Ernesto Profile" width="254" height="254">
			</div>
			<div class="col-sm-8 col-md-9">
				<h3 class="top-zero"><?php the_field( 'top_zero' ) ?></h3>
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row">
			<?php if ( have_rows( 'images' ) ) : ?>

				<div class="gallery">

				<?php while ( have_rows( 'images' ) ) : the_row();
					$image = get_sub_field( 'image' );
					?>

					<div class="col-xs-6 col-md-3">

						<?php if ( $image ) : ?>
							
							<figure class="gallery-image">
								<img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo $image[ 'alt' ] ?>"  class="img-responsive"/>
							</figure>
						
						<?php endif; ?>

					</div>

				<?php endwhile; ?>

				</div>

			<?php endif; ?>
		</div>
</section>

<section id="section-skills" class="section-gray container-fluid">

	<div class="container">

		<h3 class="top-zero"><?php esc_html_e( 'My Skills', 'marioernestoms' ); ?></h3>

		<div class="row">
			<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
				<?php
					require get_template_directory() . '/template-parts/my-skills.php';
				?>
			</div>

			<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
				<?php
					require get_template_directory() . '/template-parts/specialties.php';
				?>
			</div>
		</div>
	</div>
</section>

<section id="section-experience" class="section-white container-fluid">
	
	<div class="container">	
		<h3 class="top-zero"><?php _e( 'Experience', 'marioernestoms' ); ?></h3>

		<div class="row">
			<?php
				require get_template_directory() . '/template-parts/experience.php';
			?>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="more-about ui stacked spaced segment">
				<a href="http://linkedin.com/in/marioernestoms" target="_blank">See More on Linkedin</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="section-education" class="section-gray container-fluid">
	<div class="container">
		<h3><?php _e( 'Education', 'marioernestoms' ); ?></h3>
		<div class="row">
			<?php
				require get_template_directory() . '/template-parts/education.php';
			?>
		</div>
	</div>
</div>
</section>

<section id="section-talks" class="section-white container-fluid">
	<div class="container">
		<h3><?php _e( 'Talks', 'marioernestoms' ); ?></h3>
		
		<?php
			require get_template_directory() . '/template-parts/talks.php';
		?>
	</div>
</section>
