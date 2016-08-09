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

                <?php

                if($term_sort = $_GET['term']){

                    $sort = array(
                        array(
                            'taxonomy' => 'resource_cat',
                            'field' => 'slug',
                            'terms' => $term_sort
                        )
                    );
                }


                $cur_perm = get_the_permalink();
                $tmp = $post;
                $args = array(
                    'post_type' => 'resource',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => $sort


                );

                $resource = new WP_query ( $args );

                if ( $resource->have_posts() ) { ?>

            <!-- resources__ajax-wrap -->
            <div class="resources__ajax-wrap">

                <!-- resources__items -->
                <div class="resources__items">

                    <?php while ( $resource->have_posts()) :

                        $resource->the_post();
                        $cur_id = get_the_ID();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                        $date_d = get_the_date('j');
                        $date_m = get_the_date('M');
                        $date_y = get_the_date('Y');
                        $date_full = get_the_date('Y-m-d');
                        $link_inner = get_permalink();
                        ?>


                        <!-- resources__item -->
                        <div class="resources__item">

                            <!-- resources__item-pic -->
                        <?php $title=get_the_title(); ?>
                            <a href="<?php echo $link_inner; ?>" class="resources__item-pic" style="background-image : url(<?php echo $thumb_url; ?>)">
                             

                                <!-- resources__date -->
                                <time datetime="<?php echo $date_full; ?>" class="resources__date">

                                    <span class="resources__date-day"><?php echo $date_d; ?></span>
                                    <span class="resources__date-month"><?php echo $date_m; ?></span>
                                    <span><?php echo $date_y; ?></span>

                                </time>
                                <!-- /resources__date -->

                            </a>
                            <!-- /resources__item-pic -->

                            <h2 class="site__title site__title_5">
                                <a href="<?php echo $link_inner; ?>"><?php echo $title; ?></a>
                            </h2>

                            
                        <?php
                        $myExcerpt = get_the_excerpt();
                        $tags = array("<p>", "</p>");
                        $myExcerpt = str_replace($tags, "", $myExcerpt);
                        $myExcerpt = substr($myExcerpt, 0, 88);
                        ?>
                        <p><?php echo $myExcerpt ?> [...]</p>


                            <?php


                            $tmp = $post;
                            $terms = get_the_terms($cur_id,'resource_cat');


                            if($terms){


                            ?>

                            <span class="resources__links-item resources__links-item_tags">
                                <a  data-id="all-tags" href="<?php echo $cur_perm;  ?>">All tags, </a>
                            <?php
                            foreach ($terms as $key => $term){
                                $term_cur_slug=$term->slug;
                                    if($term_cur_slug==$term_sort){
                                        $active = 'active';
                                    } else{
                                        $active = '';
                                    }
                                $term_name  = $term->name.', ';
                                if($key+1==count($terms)){
                                    $term_name  = $term->name;
                                }
                                ?>
                                <a data-id="<?php echo $term_cur_slug; ?>" href="<?php echo $cur_perm.'?term='.$term_cur_slug.'' ?>" class="<?php echo $active; ?>"><?php echo  $term_name;  ?></a>
                            <?php
                            }

                            echo '</span>';
                            }
                          ?>

                        </div>
                        <!-- /resources__item -->

                    <?php endwhile; ?>

                </div>
                <!-- /resources__items -->
                
                </div>
                <?php }
                rewind_posts();
                $post = $tmp;
                ?>



        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
