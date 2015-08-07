<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package church_s
 */

?>

</div><!-- #content -->
</div><!-- #page -->
</div><!-- #container -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'church')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'church'), 'WordPress'); ?></a>
            <span class="sep"> | </span>
            <?php printf(esc_html__('Theme: %1$s by %2$s.', 'church'), 'church', '<a href="http://nagaevnv@yandex.ru" rel="designer">NagaevNV</a>'); ?>
        </div>
        <!-- .site-info -->
    </div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
