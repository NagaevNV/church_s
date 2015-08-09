<?php
/**
 * The header for our theme.
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package church_s
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site container">

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding text-center">
                <?php if (get_header_image()) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hidden-xs hidden-sm" rel="home">
                        <img src="<?php header_image(); ?>" class="img-responsive center-block" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                    </a>
                <?php endif; ?>
                <?php if (is_front_page() && is_home()) : ?>
                    <h1 class="site-title visible-sm">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </h1>
                <?php else : ?>
                    <p class="site-title visible-sm">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </p>
                <?php endif; ?>
                <p class="site-description visible-sm"><?php bloginfo('description'); ?></p>
            </div>
            <!-- .site-branding -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand visible-xs" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
                    </div>
                    <?php wp_nav_menu(array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()));
                    ?>
                </div>
            </nav>
            <!-- .navbar  -->
        </header>
        <!-- #masthead -->

        <div id="content" class="site-content row">