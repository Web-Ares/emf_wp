<?php
$popupId = $_GET['popupId'];

$json_data = '{
                "html": "
                 <!-- popup-detail -->
                            <div class=\"popup-detail\">

                                <h2 class=\"site__title site__title_6\">DEERFIELD RESIDENTIAL ELECTRICIAN</h2>

                                <!-- content -->
                                <div class=\"content\">

                                    <p>EMF Power employs professionally certified electricians in the North Shore and Chicago
                                        who are available 24 hours a day — offering your family convenience and unprecedented
                                        peace-of-mind. No job is too big or small for EMF Power.</p>

                                </div>
                                <!-- /content -->

                                <!-- accordion -->
                                <div class=\"accordion accordion_2\">

                                    <dl>
                                        <dt>Electronic Lighting</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class=\"accordion__content\">

                                                <p>Residential lighting is arguably as important to a home’s aesthetics as any other design element.
                                                    Changing the lighting in a particular room can often change the room’s entire ambiance. A home
                                                    owner can take control of their lighting’s appearance – and its efficiency – by using controls and
                                                    dimmers that are a bit more advanced than a simple on-off switch.

                                                </p>

                                            </div>
                                            <!--/accordion__content -->

                                        </dd>
                                        <dt>Electrical Panel</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class=\"accordion__content\">

                                                <p>Residential lighting is arguably as important to a home’s aesthetics as any other design element.
                                                    Changing the lighting in a particular room can often change the room’s entire ambiance. A home
                                                    owner can take control of their lighting’s appearance – and its efficiency – by using controls and
                                                    dimmers that are a bit more advanced than a simple on-off switch.

                                                </p>

                                            </div>
                                            <!--/accordion__content -->


                                        </dd>
                                        <dt>Outlets / Switches Repairs</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class=\"accordion__content\">

                                                <p>Residential lighting is arguably as important to a home’s aesthetics as any other design element.
                                                    Changing the lighting in a particular room can often change the room’s entire ambiance. A home
                                                    owner can take control of their lighting’s appearance – and its efficiency – by using controls and
                                                    dimmers that are a bit more advanced than a simple on-off switch.

                                                </p>

                                            </div>
                                            <!--/accordion__content -->


                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>Electronic Lighting</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class=\"accordion__content\">

                                                <p>Residential lighting is arguably as important to a home’s aesthetics as any other design element.
                                                    Changing the lighting in a particular room can often change the room’s entire ambiance. A home
                                                    owner can take control of their lighting’s appearance – and its efficiency – by using controls and
                                                    dimmers that are a bit more advanced than a simple on-off switch.

                                                </p>

                                            </div>
                                            <!--/accordion__content -->

                                        </dd>
                                        <dt>Electrical Panel</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class=\"accordion__content\">

                                                <p>Residential lighting is arguably as important to a home’s aesthetics as any other design element.
                                                    Changing the lighting in a particular room can often change the room’s entire ambiance. A home
                                                    owner can take control of their lighting’s appearance – and its efficiency – by using controls and
                                                    dimmers that are a bit more advanced than a simple on-off switch.

                                                </p>

                                            </div>
                                            <!--/accordion__content -->


                                        </dd>
                                        <dt>Outlets / Switches Repairs</dt>
                                        <dd>

                                            <!--accordion__content -->
                                            <div class=\"accordion__content\">

                                                <p>Residential lighting is arguably as important to a home’s aesthetics as any other design element.
                                                    Changing the lighting in a particular room can often change the room’s entire ambiance. A home
                                                    owner can take control of their lighting’s appearance – and its efficiency – by using controls and
                                                    dimmers that are a bit more advanced than a simple on-off switch.

                                                </p>

                                            </div>
                                            <!--/accordion__content -->


                                        </dd>
                                    </dl>

                                </div>
                                <!-- /accordion -->

                            </div>
                            <!-- /popup-detail -->
                "
}';


$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);

echo $json_data;
exit;
?>