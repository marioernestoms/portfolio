<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marioernestoms
 */

?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer col-md-12" role="contentinfo">
		
		<?php require get_template_directory() . '/pages/contact.php'; ?>	
	
		<div class="container">
			<div class="site-info">
				<?php printf( esc_html__( '© 2017 - Mario Ernesto', 'marioernestoms' ) ); ?>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Powered by WordPress', 'marioernestoms' ) ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
	</div><!-- End Wrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>