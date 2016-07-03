<?php
/**
 * Template Name: Emergency Services Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">SERVICE REQUEST</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <div class="site__content__aside-img" style="background-image: url('<?php the_field('choose_the_aside_image'); ?>');"></div>

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <h2 class="site__title site__title_2">Emergency Service Request</h2>

            <!-- site__form -->
            <div class="site__form">
              <?php echo do_shortcode('[contact-form-7 id="219" title="Emergency Page"]'); ?>
            </div>
            <!-- /site__form -->

        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
