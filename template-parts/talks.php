<?php if ( have_rows( 'talk' ) ) : ?>

<?php while ( have_rows( 'talk' ) ) : the_row(); ?>
		
		<article class="talk row">
			<div class="col-sm-4 col-md-4">
				<a href="<?php the_sub_field( 'talk_link' ); ?>" target="_blank">
					<?php
					$image = get_sub_field( 'thumbnail' );
					if ( $image ) : ?>
								
						<figure>
							<img class="talk-photo" src="<?php echo $image[ 'url' ]; ?>" />
						</figure>
					<?php else : ?>
						<img class="talk-photo" src="https://placehold.it/480x270">
					<?php endif; ?>
				</a>
			</div>
			<div class="talk-info col-sm-8 col-md-8">
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
