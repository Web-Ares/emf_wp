<?php
//required actions
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'wlwmanifest_link');
// close required actions

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'signuppageheaders');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);

// Отключаем события REST API
remove_action('init', 'rest_api_init');
remove_action('rest_api_init', 'rest_api_default_filters', 10, 1);
remove_action('parse_request', 'rest_api_loaded');

// Отключаем Embeds связанные с REST API
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);

remove_action('wp_head', 'wp_oembed_add_discovery_links');
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
//remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('the_content', 'do_shortcode');
add_filter('wpcf7_form_elements', 'do_shortcode');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

add_action('wp_enqueue_scripts', 'add_js');

/* styles and scripts*/
function add_js()
{

    wp_deregister_script('jquery');

    wp_register_script('jquery',get_template_directory_uri().'/dist/js/vendors/jquery-2.2.1.min.js');
    wp_enqueue_script('jquery');
    wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
    wp_enqueue_script('script-nicescroll');

    if (is_page_template('page-home.php')){

        wp_enqueue_style('swiper', get_template_directory_uri().'/dist/css/swiper.min.css');
        wp_enqueue_style('index', get_template_directory_uri().'/dist/css/index.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');
        wp_register_script('index',get_template_directory_uri().'/dist/js/index.min.js');
        wp_enqueue_script('index');


    }
    if (is_page_template('page-testimonials.php')){

        wp_enqueue_style('swiper', get_template_directory_uri().'/dist/css/swiper.min.css');
        wp_enqueue_style('index', get_template_directory_uri().'/dist/css/testimonials.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');



    }
    if (is_page_template('page-contact.php')){

        wp_enqueue_style('index', get_template_directory_uri().'/dist/css/contact.css');

        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }
    if (is_page_template('page-awards.php')){
        wp_enqueue_style('swiper', get_template_directory_uri().'/dist/css/swiper.min.css');
        wp_enqueue_style('awards', get_template_directory_uri().'/dist/css/awards.css');

        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');

        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }
    if (is_page_template('page-resources.php')){

        wp_enqueue_style('resources', get_template_directory_uri().'/dist/css/resources-page.css');

        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }
    if (is_page_template('page-about.php')){
        wp_enqueue_style('swiper', get_template_directory_uri().'/dist/css/swiper.min.css');
        wp_enqueue_style('about_page', get_template_directory_uri().'/dist/css/about-page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('tabs',get_template_directory_uri().'/dist/js/tabs.min.js');
        wp_enqueue_script('tabs');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');
    }

    if (is_singular('resource')){

        wp_enqueue_style('resources', get_template_directory_uri().'/dist/css/resources-page.css');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }
}
wp_enqueue_style('style', get_template_directory_uri().'/style.css');


if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'menu' => 'menu'
) );

function get_post_gallery_about(){

    $json_data='';


    $post_id = $_GET['popupId'];

    $content = '';
    $content = apply_filters('the_content', get_post_field('post_content', $post_id));
    if($content=='') {
        $content = '<h2>The author has not yet added description for this album</h2>';
    }

    $slide='';
    $thumb_array='';
    $result='';

if( have_rows('image_gallery',$post_id) ):


    while ( have_rows('image_gallery',$post_id) ) : the_row();
        $cur_slide = get_sub_field('add_a_new_image',$post_id);
        $thumb_array .='<div class=\"swiper-slide swiper-slide-active is-selected\" style=\"background-image:url('.$cur_slide.')\">

                                    <!-- gallery__thumbs-info -->
                                    <div class=\"gallery__thumbs-info\">

                                        <!-- gallery__thumbs-current-num -->
                                <span class=\"gallery__thumbs-current-num\">
                                    02
                                </span>
                                        <!-- /gallery__thumbs-current-num -->

                                        <!-- gallery__thumbs-total-count -->
                                <span class=\"gallery__thumbs-total-count\">
                                    04
                                </span>
                                        <!-- /gallery__thumbs-total-count -->

                                    </div>
                                    <!-- /gallery__thumbs-info -->

                                </div>';
       $slide .='
 <div class=\"swiper-slide\">
  <!-- gallery__left -->
    <div class=\"gallery__left\">
        <div class=\"gallery__img\" style=\"background-image: url('.$cur_slide.')\"></div>
    </div>
    <!-- /gallery__left -->
         </div>';


     endwhile;

else :

endif;
    if($thumb_array!='' || $slide!=''){
        $result.= '<!-- swiper-container -->
                    <div class=\"swiper-container gallery__top\">
                        <div class=\"swiper-wrapper\">';
        $result.= $slide;
        $result.=' </div>
                    </div>
                    <!-- /swiper-container -->';
        $result.= ' <!-- gallery__thumbs -->
                    <div class=\"gallery__thumbs\">
                        <div class=\"swiper-container\">

                            <div class=\"swiper-wrapper\">';
        $result.=$thumb_array;
        $result.='   </div>

                        </div>

                        <!-- Add Arrows -->
                        <div class=\"swiper-button-next swiper-button-white\"></div>
                        <div class=\"swiper-button-prev swiper-button-white\"></div>

                    </div>
                    <!-- /gallery__thumbs -->';
    }  else{
        $result = '<h2>The author has not yet added pictures to this album</h2>';
    }




        $json_data = '{
                "html": "
                 <!-- gallery -->
                <div class=\"gallery\">

                    '.$result.'

                </div>
                <!-- /gallery -->

                <!--gallery-popup__text -->
                <div class=\"gallery-popup__text\">

                    '.$content.'

                </div>
                <!-- /gallery-popup__text -->
                "
}';




    $json_data = str_replace("\r\n",'',$json_data);
    $json_data = str_replace("\n",'',$json_data);

    echo $json_data;
    exit;
}


add_action('wp_ajax_get_gallery','get_post_gallery_about');

add_action('wp_ajax_nopriv_get_gallery', 'get_post_gallery_about');

?>