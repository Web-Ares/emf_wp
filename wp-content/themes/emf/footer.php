<?php $em_serv_link = get_the_permalink(40);
$em_serv_title = get_the_title(40);
?>
<!-- site__header -->
<footer class="site__footer site__footer_index">
    <p class="site__footer__copyright">&copy; 2016 EMF Power Co. All Rights Reserved.</p>
    <a href="<?php echo $em_serv_link; ?>" class="btn btn_1"><span><?php echo $em_serv_title; ?></span></a>
</footer>
<!-- site__header -->

<?php wp_footer(); ?>
</div>
<!-- /site -->


</body>
</html>
