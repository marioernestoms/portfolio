<?php
/**
 * Template Name: Section About
 *
 * The template for displaying pages with sidebar.
 *
* @package marioernestoms
 */

?>

<section id="section-about" class="about-section">
	<div class="container">
		<h1>About Me</h1>
		<h2 class="subtitles highlight">This is the place to know a little bit about me and my work.</h2>
		<div class="about-us row" style="padding-top: 3%;">
			<div class="col-md-3 col-sm-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eu.jpg" class="about-img img-responsive" alt="">
				<div class="ui stacked spaced segment">
					<p class="available-frelancer btn btn-success"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Available for Freelance</p>
				</div>
			</div>
			<div class="col-md-5 col-sm-5">
				<h3 class="top-zero">Welcome, I'm Mario Ernesto!</h3>
				<p>Full Stack Developer from Rio de Janeiro, Brazil. I work with all kinds of projects from simple to complex, always seeking the best experience of interaction with the users.</p>
				<p>My objective is working with clean coding that's use the best code standards practices, I have full domain of PHP, HTML5, CSS3, JavaScript, Performance, SEO.</p>
				<p>My specialty is full stack development and WordPress is my passion. In the last 4 years I decided work only with WordPress projects, I build themes and Plugins with a perfect balance between code standard and best performance.</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<h3 class="top-zero"><?php _e( 'My skills', 'marioernestoms' ); ?></h3>
				<?php
					require get_template_directory() . '/template-parts/my-skills.php';
				?>
			</div>
		</div>
		<div class="col-md-12 text-center">
			<div class="more-about ui stacked spaced segment">
				<a href="<?php echo the_permalink(); ?>/about">See More About Me</a>
			</div>
		</div>
	</div>
</section>
