<?php
/**
 * Base template for all pages. 
 *
 * @package marioernestoms
 */

function my_template_path() {
	return My_Wrapping::$main_template;
}
function my_template_base() {
	return My_Wrapping::$base;
}
class Portfolio_Wrapping {
	/**
	 * Stores the full path to the main template file
	 */
	static $main_template;
	/**
	 * Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
	 */
	static $base;
	static function wrap( $template ) {
		self::$main_template = $template;
		self::$base = substr( basename( self::$main_template ), 0, -4 );
		if ( 'index' == self::$base )
			self::$base = false;
		$templates = array( 'box.php' );
		if ( self::$base )
			array_unshift( $templates, sprintf( 'box-%s.php', self::$base ) );
		return locate_template( $templates );
	}
}
add_filter( 'template_include', array( 'Portfolio_Wrapping', 'wrap' ), 99 );