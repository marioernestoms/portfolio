<?php
// File Security Check
defined('ABSPATH') OR exit;
/**
 * Template Name: Homepage
 *
 * The template for displaying pages with sidebar.
 *
* @package marioernestoms
 */

get_header(); ?>

<?php

$args = array( 
    'post_type' => 'page', 'orderby' => 'menu_order',  'posts_per_page' => -1, 'order' => 'ASC' );

$the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
    
    <section id="<?php echo $post->post_name; ?>">
        <?php the_content(); ?>
    </section>

<?php  endwhile; endif; ?>


<?php get_footer(); ?>