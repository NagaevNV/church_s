<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package church_s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title col-md-12"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta col-md-12">
				<?php church_entry_post_date(); ?>
				<?php church_entry_post_cat(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php church_entry_edit_post(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if (has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" class="entry-page-thumbnail col-md-12 center-block"><?php the_post_thumbnail('',''); ?></a>
		<?php endif; ?>
		<div class="entry-text-post col-md-12">
			<?php the_content(''); ?>
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'church' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php church_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

