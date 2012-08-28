<?php
session_start();
include 'connect.php';
$tbl_name = "butchery";
extract($_POST);
$query = "INSERT INTO $tbl_name (openingStock,purchases, waste , closingStock)
                        VALUES ('$openingStock','$purchases', '$waste', '$closingStock')";
//$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());

if (mysql_query($query) == true) {
    header("location: ../index.php?status=saved");
} else {
    header("location: ../butchery.php?status=wrong");
}
?>