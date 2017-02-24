<?php
/**
 * Template Name: Homepage
 *
 * The template for displaying pages with sidebar.
 *
* @package marioernestoms
 */

get_header(); ?>

<?php
require get_template_directory() . '/pages/intro.php';

require get_template_directory() . '/pages/section-about.php';

require get_template_directory() . '/pages/portfolio.php';

require get_template_directory() . '/pages/blog.php';

require get_template_directory() . '/pages/contact.php';

?>

<?php get_footer(); ?>
