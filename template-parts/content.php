<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marioernestoms
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta pad-btn">
				<?php marioernestoms_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif;

			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'marioernestoms' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

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
