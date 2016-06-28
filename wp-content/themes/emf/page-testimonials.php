<?php
/**
 * Template Name: Testimonials  Page
 */
get_header(); ?>

<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">Testimonials</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap gallery">

        <!-- swiper-container -->
        <div class="swiper-container gallery__top">
            <div class="swiper-wrapper">

                <?php

                // check if the repeater field has rows of data
                if( have_rows('testimonials_block') ):

                    // loop through the rows of data
                    while ( have_rows('testimonials_block') ) : the_row();
                        $current_image = get_sub_field('add_a_image_for_testimonials');
                        $images[] = $current_image; ?>

                        <div class="swiper-slide">

                            <!-- gallery__left -->
                            <div class="gallery__left">
                                <h2 class="site__title site__title_2"><?php the_sub_field('the_header_of_testiominials'); ?></h2>

                                <?php the_sub_field('the_content_of_testimonials'); ?>
                            </div>
                            <!-- /gallery__left -->

                            <!-- gallery__right -->
                            <div class="gallery__right" style="background-image:url(<?php echo $current_image ?>)">

                                <!-- gallery__right-social -->
                                <div class="gallery__right-social">

                        <?php if($facebook =  get_sub_field('author_facebook') ){ ?>
                                    <a href="<?php echo $facebook; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                                            <g>
                                                <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </a>
                            <?php } ?>

                        <?php if($linked =  get_sub_field('author_linked_in') ){ ?>
                                    <a href="<?php echo $linked; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                                            <g>
                                                <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </a>
                        <?php } ?>
                                </div>
                                <!-- /gallery__right-social -->

                                <!-- gallery__right-name -->
                                <span class="gallery__right-name"><?php the_sub_field('author_name'); ?></span>
                                <!-- /gallery__right-name -->

                                <!-- gallery__right-post -->
                                <span class="gallery__right-post"><?php the_sub_field('description_text'); ?></span>
                                <!-- /gallery__right-post -->

                            </div>
                            <!-- /gallery__right -->

                        </div>

                   <?php  endwhile;

                else :

                    // no rows found

                endif;

                ?>

            </div>
        </div>
        <!-- /swiper-container -->

        <!-- gallery__thumbs -->
        <div class="gallery__thumbs">
            <div class="swiper-container">

                <div class="swiper-wrapper">
                    <?php foreach($images as $img){ ?>
                        <div class="swiper-slide swiper-slide-active is-selected" style="background-image:url(<?php echo $img; ?>)">

                            <!-- gallery__thumbs-info -->
                            <div class="gallery__thumbs-info">

                                <!-- gallery__thumbs-current-num -->
                                <span class="gallery__thumbs-current-num">
                                    02
                                </span>
                                <!-- /gallery__thumbs-current-num -->

                                <!-- gallery__thumbs-total-count -->
                                <span class="gallery__thumbs-total-count">
                                    04
                                </span>
                                <!-- /gallery__thumbs-total-count -->

                            </div>
                            <!-- /gallery__thumbs-info -->

                        </div>
                    <?php }?>

                </div>

            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>

        </div>
        <!-- /gallery__thumbs -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->



<?php get_footer(); ?>
