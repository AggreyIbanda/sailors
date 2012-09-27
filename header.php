<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>Sailors</title>
        <link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
        <meta name="keywords" content="sailors, food, accommodation, guest house, pub, bar, club, butchery" />
        <link href="style/style.css" rel="stylesheet" type="text/css" />
        <link type="text/css" href="css/blitzer/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
        <link href="css/validation/validationEngine.jquery.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/tooltip.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
        <script src="js/validation/jquery.validationEngine-en.js" type="text/javascript"></script>
        <script src="js/validation/jquery.validationEngine.js" type="text/javascript"></script>	
        <script src="js/tooltip.js" type="text/javascript"></script>	
        <script src="js/helper/functions.js" type="text/javascript"></script>
        <script type="text/javascript" src="scripts/tables/js/tableActions.js"> </script>
        <script type="text/javascript" src="scripts/calendar.js"></script>



        <!--<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />-->
        <link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
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

                    <div id="templatemo_menu">
                        <div id="templatemo_menu_bg_l"></div>
                        <div id="templatemo_menu_bg_r">

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
                            <div class="templatemo_section_top_pc"></div>
                            <div class="templatemo_section_middle">
                                <ul id="nav" class="dropdown dropdown-horizontal">

                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        if (isset($_SESSION['type'])) {
                                            $type = $_SESSION['type'];
                                            if ($type == 'admin') {
                                                ?>



                                                <li><a href="admin.php">Home</a></li>
                                                <li><a href="signup.php">New User</a></li>
                                                <li><a href="users.php">All Users</a></li>
                                                <li><a href="summary.php">Reports</a></li>
                                                <li><a href="products.php?product=new">New Product</a></li>
                                                <li><a href="products.php?product=view">View &frasl; Edit Products</a></li>


                                                <?php
                                            } else if ($type == 'staff') {
                                                ?>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="bar.php">Bar</a></li>
                                                <li><a href="butchery.php">Butchery</a></li>
                                                <li><a href="restaurant.php">Restaurant</a></li>
                                                <li><a href="accommodation.php?status=rooms">Room' Occupation</a></li>
                                                <li><a href="accommodation.php?status=cost">Rooms' Purchases</a></li>

                                                <?php
                                            }
                                        }
                                        ?>
                                        <li><a href="logout.php">Logout</a></li>
                                        <?php
                                    } else {
                                        ?>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="login.php?status=Admin">Admin</a></li>
                                    <?php } ?>
                                </ul>

                                <div class="cleaner_with_height">&nbsp;</div>
                            </div>

                            <div class="templatemo_section_bottom">
                            </div>
                        </div><!--  End Of Section-->


                    </div><!--  End Of Left-->

                    <div id="templatemo_right">






