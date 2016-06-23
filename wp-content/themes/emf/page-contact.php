<?php
/**
 * Template Name: Contact  Page
 */
get_header(); ?>

<!-- site__content -->
<div class="site__content">
    <h1 class="site__title">contact</h1>

    <!-- site__content__wrap -->
    <div class="site__content__wrap contact">

        <!-- site__content__aside -->
        <aside class="site__content__aside">

            <!-- contact__info -->
            <div class="contact__info">
                <h2 class="site__title site__title_3">Contact Info</h2>
                <?php $address = get_field('address_field'); ?>
                <!-- contact__info -->
                <a target="_blank" href="https://www.google.com.ua/maps/place/<?php echo $address; ?>" class="contact__info-item contact__info-item_address">
                    <?php echo $address; ?>
                </a>
                <!-- contact__info -->
                <?php $phone = get_field('phone_filed'); ?>
                <!-- contact__info -->
                <a href="tel:<?php echo $phone; ?>" class="contact__info-item contact__info-item_phone">
                    <?php echo $phone; ?>
                </a>
                <!-- contact__info -->
                <?php $email = get_field('e-mail_field'); ?>
                <!-- contact__info -->
                <a target="=_blank" href="mailto:c<?php echo $email; ?>" class="contact__info-item  contact__info-item_email">
                    <?php echo $email; ?>
                </a>
                <!-- contact__info -->
                <?php $site = get_field('website'); ?>
                <!-- contact__info -->
                <a target="=_blank" href="http://<?php echo $site; ?>" class="contact__info-item  contact__info-item_site">
                    <?php echo $site; ?>
                </a>
                <!-- contact__info -->

            </div>
            <!-- /contact__info -->

        </aside>
        <!-- /site__content__aside -->

        <!-- site__content__inner -->
        <div class="site__content__inner nice-scroll">

            <!-- contact__form -->
            <div class="contact__form">

                <h2 class="site__title site__title_2">Contact Form</h2>

                <!-- site__form -->
                <div class="site__form">
                    <?php echo do_shortcode('[contact-form-7 id="80" title="Form on Contact Page"]'); ?>
                </div>
                <!-- /site__form -->

            </div>
            <!-- /contact__form -->

            <!-- contact__text -->
            <div class="contact__text">
                <?php the_field('text_after_contact_form'); ?>
            </div>
            <!-- /contact__text -->

        </div>
        <!-- /site__content__inner -->

    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
