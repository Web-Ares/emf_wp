<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!-- main-slider -->
<div class="main-slider">
    <div class="main-slider__wrap">

        <!-- swiper-container -->
        <div class="swiper-container">

            <!-- main-slider__count -->
            <div class="main-slider__count">
                <span class="main-slider__count-current">02</span>
                <span class="main-slider__count-all">04</span>
            </div>
            <!-- main-slider__count -->
            <?php $about_link = get_the_permalink(17); ?>

                <?php

                // check if the repeater field has rows of data
                if( have_rows('main_slider') ): ?>

                        <div class="swiper-wrapper">

                    <?php // loop through the rows of data
                    while ( have_rows('main_slider') ) : the_row(); ?>

                        <div class="swiper-slide">

                            <!-- main-slider__slide -->
                            <div class="main-slider__slide">

                                <h2 class="main-slider__title"><?php the_sub_field('the_header_of_the_slider'); ?></h2>

                                <div class="main-slider__text"><?php the_sub_field('the_text_of_the_slide'); ?></div>

                                <a href="<?php echo $about_link; ?>" class="btn btn_2"><span>read more</span></a>

                            </div>
                            <!-- /main-slider__slide -->

                        </div>


                   <?php endwhile; ?>
                        </div>
                <?php endif;

                ?>



        </div>
        <!-- /swiper-container -->

        <div class="main-slider__info">
            <?php $shed_l = get_the_permalink(42); ?>
            <a  class="main-slider__link" href="<?php echo $shed_l;?>">Schedule
                an
                appointment</a>

            <!-- Add Arrows -->
            <div class="swiper-button-next">Next slide</div>

        </div>

    </div>
</div>
<!-- /main-slider -->



<?php get_footer(); ?>
