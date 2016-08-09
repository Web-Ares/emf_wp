<?php get_header(); ?>


 
<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">RESOURCES</h1>
        <?php  if($_GET['view']==true){
            $comment_cur_flag = 'comments_scroll';
        }  else {
            $comment_cur_flag='';
        } ?>
    <!-- site__content__wrap -->
    <div class="site__content__wrap <?php echo $comment_cur_flag; ?>">

        <!-- site__content__aside -->
        <aside class="site__content__aside">
            <?php    $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
            ?>
            <!-- resources__info -->
            <div class="resources__info" style="background-image: url(<?php echo $thumb_url; ?>); ">

                <!-- resources__date -->
                <time datetime="2016-06-23" class="resources__date">
                    <?php   $date_d = get_the_date('j');
                    $date_m = get_the_date('M');
                    $date_y = get_the_date('Y');
                    $cur_permalink = get_the_permalink(94);
                   ?>

                    <span class="resources__date-day"><?php echo $date_d; ?></span>
                    <span class="resources__date-month"><?php echo $date_m; ?></span>
                    <span><?php echo $date_y; ?></span>

                </time>
                <!-- /resources__date -->


                <!-- resources__info -->
                <div class="resources__links">
<!--                      <span class="resources__links-item resources__links-item_comments">-->
<!--                          <span>--><?php //comments_number( 'No Comments Yet','1 Comment','Comments <span>%</span>' ); ?><!--</span>-->
<!--                            </span>-->

                    <?php $tmp = $post;
                    $terms = get_the_terms(get_the_ID(),'resource_cat');
                    if($terms){ ?>


                        <span class="resources__links-item resources__links-item_tags">
                        <?php
                        $string_tag='';
                        foreach ($terms as $key => $term){

                            ?>
                            <a href="<?php echo $cur_permalink; ?>?term=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a><?if($key!=(count($terms)-1)){ echo ', '; } ?>
                            <?php
                        }
                        echo '</span>';
                        }
                        $post = $tmp;
                        ?>


                </div>
                <!-- /resources__info -->

            </div>
            <!-- /resources__info -->

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <h2 class="site__title site__title_2"><?php the_title(); ?></h2>

            <div class="content">
                <?php the_content(); ?>
                <address>
                    <?php if($phone = get_field('add_a_phone')){ ?>
                        <p><a target="_blank" href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
                   <?php }
                    if($mail = get_field('add_a_mail')){ ?>
                        <p><a target="_blank" href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                    <?php }
                    if($site = get_field('add_a_website')){
                        $str = preg_replace('!^https?://!i', '', $site);
                        ?>
                        <p><a target="_blank" href="<?php echo $site; ?>"><?php echo $str; ?></a></p>
                    <?php }
                    if($address = get_field('add_a_address')){ ?>
                        <p><a target="_blank" href="https://www.google.com.ua/maps/place/<?php echo $address; ?>"><?php echo $address; ?></a></p>
                    <?php }?>

                </address>
            </div>
        <!-- /site__content__inner -->


    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
