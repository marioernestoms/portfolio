<?php if ( have_rows( 'degree_information' ) ) : ?>

<?php while ( have_rows( 'degree_information' ) ) : the_row(); ?>
		
		<div class="col-md-12">
			<div class="col-md-1 col-sm-1">
				<?php
				$image = get_sub_field( 'school_logo' );
				if ( $image ) : ?>
							
					<figure>
						<img class="education-photo" src="<?php echo $image[ 'url' ]; ?>" />
					</figure>
				<?php else : ?>
					<img class="talk-photo" src="https://placehold.it/480x270">
				<?php endif; ?>
			</div>
			<div class="col-md-11 col-sm-11">
				<h4><?php the_sub_field( 'school' ); ?></h4>
				<p><?php the_sub_field( 'degree' ); ?></p>
				<p class="text-small"><?php the_sub_field( 'dates' ); ?></p>
				<p class="text-small"><i class="fa fa-globe" aria-hidden="true"></i> <?php the_sub_field( 'location' ); ?></p>
				<div class="education-description">
					<?php the_sub_field( 'degree_description' ); ?>
				</div>
			</div>
		</div>

<?php endwhile; ?>

<?php else : ?>

	<p><?php e_( 'There is no experiences to show', 'marioernestoms' ); ?></p>

<?php endif; ?>
