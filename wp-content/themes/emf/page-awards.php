<?php
/**
 * Template Name: Awards Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title"><?php the_title();?></h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap awards">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('awards_block') ):

                    // loop through the rows of data
                    while ( have_rows('awards_block') ) : the_row(); ?>

                        <div class="swiper-slide">

                            <!-- awards__text -->
                            <div class="awards__text nice-scroll">
                                <?php the_sub_field('award_content_'); ?>
                            </div>
                            <!-- /awards__text -->

                            <!-- awards__info -->
                            <div class="awards__info">

                                <!-- awards__info-name -->
                                <span class="awards__info-name"><?php the_sub_field('awards_name_for_slide_preview'); ?></span>
                                <!-- /awards__info-name -->

                                <!-- awards__info-logo -->
                                <div class="awards__info-logo" style="background-image: url(<?php the_sub_field('image_for_award'); ?>)"></div>
                                <!-- /awards__info-logo -->
                                <?php if($link = get_sub_field('link_on_website')){ ?>
                                    <a class="btn btn_3" href="<?php echo $link;?>">
                                        <span>visit site</span>
                                    </a>
                                <?php } ?>


                            </div>
                            <!-- /awards__info -->

                        </div>


                       <?php endwhile;

                else :

                    // no rows found

                endif;

                ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
