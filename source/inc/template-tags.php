<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package church_s
 */

if ( ! function_exists( 'church_content_sidebar_off' ) ) :
	function church_content_sidebar_off()
	{
		if ( ! is_active_sidebar( 'content-sidebar' ) ) {
			echo "content-area col-xs-12 col-md-10 col-md-offset-1";
		}
		else {
			echo "content-area col-xs-12 col-md-8";
		}
	}
endif;

if ( ! function_exists( 'church_entry_post_date' ) ) :
	function church_entry_post_date(){
		echo '<time class="entry-date">' . get_the_date() .' '. get_the_time() . '</time>';
	}
endif;

if ( ! function_exists( 'church_entry_post_cat' ) ) :
	function church_entry_post_cat(){
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'church' ) );
			if ( $categories_list && church_categorized_blog() ) {
				echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'church_entry_edit_post' ) ) :
	function church_entry_edit_post(){
		edit_post_link(
			'<button type="button" class="btn btn-sm" al>Редактировать <span class="glyphicon glyphicon-pencil"></span></button>',
			'<div class="entry-edit-post col-md-12">',
			'</div>' );
	}
endif;


if ( ! function_exists( 'church_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function church_entry_footer() {

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function church_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'church_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'church_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so church_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so church_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in church_categorized_blog.
 */
function church_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'church_categories' );
}
add_action( 'edit_category', 'church_category_transient_flusher' );
add_action( 'save_post',     'church_category_transient_flusher' );