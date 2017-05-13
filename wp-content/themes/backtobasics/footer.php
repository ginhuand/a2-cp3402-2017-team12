<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package backtobasics
 */

?>

</div><!-- #content -->


<footer id="footer-main">

    <div id="footer-content-wrapper">
        <?php get_sidebar( 'footer' ); ?>
    </div><!-- #footer-content-wrapper -->

</footer><!-- #footer-main -->

<footer id="colophon" class="site-info" role="contentinfo">
    <div class="footer-banner">
        <nav id="site-navigation" class="main-navigation footer__navigation" role="navigation">
            <button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false">
                <?php esc_html_e ('menu', 'backtobasics' ); ?>
            </button>
            <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
        </nav><!-- .footer-->
    </div><!--.footer-banner-->
</footer><!--.site-info-->

    <footer id="colophon" class="site-footer site-info" role="contentinfo">
        <div class="site-footer__wrap">
            <?php echo (esc_html__('Back to Basics Theme powered by WordPress', 'backtobasics'));

            //make sure there is a social media menu to display
            if (has_nav_menu('social')) { ?>
                <nav class="social-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'social',
                        'menu_class' => 'social-links-menu',
                        'depth' => 1,
                        'link_before' => '<span class ="screen-reader-text">',
                        'link_after' => '</span>' . backtobasics_get_svg( array( 'icon' => 'chain' ) ),
                    ));
                    ?>
                </nav><!--.social-menu-->
            <?php } ?>
        </div><!-- .site-info .site-footer__wrap -->
    </footer><!-- #colophon -->

    <?php wp_footer(); ?>
