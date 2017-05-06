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

<?php get_sidebar('footer'); ?>

<footer id="colophon" class="site-info" role="contentinfo">
    <div class="footer-banner">
        <nav id="site-navigation" class="footer__navigation" role="navigation">
            <button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false">
                <?php esc_html_e ('menu', 'backtobasics' ); ?>
            </button>
            <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
        </nav><!-- .footer-->
    </div><!--.footer-banner-->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-footer__wrap">
            <?php
            //make sure there is a social media menu to display
            if (has_nav_menu('social')) { ?>
                <nav class="social-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'social',
                        'menu_class' => 'social-links-menu',
                        'depth' => 1,
                        'link_before' => '<span class ="screen-reader-text">',
                        //'link_after' => '</span>' . backtobasics_get_svg( array( 'icon' => 'chain' ) ),
                    ));
                    ?>
                </nav><!--.social-menu-->
            <?php } ?>
        </div><!--.site-footer__wrap-->

        <div class="site-info footer">
            <?php echo (esc_html__('Copyright © Geoff & Vicki Toomby 2017', 'backtobasics')); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>

    </body>
    </html>
