<?php 
// Post type for Portfolio Section
function create_posttype() {

	register_post_type( 'jobs',
	// CPT Options
		array(
			'labels' 			=> array(
				'name' 			=> __( 'Jobs' ),
				'singular_name' => __( 'Jobs' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'menu_icon'     	=> 'dashicons-portfolio',
			'rewrite' 			=> array('slug' => 'jobs'),
			'taxonomies'  		=> array( 'category' ),
			'supports' 			=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		)
	);
}

add_action( 'init', 'create_posttype' );
