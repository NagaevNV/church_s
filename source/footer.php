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
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-info row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
                <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>
                <?php
                    echo ' Все материалы сайта доступны по лицензии: </br>';
                    echo '<a href="http://creativecommons.org/licenses/by/4.0/deed.ru" rel="license"> Creative Commons Attribution 4.0 </a>';
                ?>
            </div>
            <div class="site-info col-md-4 text-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                        echo bloginfo('name') . ' ' . date('Y') . ' год. </br>';
                    ?>
                </a>
                <?php
                    echo 'Разработка и дизайн <a href="https://github.com/NagaevNV/church_s" rel="author">NagaevNV</a>';
                ?>
            </div>
        </div>
    </div>
    <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
