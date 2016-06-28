<?php get_header(); ?>

<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">services</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <!-- site__content__aside-img -->
            <div class="site__content__aside-img" style="background-image: url('img/services-it-bg.jpg');"></div>
            <!-- /site__content__aside-img -->

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <?php


            if( have_rows('service_content_block') ):


                while ( have_rows('service_content_block') ) : the_row(); ?>


                    <?php
                    $cur_type=get_sub_field('choose_the_type_of_content');

                    if($cur_type=='text'): ?>


                        <div class="content">

                            <?php the_sub_field('add_a_text_block'); ?>

                        </div>


                    <?php else: ?>

                        <?php
                        if( have_rows('add_a_drop_down_list') ): ?>

                            <!-- accordion -->
                            <div class="accordion accordion_2">
                                <dl>
                                    <?php while ( have_rows('add_a_drop_down_list') ) : the_row(); ?>

                                        <dt><?php the_sub_field('add_a_title_of_item')?></dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class="accordion__content">

                                                <?php the_sub_field('add_a_content_of_item')?>

                                            </div>
                                            <!--/accordion__content -->

                                        </dd>

                                        <?php

                                    endwhile; ?>
                                </dl>
                            </div>
                            <!-- /accordion -->
                            <?php


                        endif;

                        ?>

                    <?php  endif;?>



                <?php endwhile;

            else :

                // no rows found

            endif;

            ?>




        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>
