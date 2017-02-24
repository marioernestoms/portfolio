<h4 class="title-subsections">► Specialties</h4>
<?php if ( have_rows( 'specialties' ) ) : ?>
	
	<ul>

<?php while ( have_rows( 'specialties' ) ) : the_row(); ?>
		
		<li class="single-skill">
			<p><?php the_sub_field( 'specialtie' ); ?></p>
		</li>

<?php endwhile; ?>

<?php else : ?>

	<p><?php e_( 'There is no experiences to show', 'marioernestoms' ); ?></p>

<?php endif; ?>
