<?php
/**
 * Template Name: Schedule-an-appointment  Page
 */
get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">schedule an appointment</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <div class="site__content__aside-img" style="background-image: url('<?php the_field('choose_the_aside_image'); ?>');"></div>

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <h2 class="site__title site__title_2">Service Request Form</h2>
            
            <?php echo do_shortcode('[contact-form-7 id="218" title="Schedule an appointment"]'); ?>
            
            

        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->

<?php get_footer(); ?>
