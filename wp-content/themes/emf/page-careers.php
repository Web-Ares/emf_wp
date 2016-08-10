<?php
/**
 * Template Name: Careers Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title"><?php the_title(); ?></h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <div class="site__content__aside-img" style="background-image: url('<?php the_field('choose_the_aside_image'); ?>');"></div>

        </aside>
        <!-- /site__content__aside -->


        <!-- site__content__inner -->
        <div class="site__content__inner">

            <!-- tabs -->
            <div class="tabs">
                <dl>
                    <dt>Join Our Team</dt>
                    <dd>
                        <div class="tabs__content">

                            <!-- content -->
                            <div class="content content_careers">


                                    <?php the_field('add_a_text_block'); ?>


                            </div>
                            <!-- /content -->

                           <?php if( have_rows('add_a_drop_down_list') ):

                            $work = 0; ?>

                            <!-- accordion -->
                            <div class="accordion accordion_careers">

                                <h2 class="site__title site__title_6"><?php the_sub_field('title_for_drop_down'); ?></h2>
                                <dl>
                                    <?php while ( have_rows('add_a_drop_down_list') ) : the_row();
                                        $title = get_sub_field('add_a_title_of_item');
                                        ?>

                                        <dt><?php echo $title; ?></dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class="accordion__content">

                                                <?php the_sub_field('add_a_content_of_item')?>

                                            </div>

                                            <a href="#" class="btn btn_3 apply" data-value="<?php echo $work; ?>" data-text1="apply" data-text2="applied">
                                                <span>apply</span>
                                            </a>


                                        </dd>

                                        <?php $work++;

                                    endwhile; ?>
                                </dl>
                            </div>
                            <!-- /accordion -->
                            <?php


                            endif; ?>

                        </div>
                    </dd>
                    <dt>Apply</dt>
                    <dd>
                        <div class="tabs__content">

                            <!-- site__form -->
                            <div class="site__form">
                                <?php echo do_shortcode('[contact-form-7 id="6" title="Careers Form"]'); ?>
                            </div>
                            <!-- /site__form -->

                        </div>
                    </dd>
                </dl>
            </div>
            <!-- /tabs -->

        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>
