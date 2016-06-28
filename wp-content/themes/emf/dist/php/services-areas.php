<?php
$popupId = $_GET['popupId'];

$url = 'http://emf/wp-content/themes/emf/dist/php/services-areas-detail.php';

$json_data = '{
                "html": "
                <!-- popup-areas -->
                            <div class=\"popup-areas ajax-block\" data-action=\"'.$url.'\" data-block=\"description\">

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\"  data-id=\"1\" href=\"#\">

                                    <span>123123123123</span>
                                    IL 60015

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"2\" href=\"#\">

                                    <span>Glenview,</span>
                                    IL 60026

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"3\" href=\"#\">

                                    <span>Northbrook,</span>
                                    IL 600362

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"4\" href=\"#\">

                                    <span>Evanston,</span>
                                    IL 60035

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"5\" href=\"#\">

                                    <span>Golf,</span>
                                    IL 60029

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"6\" href=\"#\">

                                    <span>skokie,</span>
                                    IL 60076

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"7\" href=\"#\">

                                    <span>Deerfield,</span>
                                    IL 60015

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"8\" href=\"#\">

                                    <span>Glenview,</span>
                                    IL 60026

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"9\" href=\"#\">

                                    <span>Northbrook,</span>
                                    IL 600362

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"10\" href=\"#\">

                                    <span>Evanston,</span>
                                    IL 60035

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"11\" href=\"#\">

                                    <span>Golf,</span>
                                    IL 60029

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"12\" href=\"#\">

                                    <span>skokie,</span>
                                    IL 60076

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"13\" href=\"#\">

                                    <span>Deerfield,</span>
                                    IL 60015

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"14\" href=\"#\">

                                    <span>Glenview,</span>
                                    IL 60026

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"3\" href=\"#\">

                                    <span>Northbrook,</span>
                                    IL 600362

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"15\" href=\"#\">

                                    <span>Evanston,</span>
                                    IL 60035

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"16\" href=\"#\">

                                    <span>Golf,</span>
                                    IL 60029

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"17\" href=\"#\">

                                    <span>skokie,</span>
                                    IL 60076

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"18\" href=\"#\">

                                    <span>Golf,</span>
                                    IL 60029

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"19\" href=\"#\">

                                    <span>skokie,</span>
                                    IL 60076

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"20\" href=\"#\">

                                    <span>Deerfield,</span>
                                    IL 60015

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"21\" href=\"#\">

                                    <span>Glenview,</span>
                                    IL 60026

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"22\" href=\"#\">

                                    <span>Northbrook,</span>
                                    IL 600362

                                </a>
                                <!-- /popup-areas__address -->

                                <!-- popup-areas__address -->
                                <a class=\"popup-areas__address ajax-block__btn\" data-id=\"23\" href=\"#\">

                                    <span>Evanston,</span>
                                    IL 60035

                                </a>
                                <!-- /popup-areas__address -->

                            </div>
                            <!-- /popup-areas -->
                "
}';


$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);

echo $json_data;
exit;
?>