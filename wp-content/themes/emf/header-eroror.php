<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <link rel="shortcut icon" href="<?php echo TEMPLATEURI;?>/faviconit/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo TEMPLATEURI;?>/faviconit/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-16.png">
    <link rel="apple-touch-icon" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo TEMPLATEURI;?>/faviconit/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo TEMPLATEURI;?>/faviconit/favicon-144.png">
    <meta name="msapplication-config" content="<?php echo TEMPLATEURI;?>/faviconit/browserconfig.xml">
    <link rel="stylesheet" href="<?php echo DIRECT?>css/resources-page.css">
    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>

</head>
<body data-action="<?php echo admin_url( 'admin-ajax.php' );?>">

<script>

    var ZoomSite = function (obj) {

        //private properties
        var _self = this,
            _obj = obj,
            _window = window;

        //private methods
        var _onEvents = function () {

                _window.onresize = function () {

                    if( _window.innerWidth >= 1024 ) {

                        _setSize();

                    } else {

                        _obj.style.fontSize = 75 + 'px';

                    }

                }

            },
            _init = function () {

                _obj.obj = _self;

                _onEvents();

                if( _window.innerWidth >= 1024 ) {

                    _setSize();

                }

            },
            _setSize = function () {

                var newSize;

                if( _window.innerHeight > 500 ) {

                    newSize = ( 100 * ( window.innerHeight / 900 ) ) + 'px';

                } else {

                    newSize = ( 100 * ( 500 / 900 ) ) + 'px';

                }

                _obj.style.fontSize = newSize;

            };


        _init();
    };

    new ZoomSite( document.body );

</script>

<?php if (is_page() || is_single() || is_singular() || is_404()) {
    the_post();
} ?>
<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">


        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo logo_amin">
                <img src="<?php echo DIRECT; ?>img/logo.png" width="150" height="150" alt="EMF">
            </h1>
            <!-- /logo -->
        <?php } else {?>
            <!-- logo -->
            <a href="<?php echo home_url(); ?>" class="logo logo_amin">
                <img src="<?php echo DIRECT; ?>img/logo.png" width="150" height="150" alt="EMF">
            </a>
            <!-- /logo -->
        <?php } ?>

        <!-- site__header__btn -->
        <button type="button" class="site__header__btn">
            <span></span>
        </button>
        <!-- /site__header__btn -->

        <!-- site__header__items -->
        <div class="site__header__items">
            <!-- menu -->
            <nav class="menu nice-scroll">
                <?php
                $locations = get_nav_menu_locations();
                $menu_items = wp_get_nav_menu_items($locations['menu']);

                foreach ((array)$menu_items as $key => $menu_item) {
                    if($post->ID==$menu_item->object_id){
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    ?>

                    <a href="<?php echo $menu_item->url; ?>" class="menu__item <?php echo $active; ?>"><?php echo $menu_item->title; ?></a>

                <?php }; ?>

            </nav>
            <!-- /menu -->

            <!-- social-networks -->
            <div class="social-networks">
                <a class="social-networks__facebook" href="<?php the_field('facebook_link','options')?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                            <g>
                                <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                            </g>
                        </svg>

                </a>
                <a class="social-networks__twitter" href="<?php the_field('twitter_link','options')?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 430.119 430.119" style="enable-background:new 0 0 430.119 430.119;" xml:space="preserve">
                            <g>
                                <path id="Yelp" d="M108.716,19.591c21.693-17.051,63.4-21.938,80.561-18.61c17.177,3.307,26.147,12.914,26.257,24.612l0.99,149.155   c0.077,11.714-6.004,22.481-13.525,23.931c-7.561,1.418-18.687-5.544-24.803-15.509L99.938,55.275   C93.868,45.297,81.633,40.896,108.716,19.591z M82.732,303.211l78.788-27.881c10.979-3.893,20.812-14.725,21.917-24.138   c1.066-9.409-6.915-20.582-17.74-24.866l-83.228-33.001c-10.833-4.282-23.331,5.873-26.628,22.49c0,0-1.979,57.867,0,69.848   C57.843,297.634,71.755,307.122,82.732,303.211z M220.164,317.143c0.231-11.747-6.04-21.879-13.936-22.603   c-7.899-0.733-20.439,6.007-27.928,14.953l-54.959,65.904c-7.484,8.956-3.766,29.99,7.141,33.972l57.468,19.961   c10.939,3.98,30.203-7.799,30.427-19.509L220.164,317.143z M356.781,301.802l-68.914-19.812   c-11.173-3.211-23.858-2.908-28.151,0.728c-4.299,3.594-3.234,14.954,2.395,25.207l43.492,79.598   c5.624,10.249,28.114,8.494,34.308-1.452c0,0,26.215-38.676,31.036-53.172C375.767,318.37,367.945,305.013,356.781,301.802z    M373.564,189.878c-3.104-10.069-24.651-39.756-36.319-49.875c-11.658-10.141-24.992-8.87-32.511,0.033l-44.412,52.906   c-7.523,8.902-9.535,23.022-4.518,31.325c5.013,8.303,18.388,13.007,29.738,10.459l76.82-14.244   C376.229,217.155,376.719,199.947,373.564,189.878z" fill="#FFFFFF"/>
                            </g>
                        </svg>

                </a>
                <a class="social-networks__pinterest" href="<?php the_field('pinterest_link','options')?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                            <g>
                                <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558zM5.477,420.56h92.184v-277.32H5.477V420.56z" fill="#FFFFFF"/>
                            </g>
                        </svg>
                </a>
            </div>
            <!-- /social-networks -->

            <!-- site__header__angies -->
            <a href="<?php the_field('angies_list_link','options')?>" class="site__header__angies">
                <img src="<?php echo DIRECT;?>pic/angies-list.png" width="127" height="16" alt="">
            </a>
            <!-- /site__header__angies -->

        </div>
        <!-- /site__header__items -->

    </header>
    <!-- /site__header -->
