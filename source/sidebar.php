<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package church_s
 */

if ( ! is_active_sidebar( 'content-sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-xs-12 col-md-4" role="complementary">
	<?php dynamic_sidebar( 'content-sidebar' ); ?>
</div><!-- #secondary -->
