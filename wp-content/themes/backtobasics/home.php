<?php get_header(); ?>

    <!-- Slideshow (Carousel) -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $wl_theme_options = backtobasics_get_options();
            $wl_theme_options['slider_image_speed'];
            if ($wl_theme_options['slider_image_speed'] != '') {

                echo '<script type="text/javascript">
		jQuery(document ).ready(function( $ ) {
		    jQuery("#myCarousel" ).carousel({
		    interval:' . $wl_theme_options['slider_image_speed'] . '
		    });
	   });
	</script>';
            }


            $j = 1;
            for ($i = 1; $i <= 3; $i++) { ?>
                <?php if ($wl_theme_options['slide_image_' . $i] != '') {
                    ?>
                    <div class="item <?php if ($j == 1) echo "active"; ?>">

                        <img src="<?php echo esc_url($wl_theme_options['slide_image_' . $i]); ?>" class="img-responsive"
                             alt="<?php echo esc_attr($wl_theme_options['slide_title_' . $i]); ?>">
                        <div class="container">
                            <div class="carousel-caption">
                                <?php if ($wl_theme_options['slide_title_' . $i] != '') { ?>
                                    <div class="carousel-text">
                                        <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_' . $i]); ?></h1>
                                        <?php
                                        if ($wl_theme_options['slide_desc_' . $i] != '') { ?>
                                            <ul class="list-unstyled carousel-list">
                                                <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_' . $i]); ?></li>
                                            </ul>
                                        <?php }
                                        if ($wl_theme_options['slide_btn_text_' . $i] != '') { ?>
                                            <a class="backtobasics_blog_read_btn animated bounceInUp"
                                               href="<?php if ($wl_theme_options['slide_btn_link_' . $i] != '') {
                                                   echo esc_url($wl_theme_options['slide_btn_link_' . $i]);
                                               } ?>"
                                               role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_' . $i]); ?></a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php $j++;
                }
            } ?>
        </div>
        <ol class="carousel-indicators">
            <?php for ($i = 0; $i < $j - 1; $i++) { ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) {
                    echo 'class="active"';
                } ?> ></li>
            <?php } ?>
        </ol>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span><i class="glyphicon glyphicon-chevron-left"></i></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right"></i></a>
        <div class="backtobasics_slider_shadow"></div>
    </div><!-- Slideshow (carousel) -->

<?php if (have_posts()) : ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php

            if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

                <?php
            endif;

            /* Start the Loop */
            while (have_posts()) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_format());

            endwhile;

            the_posts_pagination(array(
                'prev_text' => backtobasics_get_svg(array('icon' => 'arrow-left', 'fallback' => true)) . __('Recent', 'backtobasics'),
                'next_text' => __('Older', 'backtobasics') . backtobasics_get_svg(array('icon' => 'arrow-right', 'fallback' => true)),
            ));
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php
    get_sidebar();
    get_footer();

else :
    get_template_part('template-parts/content', 'none');
    return;

endif; ?>