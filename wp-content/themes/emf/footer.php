<?php $em_serv_link = get_the_permalink(40);
$em_serv_title = get_the_title(40);
?>

<?php if(is_page_template('page-about.php')){ ?>

    <!-- gallery-popup -->
    <div class="gallery-popup">

        <!-- gallery-popup__close -->
        <a href="#" class="gallery-popup__close"></a>
        <!-- /gallery-popup__close -->

        <!-- gallery-popup__preloader -->
        <div class="gallery-popup__preloader"></div>
        <!-- /gallery-popup__preloader -->

        <!-- gallery-popup__wrap -->
        <div class="gallery-popup__wrap">




        </div>
        <!-- /gallery-popup__wrap -->

    </div>
    <!-- /gallery-popup -->

<?php }?>

<!-- site__header -->
<footer class="site__footer site__footer_index">
    <p class="site__footer__copyright">&copy; 2016 EMF Power Co. All Rights Reserved.</p>
    <?php if(is_front_page()){ ?>
        <a href="<?php echo $em_serv_link; ?>" class="btn btn_1"><span><?php echo $em_serv_title; ?></span></a>
    <?php   }?>
</footer>
<!-- site__header -->

<?php wp_footer(); ?>
</div>
<!-- /site -->


</body>
</html>
