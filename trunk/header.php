<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sailors</title>
        <meta name="keywords" content="rent, landlord, nyumba, kodisha, buy, house, room" />
        <meta name="description" content="rentals" />
        <link rel="stylesheet" href="../style/blitzer/jquery-ui-1.8.13.custom.css" type="text/css" />
        <script type="text/javascript" src="scripts/jquery-1.6.min.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
        <script type="text/javascript" src="scripts/calendar.js"></script>
        <link href="style/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="scripts/sidemenu/fancydropdown.js"></script><!-- cascading menu code       -->
        <link rel="stylesheet" href="scripts/sidemenu/fancydropdown.css"/>

        <script language="javascript" type="text/javascript">
            function clearText(field){
                if (field.defaultValue == field.value) field.value = '';
                else if (field.value == '') field.value = field.defaultValue;

            }
        </script>
    </head>
    <body>
        <div id="templatemo_background_section_top">
            <div class="templatemo_container">
                <div id="templatemo_header">
                    <div id="templatemo_logo">
                        <img src="images/logo.png" alt="SAILORS">
<!--                        <h1 style="margin-top: 30px; ">SAILORS</h1>-->

                    </div>
                    
                </div>
            </div><!--  End Of Header  -->
        </div><!--  End Of Container  -->

        </div><!--  End Of Back Ground Section Top  -->

        <div id="templatemo_background_section_middle">

            <div class="templatemo_container">

                <div id="templatemo_content_area">

                    <div id="templatemo_left">
                        <div class="templatemo_section">

                            <div class="templatemo_section_middle">
                                <div id="menu">
                                    <ul class="tabs">
                                        <li class="hasmore"><a href="admin.php"><span>HOME</span></a>
                                        <li class="hasmore"><a href="#"><span>USERS</span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Add New</a></li>
                                                <li><a href="#">View exiting users</a></li>
                                            </ul>
                                        </li>
                                        <li class="hasmore"><a href="#"><span>SUMMARY</span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Yesterday's summary</a></li>
                                                <li><a href="#">This month's summary</a></li>
                                            </ul>
                                        </li>
                                        <li class="hasmore"><a href="#"><span>BUSINESS UNITS</span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Restaurant</a></li>
                                                <li><a href="#">Bar</a></li>
                                                <li><a href="#">Butchery</a></li>
                                                <li><a href="#">Guest Houses</a></li>
                                            </ul>
                                        </li>
                                        <li class="hasmore"><a href="#"><span>PRODUCTS &amp; PRICES</span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Add new products</a></li>
                                                <li><a href="#">Change prices</a></li>
                                            </ul>
                                        </li>
                                        <li class="hasmore"><a href="#"><span>PRODUCTS &amp; PRICES</span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Add new products</a></li>
                                                <li><a href="#">Change prices</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>


                                <div class="cleaner_with_height">&nbsp;</div>
                            </div>

                            <div class="templatemo_section_bottom">
                            </div>
                        </div><!--  End Of Section-->


                    </div><!--  End Of Left-->

                    <div id="templatemo_right">
