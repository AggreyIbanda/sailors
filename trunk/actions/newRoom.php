<?php
session_start();
include 'connect.php';
$tbl_name = "rooms";
extract($_POST);
$query = "INSERT INTO $tbl_name (roomNumber,roomType)
                        VALUES ('$roomNumber','$roomType')";
//$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());

if (mysql_query($query) == true) {
    header("location: ../roomDetails.php?status=saved&need=new");
} else {
    header("location: ../restaurant.php?status=wrong");
}
?>