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
                      <span class="resources__links-item resources__links-item_comments">
                          <span><?php comments_number( 'No Comments Yet','1 Comment','Comments <span>%</span>' ); ?></span>
                            </span>

                    <?php $tmp = $post;
                    $terms = get_the_terms(get_the_ID(),'resource_cat');
                    if($terms){ ?>


                        <span class="resources__links-item resources__links-item_tags">
                        <?php
                        $string_tag='';
                        foreach ($terms as $term){

                            $string_tag .= $term->name.', ';
                            ?>

                            <?php
                        }
                        echo $string_tag.'</span>';
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

            <!-- site__form -->
            <div class="site__form">


                    <!-- site__title -->
                    <h3 class="site__title site__title_4">Leave a reply</h3>
                    <!-- /site__title -->

                    <!-- site__required -->
                    <span class="site__required">Your email address will not be published. Required fields are marked * </span>
                    <!-- /site__required -->


            <?php
            $comment_args = array( '',

                'fields' => apply_filters( 'comment_form_default_fields', array(

                    'author' => '<div class="site__fields"><!-- site__field -->
                                <div class="site__field site__field_width1"><label for="author">' . __( 'NAME*' ) . '</label> ' .

                        '<input id="author" class="site__input"  name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',

                    'email'  => '<!-- site__field -->
                                <div class="site__field site__field_width1"><label for="email">' . __( 'EMAIL*' ) . '</label> '.

                               '<input id="email" class="site__input"  name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',

                    'industry'    => '' ) ),

                'comment_field' => '
                     <!-- site__field -->
                    <div class="site__field">
                    <label class="site__label" for="comment">'. __( 'Comment' ) . '</label>' .

                    '<textarea id="comment" name="comment"  class="site__textarea" cols="30" rows="10" aria-required="true"></textarea>' .

                    '</div>
                    <!-- /site__field -->',

                'comment_notes_after' => '',
                'label_submit' => '',
                'class_submit' => 'btn btn_3',
                'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s"><span>SEND</span></button>',
                'submit_field'=>'<div class="contact__send">%1$s %2$s</div>
                            <!-- /contact__send -->'

            );

                  comment_form($comment_args); ?>

            </div>
            <!-- /site__form -->

            <div class="content">
                <?php $comments = get_approved_comments(get_the_ID() );
                if($comments):
                ?>
                <h2>Latest comments </h2>
                <?php

                foreach ($comments as $comment):

               ?>


                    <div class="comments_custom">
                        <?php  $company = get_comment_meta($comment->comment_ID,'company_cur');

                        if($company[0]){
                            $from = ' From: ';
                        } else {
                            $from='';
                        }
                        ?>
                        <h6><?php echo $comment->comment_author?></h6>
                            <h6><?php echo $from.$company[0]; ?></h6>
                        said: <div class="comments_content">"<?php echo $comment->comment_content; ?>"</div>
                    </div>
                <?php endforeach; ?>

                <?php endif; ?>
        </div>
            </div>
        <!-- /site__content__inner -->


    </div>
    <!-- /site__content__wrap -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
