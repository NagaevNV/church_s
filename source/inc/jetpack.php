<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package church_s
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function church_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'church_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function church_jetpack_setup
add_action( 'after_setup_theme', 'church_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function church_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function church_infinite_scroll_render
