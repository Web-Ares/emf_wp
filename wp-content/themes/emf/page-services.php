<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">services</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <!-- services-areas -->
            <div class="services-areas ajax-block" data-action="<?php echo DIRECT;?>php/services-areas.php" data-block="addresses">

                <!-- Swiper -->
                <div class="services-areas__gallery swiper-container">
                    <div class="swiper-wrapper">

                        <?php
                        $tmp = $post;
                        $terms = get_terms( 'areas_cat', array(
                            'hide_empty' => false,
                            'orderby' => 'term_id'
                        ) );

                        foreach ($terms as $term){
                            $term_id = $term->term_id;
                            ?>

                            <div class="swiper-slide">

                                <!-- services-areas__slide -->
                                <div class="services-areas__slide">

                                    <!-- services-areas__name -->
                                    <span class="services-areas__name"><?php echo $term->name; ?></span>
                                    <!-- /services-areas__name -->

                                    <!-- services-areas__map -->
                                    <div class="services-areas__map" style="background-image: url(<?php the_field('image_for_area_category','areas_cat_'.$term_id); ?>)"></div>
                                    <!-- /services-areas__map -->

                                    <a class="btn btn_3 ajax-block__btn popup__open" data-popup="addresses" data-lvl=1 data-id="<?php echo $term_id; ?>" href="#">
                                        <span>find  area</span>
                                    </a>

                                </div>
                                <!-- /services-areas__slide -->

                            </div>

                        <?php }
                        $post=$tmp;
                        ?>

                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>
                <!-- /Swiper -->

            </div>
            <!-- /services-areas -->

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <!-- services-items -->
            <div class="services-items">
            <?php
            $tmp = $post;
            $args = array(
                'post_type'=>'services',
                'posts_per_page' => 4,
                'post_status' => 'publish'

            );
            $posts = get_posts($args);
            foreach ($posts as $post){

                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                $cur_id = get_the_ID();
                $image_count = 4;
                if($cur_id==159){
                    $image_count = 1;
                   
                } elseif($cur_id==175){
                    $image_count = 2;
                    
                } elseif($cur_id==176){
                    $image_count = 3;
                    
                }
                
                ?>

                    <!-- services-items__elem -->
                    <a href="<?php the_permalink(); ?>" class="services-items__elem" style="background-image: url(<?php echo $thumb_url; ?>)">

                        <div class="services-items__hover" style="background-image: url(<?php echo DIRECT;?>img/services-block-hover-bg<?php echo $image_count; ?>.jpg)"></div>

                        <span><?php the_title(); ?></span>

                    </a>
                    <!-- /services-items__elem -->
                
           <?php }
            $post = $tmp;
            ?>
        </div>
        <!-- /services-items -->
       


        </div>
        <!-- /site__content__inner -->

        <!-- popup -->
        <div class="popup">

            <!-- popup__wrap -->
            <div class="popup__wrap">

                <!-- popup__close -->
                <div class="popup__close"></div>
                <!-- /popup__close -->

                <!-- popup__preloader -->
                <div class="popup__preloader"></div>
                <!-- /popup__preloader -->

                <!-- popup__content -->
                <div class="popup__content popup__addresses">

                    <div class="ajax-block-addresses"></div>

                    <div class="ajax-block-description"></div>

                </div>
                <!-- /popup__content -->

            </div>
            <!-- /popup__wrap -->

        </div>
        <!-- /popup -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
