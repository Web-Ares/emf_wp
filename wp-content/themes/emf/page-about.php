<?php
/**
 * Template Name: About Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title"><?php the_title(); ?></h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <!-- about-person -->
            <div class="about-person">

                <!-- about-person__bg -->
                <div class="about-person__bg" style="background-image: url(<?php the_field('preview_image'); ?>)"></div>
                <!-- /about-person__bg -->

                <!-- about-person__info -->
                <div class="about-person__info">

                    <!-- about-person__name -->
                    <span class="about-person__name">
                        <?php
                        $person_name = get_field('person_name_field');
                        echo $person_name; ?></span>
                    <!-- /about-person__name -->

                    <!-- about-person__sign -->
                    <div class="about-person__sign">
                        <img src="<?php echo DIRECT; ?>pic/person-sign1.png" width="113" height="63" alt="Image">
                    </div>
                    <!-- /about-person__sign -->

                    <a href="#" class="btn btn_2 popup__open" data-popup="person-info"><span>read more</span></a>

                </div>
                <!-- /about-person__info -->

            </div>
            <!-- /about-person -->

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner">

            <!-- tabs -->
            <div class="tabs">
                <dl>
                    <dt>WHY CHOOSE us</dt>
                    <dd>
                        <div class="tabs__content">

                            <div class="content">

                                <?php

                                // check if the repeater field has rows of data
                                if( have_rows('content_block') ):

                                    // loop through the rows of data
                                    while ( have_rows('content_block') ) : the_row();

                                        if(get_sub_field('choose_the_type_of_block')=='text'){

                                            the_sub_field('why_choose_us_field');

                                        } else {

                                            if( have_rows('add_a_sponsors_logo') ): ?>
                                                <!-- about-sponsors -->
                                                <div class="about-sponsors">
                                               <?php // loop through the rows of data
                                                while ( have_rows('add_a_sponsors_logo') ) : the_row(); ?>

                                                    <img src="<?php the_sub_field('add_a_new_logo'); ?>"  alt="Sponsor's Logo">

                                               <?php endwhile;

                                               ?>     </div>
                                                <!-- /about-sponsors -->
                                                <?php
                                            endif; ?>

                                        <?php } ?>


                                        <?php endwhile;

                                else :


                                endif;

                                ?>

                            </div>

                        </div>
                    </dd>
                    <dt>portfolio</dt>
                    <dd>
                        <div class="tabs__content">

                            <!-- about-portfolio -->
                            <div class="about-portfolio" data-action="<?php echo admin_url( 'admin-ajax.php' );?>">

                                <?php
                                $tmp = $post;
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                );

                                $portfolio = new WP_query ( $args );

                                if ( $portfolio->have_posts() ) {

                                    while ( $portfolio->have_posts()) :

                                        $portfolio->the_post();
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                                        $title = get_the_title();
                                        ?>

                                        <!-- about-portfolio__item -->
                                        <div class="about-portfolio__item" data-id="<?php the_ID(); ?>">

                                            <!-- about-portfolio__pic -->
                                            <div class="about-portfolio__pic">
                                                <img src="<?php echo $thumb_url; ?>" width="204" height="152" alt="<?php echo $title; ?>">
                                            </div>
                                            <!-- /about-portfolio__pic -->

                                            <!-- about-portfolio__place -->
                                            <div class="about-portfolio__place">
                                                <?php echo $title; ?>,
                                                <span><?php the_field('location_field'); ?></span>
                                            </div>
                                            <!-- /about-portfolio__place -->

                                        </div>
                                        <!-- /about-portfolio__item -->

                                    <?php endwhile;
                                }
                                rewind_posts();
                                $post = $tmp;
                                ?>

                            </div>
                            <!-- /about-portfolio -->

                        </div>
                    </dd>
                    <dt>faq</dt>
                    <dd>
                        <div class="tabs__content">

                            <!--accordion -->
                            <div class="accordion">

                                <dl>
                                    <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('add_a_faq_item') ):

                                        // loop through the rows of data
                                        while ( have_rows('add_a_faq_item') ) : the_row(); ?>

                                            <dt> <?php the_sub_field('title_of_item'); ?></dt>
                                            <dd>

                                                <!--accordion__content -->
                                                <div class="accordion__content">

                                                    <?php the_sub_field('description_of_item'); ?>

                                                </div>
                                                <!--/accordion__content -->

                                            </dd>

                                        <?php endwhile;

                                    else :

                                        // no rows found

                                    endif;

                                    ?>
                                </dl>

                            </div>
                            <!-- /accordion -->

                        </div>
                    </dd>
                </dl>
            </div>
            <!-- /tabs -->

        </div>
        <!-- /site__content__inner -->

        <!-- popup -->
        <div class="popup">

            <!-- popup__wrap -->
            <div class="popup__wrap">

                <!-- popup__content -->
                <div class="popup__content popup__person-info">

                    <!-- popup__close -->
                    <div class="popup__close">

                    </div>
                    <!-- /popup__close -->

                    <!-- popup-info -->
                    <div class="popup-info">

                        <h2 class="site__title site__title_7"><?php echo $person_name; ?></h2>

                        <div class="popup-info__text">

                            <?php the_field('description_text'); ?>

                        </div>

                    </div>
                    <!-- /popup-info -->

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
