<div class="our-skills">
	<h4 class="title-subsections">► <?php the_field( 'subtitle_skills' ) ?></h4>

	<?php if ( have_rows( 'skill' ) ) : ?>
	
		<ul>

	<?php while ( have_rows( 'skill' ) ) : the_row(); ?>
			
			<li class="single-skill">
				<p><?php the_sub_field( 'skill_name' ); ?></p>
				<div class="progress">
					<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="<?php the_sub_field( 'data_transition' ); ?>"><?php the_sub_field( 'skill_time' ); ?>+ <?php _e( 'Years', 'marioernestoms' ); ?></div>
				</div>
			</li>

	<?php endwhile; ?>

	<?php else : ?>

		<p><?php e_( 'There is no experiences to show', 'marioernestoms' ); ?></p>

	<?php endif; ?>
</div>
