<?php if ( have_rows( 'talk' ) ) : ?>

<?php while ( have_rows( 'talk' ) ) : the_row(); ?>
		
		<article class="talk col-md-12">
			<div class="col-md-4">
				<?php
				$image = get_sub_field( 'thumbnail' );
				if ( $image ) : ?>
							
					<figure>
						<img class="talk-photo" src="<?php echo $image[ 'url' ]; ?>" />
					</figure>
				<?php else : ?>
					<img class="talk-photo" src="http://placehold.it/480x270">
				<?php endif; ?>
			</div>
			<div class="talk-info col-md-8">
				<h4><a href="<?php the_sub_field( 'talk_link' ); ?>" target="_blank"><?php the_sub_field( 'talk_name' ); ?></a></h4>
				<p class="text-small"><?php the_sub_field( 'date' ); ?></p>
				<p class="text-small"><i class="fa fa-globe" aria-hidden="true"></i> <?php the_sub_field( 'location' ); ?></p>
				<div class="education-description">
					<?php the_sub_field( 'talk_description' ); ?>
				</div>
			</div>
		</article>

<?php endwhile; ?>

<?php else : ?>

	<p><?php e_( 'There is no experiences to show', 'marioernestoms' ); ?></p>

<?php endif; ?>
