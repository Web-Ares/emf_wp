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
<div class="site"  style="background-image: url('<?php the_field('choose_the_image_for_background_on_current_page'); ?>')">

    <!-- site__header -->
    <header class="site__header">


        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo">
                <img src="<?php echo DIRECT; ?>img/logo.png" width="150" height="150" alt="EMF">
            </h1>
            <!-- /logo -->
        <?php } else {?>
            <!-- logo -->
            <a href="<?php echo home_url(); ?>" class="logo">
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
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411    c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513    c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101    c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104    c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194    c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485    c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z" fill="#FFFFFF"/>
                                </g>
                            </g>
                        </svg>

                </a>
                <a class="social-networks__pinterest" href="<?php the_field('pinterest_link','options')?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 486.392 486.392" style="enable-background:new 0 0 486.392 486.392;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642     C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84     c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71     c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072     c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704     c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z" fill="#FFFFFF"/>
                                    </g>
                                </g>

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
