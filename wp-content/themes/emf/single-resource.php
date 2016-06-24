<?php get_header(); ?>


<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">RESOURCES</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap">

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
               ?>
                    <span class="resources__date-day"><?php echo $date_d; ?></span>
                    <span class="resources__date-month"><?php echo $date_m; ?></span>
                    <span><?php echo $date_y; ?></span>

                </time>
                <!-- /resources__date -->

                <!-- resources__info -->
                <div class="resources__links">
                    <a href="#" class="resources__links-comments">
                        Comments <span>2</span>
                    </a>
                    <a href="#" class="resources__links-tags">
                        electrical panel, electrician,inspection,
                        Uncategorized
                    </a>
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

            <!-- site__form -->
            <div class="site__form">
                <form action="#">

                    <!-- site__title -->
                    <h3 class="site__title site__title_4">Leave a reply</h3>
                    <!-- /site__title -->

                    <!-- site__required -->
                    <span class="site__required">Your email address will not be published. Required fields are marked * </span>
                    <!-- /site__required -->

                    <!-- site__field -->
                    <div class="site__field">
                        <label for="comment" class="site__label">Comment</label>
                        <textarea name="comment" class="site__textarea" id="comment" cols="30" rows="10"></textarea>
                    </div>
                    <!-- /site__field -->

                    <!-- site__fields -->
                    <div class="site__fields">

                        <!-- site__field -->
                        <div class="site__field site__field_width1">
                            <label for="name" class="site__label">Name*</label>
                            <input type="text" class="site__input" required name="name" id="name">
                        </div>
                        <!-- /site__field -->

                        <!-- site__field -->
                        <div class="site__field site__field_width1">
                            <label for="email" class="site__label">email*</label>
                            <input type="email" class="site__input" required name="email" id="email">
                        </div>
                        <!-- /site__field -->

                        <!-- site__field -->
                        <div class="site__field site__field_width1">
                            <label for="company" class="site__label">Company</label>
                            <input type="text" class="site__input" name="company" id="company">
                        </div>
                        <!-- /site__field -->

                    </div>
                    <!-- /site__fields -->

                    <!-- contact__send -->
                    <div class="contact__send">

                        <button class="btn btn_3" type="submit">
                            <span>send</span>
                        </button>

                    </div>
                    <!-- /contact__send -->

                </form>
            </div>
            <!-- /site__form -->

        </div>
        <!-- /site__content__inner -->


    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
