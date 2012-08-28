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
<!--                        <img src="../images/home.png" alt="Rentals">-->
                        <h1>SAILORS</h1>

                        <h2>Catering for all your food and accommodation needs</h2>
                    </div>
                    <div id="templatemo_search_box">
                        <form method="post" action="index.html">
                            <label>Search:</label>
                            <input name="search" value="Search..." type="text" onfocus="clearText(this)" onblur="clearText(this)" />
                            <input class="button" type="submit" name="Search" value="GO"/>
                        </form>
                    </div>
                    <div id="templatemo_menu">
                        <div id="templatemo_menu_bg_l"></div>
                        <div id="templatemo_menu_bg_r">
                            <ul>
                                <?php if (isset($_SESSION['username'])) { ?>
                                <li><a href="index.php"><b>HOME</b></a></li>
                                <li><a href="bar.php"><b>BAR</b></a></li>
                                <li><a href="butchery.php"><b>BUTCHERY</b></a></li>
                                <li><a href="restaurant.php"><b>RESTAURANT</b></a></li>
                                <li><a href="accommodation.php"><b>ROOMS</b></a></li>
                                <li><a href="logout.php"><b>LOGOUT</b></a></li>
                                <?php } else{ ?>
                                <li><a href="login.php"><b>LOGIN</b></a></li>
                                <?php } ?>

                            </ul>
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
                            <div class="templatemo_section_top_pc">
                        	Sailors

                            </div>
                            <div class="templatemo_section_middle">
                                <p>Rentals brings landlords and tenants together, making it easy for users to search for rental houses
                                    at their comfort.</p>
                                <p>In addition, it enables landlords manage their plots, houses and tenants with ease.</p>
                                <p></p>
                                <p> For any assistance  <a href="#" style="color: #cccc00">Contact Admin here.</a> </p>
                                <p>While all effort is made to ensure that the site is safe and secure; incase of suspicious
                                    correspondence between you and another user you should contact admin.</p>
                                <p>Thank you for visiting our website we hope you will enjoy our services.</p>

                                <div class="cleaner_with_height">&nbsp;</div>
                            </div>

                            <div class="templatemo_section_bottom">
                            </div>
                        </div><!--  End Of Section-->


                    </div><!--  End Of Left-->

                    <div id="templatemo_right">
