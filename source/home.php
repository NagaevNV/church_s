<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package church_s
 */
get_header(); ?>

	<div id="primary" class="<?php church_content_sidebar_off() ?>">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php

			query_posts('cat=2');
			while ( have_posts() ) : the_post();

			?>

				<?php
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>
			<div class="post-pagination col-md-12 text-center">
				<?php the_posts_pagination( array(
					'end_size' => 2,
					'mid_size' => 2,
				) ); ?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( is_active_sidebar( 'home-sidebar' ) ) : ?>

<div id="secondary" class="widget-area col-xs-12 col-md-4" role="complementary">
	<?php dynamic_sidebar( 'home-sidebar' ); ?>
</div><!-- #secondary -->

<?php endif; ?>

<?php get_footer(); ?>

<script language="Javascript" src="http://script.days.ru/calendar.php?advanced=1&dayicon=1"></script>
<h4>
	<p class="text-center">
		<script language="Javascript">print_day(); </script></br>
		<small><script language="Javascript">print_week()</script></small>
	</p>
</h4>
<p class="text-center">
	<script language="Javascript">print_holiday()</script>
</p>
<p class="text-center">
	<script language="Javascript">print_post()</script>
</p>
<p class="text-center">
	<script language="Javascript">print_trapeza()</script>
</p>
<p class="text-center">
	<script language="Javascript">print_saints()</script>
</p>
<p class="text-center">
	<script language="Javascript">print_icon()</script>
</p>