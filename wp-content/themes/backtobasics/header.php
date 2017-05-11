<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package backtobasics
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'backtobasics'); ?></a>

    <header id="masthead" class="site-banner site-info" role="banner">
        <div class="site-footer__wrap">
            <?php the_custom_logo();

            //make sure there is a social media menu to display
            if (has_nav_menu('social')) { ?>
                <nav class="social-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'social',
                        'menu_class' => 'social-links-menu',
                        'depth' => 1,
                        'link_before' => '<span class ="screen-reader-text">',
                        'link_after' => '</span>' . backtobasics_get_svg(array('icon' => 'chain')),
                    ));
                    ?>
                </nav><!--.social-menu__top-->
                <?php
            } ?>
        </div><!--.site-top__wrap-->

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <div class="site-branding__text">
                    <?php
                    if (is_front_page() && is_home()) : ?>
                        <h6 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                  rel="home"><?php bloginfo('name'); ?></a></h6>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                 rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
                    endif;

                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                    endif; ?>
                </div><!-- .site-branding__text -->
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <?php esc_html_e('menu', 'backtobasics'); ?>
                </button>
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
    </header>

    <div id="content" class="site-content">
