<?php
/**
 * Template part for displaying posts.
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
				<?php church_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php edit_post_link(
			'<button type="button" class="btn btn-sm" al><span class="glyphicon glyphicon-pencil"></span>' . esc_html__( ' Edit', 'church' ). '</button>',
			'<div class="entry-edit-post col-md-12">',
			'</div>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<a href="<?php the_permalink(); ?>" class="entry-post-thumbnail col-md-4 hidden-xs center-block"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('','');}  ?></a>
		<div class="entry-textpost col-md-8">
			<?php the_content(''); ?>
		</div>
		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'church' ),
			'after'  => '</div>',
		) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<a href="<?php the_permalink() ?>" class="enter-read-more col-md-12 text-right" title="<?php the_title(); ?>">
			<div class="read_more"><?php echo (esc_html__('Continue reading', 'church' ). ' &raquo') ?></div>
		</a>
	</footer><!-- .entry-footer -->

	<div class="entry-article-separator"></div>
</article><!-- #post-## -->
