<?php
/**
 * Template Name: Resources Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title"><?php the_title(); ?></h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <div class="site__content__aside-img" style="background-image: url('<?php the_field('choose_image_on_aside'); ?>');"></div>

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <!-- resources__items -->
            <div class="resources__items">

                <?php
                $tmp = $post;
                $args = array(
                    'post_type' => 'resource',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $resource = new WP_query ( $args );

                if ( $resource->have_posts() ) {

                    while ( $resource->have_posts()) :

                        $resource->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                        $date_d = get_the_date('j');
                        $date_m = get_the_date('M');
                        $date_y = get_the_date('Y');
                        $link_inner = get_permalink();
                        ?>

                        <!-- resources__item -->
                        <a href="<?php echo $link_inner; ?>" class="resources__item">

                            <!-- resources__item-pic -->
                            <div class="resources__item-pic">
                                <img src="<?php echo $thumb_url; ?>" width="230" height="186" alt="">

                                <!-- resources__date -->
                                <time datetime="2016-06-23" class="resources__date">

                                    <span class="resources__date-day"><?php echo $date_d;?></span>
                                    <span class="resources__date-month"><?php echo $date_m;?></span>
                                    <span><?php echo $date_y;?></span>

                                </time>
                                <!-- /resources__date -->

                            </div>
                            <!-- /resources__item-pic -->

                            <h2 class="site__title site__title_5"><?php the_title();?></h2>


                            <span class="resources__links-item resources__links-item_comments">
                                Comments <span>2</span>
                            </span>
                            <?php
                            $myExcerpt = get_the_excerpt();
                            $tags = array("<p>", "</p>");
                            $myExcerpt = str_replace($tags, "", $myExcerpt);
                            $myExcerpt = substr($myExcerpt, 0, 88);
                            ?>
                            <p><?php echo $myExcerpt ?> [...]</p>


                            <span class="resources__links-item resources__links-item_tags">
                                electrical panel, electrician,inspection,
                                Uncategorized
                            </span>

                        </a>
                        <!-- /resources__item -->


                    <?php endwhile;
                }
                rewind_posts();
                $post = $tmp;
                ?>

            </div>
            <!-- /resources__items -->

        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
