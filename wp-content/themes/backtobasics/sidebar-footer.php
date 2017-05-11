<?php
/**
 * The sidebar containing the main footer columns widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package backtobasics
 *
 * @subpackage fArt
 * @author tishonator
 * @since fArt 1.0.0
 */
?>
<div class="footer-cols">

    <div id="footer-cols-inner">

        <?php
        /**
         * Display widgets dragged in 'Footer Column 1' widget areas
         */
        ?>
        <div class="col4a">

            <?php if ( is_front_page() && !dynamic_sidebar('footer-column-1-widget-area')) : ?>

                <h2 class="footer-title widget-title">
                    <?php _e('Footer Widget 1', 'backtobasics'); ?><br>
                </h2><!-- .footer-title -->

                <p class="textwidget">
                    <?php _e('This is first footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #1.', 'backtobasics'); ?>
                </p><!-- .textwidget -->

            <?php endif; // end of ! dynamic_sidebar( 'footer-column-1-widget-area' )
            ?>

        </div><!-- .col4a -->

        <?php
        /**
         * Display widgets dragged in 'Footer Column 2' widget areas
         */
        ?>
        <div class="col4b">
            <?php if ( is_front_page() && !dynamic_sidebar('footer-column-2-widget-area')) : ?>

                <h2 class="footer-title widget-title">
                    <?php _e('Footer Widget 2', 'backtobasics'); ?>
                </h2><!-- .footer-title -->

                <div class="textwidget">
                    <?php _e('This is second footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #2.', 'backtobasics'); ?>
                </div><!-- .textwidget -->

            <?php endif; // end of ! dynamic_sidebar( 'footer-column-2-widget-area' )
            ?>

        </div><!-- .col4b -->

        <?php
        /**
         * Display widgets dragged in 'Footer Column 3' widget areas
         */
        ?>
        <div class="col4c">
            <?php if ( is_front_page() && !dynamic_sidebar('footer-column-3-widget-area')) : ?>

                <h2 class="footer-title widget-title">
                    <?php _e('Footer Widget 3', 'backtobasics'); ?>
                </h2><!-- .footer-title -->

                <div class="textwidget">
                    <?php _e('This is third footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #3.', 'backtobasics'); ?>
                </div><!-- .textwidget -->

            <?php endif; // end of ! dynamic_sidebar( 'footer-column-3-widget-area' )
            ?>

        </div><!-- .col4c -->

        <?php
        /**
         * Display widgets dragged in 'Footer Column 4' widget areas
         */
        ?>
        <div class="col4d">
            <?php if ( is_front_page() && !dynamic_sidebar('footer-column-4-widget-area')) : ?>

                <h2 class="footer-title widget-title">
                    <?php _e('Footer Widget 4', 'backtobasics'); ?>
                </h2><!-- .footer-title -->

                <div class="textwidget">
                    <?php _e('This is fourth footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #4.', 'backtobasics'); ?>
                </div><!-- .textwidget -->

            <?php endif; // end of ! dynamic_sidebar( 'footer-column-4-widget-area' )
            ?>

        </div><!-- .col4d -->

        <div class="clear">
        </div><!-- .clear -->

    </div><!-- #footer-cols-inner -->

</div><!-- #footer-cols -->