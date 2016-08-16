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
            <?php $about_link = get_the_permalink(17); ?>
            <!-- main-slider__slide -->
            <div class="main-slider__slide">

                <h2 class="main-slider__title"><?php the_field( 'the_header_of_the_slider' ); ?></h2>

                <div class="main-slider__text"><?php the_field( 'the_text_of_the_slide' ); ?></div>

                <a href="<?= $about_link; ?>" class="btn btn_2"><span>read more</span></a>

            </div>
            <!-- /main-slider__slide -->

        </div>
        <!-- /swiper-container -->
        
    </div>
</div>
<!-- /main-slider -->



<?php get_footer(); ?>
