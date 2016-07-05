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
    if (is_page_template('page-shedule.php')){
        wp_enqueue_style('signature', get_template_directory_uri().'/dist/css/signature.css');
        wp_enqueue_style('contact', get_template_directory_uri().'/dist/css/contact.css');
        wp_enqueue_style('jquery_ui', get_template_directory_uri().'/dist/css/jquery-ui.css');

        wp_register_script('ui',get_template_directory_uri().'/dist/js/vendors/jquery-ui.min.js');
        wp_enqueue_script('ui');
        wp_register_script('touch',get_template_directory_uri().'/dist/js/vendors/jquery.ui.touch-punch.min.js');
        wp_enqueue_script('touch');
        wp_register_script('sign',get_template_directory_uri().'/dist/js/vendors/jquery.signature.min.js');
        wp_enqueue_script('sign');
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

    if (is_singular('resource') || is_page_template('commenterror.php')){

        wp_enqueue_style('resources', get_template_directory_uri().'/dist/css/resources-page.css');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }
    if (is_page_template('page-services.php') || is_singular('services')){
        wp_enqueue_style('swiper', get_template_directory_uri().'/dist/css/swiper.min.css');
        wp_enqueue_style('services-page', get_template_directory_uri().'/dist/css/services-page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }
    if (is_page_template('page-careers.php')){

        wp_enqueue_style('careers', get_template_directory_uri().'/dist/css/careers-page.css');
        wp_register_script('main',get_template_directory_uri().'/dist/js/main.min.js');
        wp_enqueue_script('main');

    }

    if (is_page_template('page-emergency.php')){
        wp_enqueue_style('signature', get_template_directory_uri().'/dist/css/signature.css');
        wp_enqueue_style('index', get_template_directory_uri().'/dist/css/contact.css');
        wp_register_script('ui',get_template_directory_uri().'/dist/js/vendors/jquery-ui.min.js');
        wp_enqueue_script('ui');
        wp_register_script('touch',get_template_directory_uri().'/dist/js/vendors/jquery.ui.touch-punch.min.js');
        wp_enqueue_script('touch');
        wp_register_script('sign',get_template_directory_uri().'/dist/js/vendors/jquery.signature.min.js');
        wp_enqueue_script('sign');
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


    $post_id = $_GET['id'];

    $content = '';
    
    $content = apply_filters('the_content', get_post_field('post_content', $post_id));
    if($content=='') {
        $content = '<h2>The author has not yet added description for this album</h2>';
    }

    $slide='';
    $thumb_array='';
    $result='';
if( have_rows('image_gallery',$post_id) ):

    $counter = 0;
    while ( have_rows('image_gallery',$post_id) ) : the_row();
        $cur_slide = get_sub_field('add_a_new_image',$post_id);
        if($counter==0){$active_slide ='swiper-slide-active is-selected'; } else {$active_slide='';}
        $thumb_array .='<div class="swiper-slide '.$active_slide.'" style="background-image:url('.$cur_slide.')">

                                    <!-- gallery__thumbs-info -->
                                    <div class="gallery__thumbs-info">

                                        <!-- gallery__thumbs-current-num -->
                                <span class="gallery__thumbs-current-num">
                                    02
                                </span>
                                        <!-- /gallery__thumbs-current-num -->

                                        <!-- gallery__thumbs-total-count -->
                                <span class="gallery__thumbs-total-count">
                                    04
                                </span>
                                        <!-- /gallery__thumbs-total-count -->

                                    </div>
                                    <!-- /gallery__thumbs-info -->

                                </div>';
       $slide .='
 <div class="swiper-slide">
  <!-- gallery__left -->
    <div class="gallery__left">
        <div class="gallery__img" style="background-image: url('.$cur_slide.')"></div>
    </div>
    <!-- /gallery__left -->
         </div>';

        $counter++;
     endwhile;

else :

endif;
    if($thumb_array!='' || $slide!=''){
        $result.= '<!-- swiper-container -->
                    <div class="swiper-container gallery__top">
                        <div class="swiper-wrapper">';
        $result.= $slide;
        $result.=' </div>
                    </div>
                    <!-- /swiper-container -->';
        $result.= ' <!-- gallery__thumbs -->
                    <div class="gallery__thumbs">
                        <div class="swiper-container">

                            <div class="swiper-wrapper">';
        $result.=$thumb_array;
        $result.='   </div>

                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>

                    </div>
                    <!-- /gallery__thumbs -->';
    }  else{
        $result = '<h2>The author has not yet added pictures to this album</h2>';
    }




        $json_data = '
               
                 <!-- gallery -->
                <div class="gallery">

                    '.$result.'

                </div>
                <!-- /gallery -->

                <!--gallery-popup__text -->
                <div class="gallery-popup__text">

                    '.$content.'

                </div>
                <!-- /gallery-popup__text -->
                
';






    echo $json_data;
    exit;
}


add_action('wp_ajax_get_gallery','get_post_gallery_about');

add_action('wp_ajax_nopriv_get_gallery', 'get_post_gallery_about');


function get_areas(){

global $post;

$id_area = $_GET['id'];
$id_lvl = $_GET['lvl'];





if($id_lvl==1){
    $arg = array(
        'post_type' =>'areas',
        'posts_per_page'=>-1,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'areas_cat',
                'field' => 'ID',
                'terms' => $id_area
            )
        )
    ) ;

    $posts = get_posts( $arg);

    $cur_lvl_1='';
    foreach ($posts as $post){
        $post_id = $post->ID;
        $code = get_field('number_area_code_field',$post_id);
        $cur_lvl_1 .='  <!-- popup-areas__address -->
                                <a class="popup-areas__address ajax-block__btn"  data-lvl="2" data-id="'.$post_id.'" href="#">

                                    <span>'.get_the_title($post_id).'</span>
                                    '.$code.'

                                </a>
                                <!-- /popup-areas__address -->';

    }

    $json_data = '
                <!-- popup-areas -->
                            <div class="popup-areas ajax-block" data-block="description">

                              '.$cur_lvl_1.'

                               
                            </div>
                            <!-- /popup-areas -->
                
';





}

else {


    $cur_lvl_1="";

        $post_id = $id_area;


            if( have_rows('service_content_block',$post_id) ):


                while ( have_rows('service_content_block',$post_id) ) : the_row();

                    $cur_type=get_sub_field("choose_the_type_of_content", $post_id);

                    if($cur_type=='text') {

                        $text_block = get_sub_field('add_a_text_block',$post_id);
                        $cur_lvl_1.= "<div class='content'>".$text_block."</div>";



                    } else {


                        if (have_rows('add_a_drop_down_list', $post_id)) {

                            $cur_lvl_1 .= "<!-- accordion -->
                            <div class='accordion accordion_2'>
                                <dl>";
                            while (have_rows('add_a_drop_down_list', $post_id)) : the_row();

                                $cur_lvl_1 .= "<dt>" . get_sub_field("add_a_title_of_item", $post_id) . "</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class='accordion__content'>

                                                ".get_sub_field('add_a_content_of_item', $post_id) ."

                                            </div>
                                            <!--/accordion__content -->

                                        </dd>";

                            endwhile;
                            $cur_lvl_1 .= "</dl>
                            </div>
                            <!-- /accordion -->";

                        }

                    }

                endwhile;

            endif;







    $json_data = '
                 <!-- popup-detail -->
                            <div class="popup-detail">

                                <h2 class="site__title site__title_6">'.get_the_title($post_id).'</h2>

                                '.$cur_lvl_1.'

                            </div>
                            <!-- /popup-detail -->
                ';





}




$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);

echo $json_data;
exit;


}


add_action('wp_ajax_get_areas','get_areas');

add_action('wp_ajax_nopriv_get_areas', 'get_areas');



function get_resources(){


$tagId = $_GET['tagId'];

    $output = '';
    if($term_sort = $tagId){

        $sort = array(
            array(
                'taxonomy' => 'resource_cat',
                'field' => 'slug',
                'terms' => $tagId
            )
        );
    }
    if($tagId=='all-tags'){
        $sort='';
    }




    $args = array(
        'post_type' => 'resource',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => $sort


    );

$resource = new WP_query ( $args );

if ( $resource->have_posts() ) { ?>

        <?php while ( $resource->have_posts()) :

            $resource->the_post();
            $cur_id = get_the_ID();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
            $date_d = get_the_date('j');
            $date_m = get_the_date('M');
            $date_y = get_the_date('Y');
            $link_inner = get_permalink();
            $date_full = get_the_date('Y-m-d');
            $title=get_the_title();
            $myExcerpt = get_the_excerpt();
            $tags = array("<p>", "</p>");
            $myExcerpt = str_replace($tags, "", $myExcerpt);
            $myExcerpt = substr($myExcerpt, 0, 88);
            $output.='
             <!-- resources__item -->
            <div class="resources__item">

                <!-- resources__item-pic -->
                <a href="'. $link_inner.'" class="resources__item-pic" style="background-image : url('.$thumb_url.')">
                   

                    <!-- resources__date -->
                    <time datetime="'.$date_full.'" class="resources__date">

                        <span class="resources__date-day">'.$date_d.'</span>
                        <span class="resources__date-month">'.$date_m.'</span>
                        <span>'.$date_y.'</span>

                    </time>
                    <!-- /resources__date -->

                </a>
                <!-- /resources__item-pic -->

                <a href="'.$link_inner.'" class="site__title site__title_5">'.$title.'</a>


                <a href="#" class="resources__links-item resources__links-item_comments">'.
                get_comments_number_text( "No Comments Yet","1 Comment","Comments <span>%</span>" ).'</a><p>'.$myExcerpt.' [...]</p>';


            
                $terms = get_the_terms($cur_id,'resource_cat');
                if($terms){

                    $output.='<span class="resources__links-item resources__links-item_tags">
                                <a data-id="all-tags" href="#">All tags, </a>';
                   
                    foreach ($terms as $key=>$term){
                        $term_cur_slug=$term->slug;
                        if($term_cur_slug==$term_sort){
                            $active = 'active';
                        } else{
                            $active = '';
                        }
                        $term_name  = $term->name.', ';
                        if($key+1==count($terms)){
                            $term_name  = $term->name;
                        }
                        $output.='<a data-id="'.$term_cur_slug.'" href="#?term='.$term_cur_slug.'" class="'.$active.'">'.$term_name.'</a>';
                       
                    }
                    $output.= '</span>';
                    }


        $output.='</div>
            <!-- /resources__item -->';

         endwhile; 
    
    
$json_data = $output;

echo $json_data;
exit;



}
}


add_action('wp_ajax_get_resources','get_resources');

add_action('wp_ajax_nopriv_get_resources', 'get_resources');

?>