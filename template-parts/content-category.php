<?php
/**
 * Template part for displaying categorys
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marioernestoms
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<header>
			<h2><a href="<?php the_permalink() ?>"><?php  the_title(); ?></a></h2>
			<?php 
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta pad-btn">
					<?php marioernestoms_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif;
			?>
		</header>
		<div class="portfolio-thumb">
			<a href="<?php the_permalink() ?>">
				<?php if ( has_post_thumbnail() ) :
					the_post_thumbnail();
				?>
			</a>
				<?php else : ?>
			
					<a href="<?php the_permalink() ?>">
						<img src="https://placehold.it/180x100" class="img-responsive" alt="">
					<!--<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />-->
					</a>
				<?php endif; ?>
		</div>

		<?php  the_excerpt( __( '(more…)' ) ); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marioernestoms' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php marioernestoms_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
