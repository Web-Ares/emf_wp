<?php get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title"><?php the_title();?></h1>

    <!-- site__content__wrap -->
    <div class="site__content">

        <?php the_content(); ?>

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
