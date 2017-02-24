<?php if ( have_rows( 'experience' ) ) : ?>

<?php while ( have_rows( 'experience' ) ) : the_row(); ?>
		
		<article class="col-md-12">
			<div class="col-md-4 pad-no">
				<h2 class="company-name"><?php the_sub_field( 'company_name' ); ?></h2>
			</div>
			<div class="job-info col-md-8 pad-no">
				<h3><?php the_sub_field( 'business' ); ?></h3>
				<p class="text-small"><?php the_sub_field( 'dates' ); ?></p>
				<p class="text-small"><i class="fa fa-globe" aria-hidden="true"></i> <?php the_sub_field( 'location' ); ?></p>
				<div class="job-description">
					<p><?php the_sub_field( 'job_description' ); ?></p>
				</div>
			</div>
		</article>

<?php endwhile; ?>

<?php else : ?>

	<p><?php e_( 'There is no experiences to show', 'marioernestoms' ); ?></p>

<?php endif; ?>
