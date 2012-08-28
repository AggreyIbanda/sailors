<?php
session_start();
include 'connect.php';
$tbl_name = "restaurant";
extract($_POST);
$query = "INSERT INTO $tbl_name (dateRecieved,amountRecieved)
                        VALUES ('$dateRecieved','$amountRecieved')";
//$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());

if (mysql_query($query) == true) {
    header("location: ../index.php?status=saved");
} else {
    header("location: ../restaurant.php?status=wrong");
}
?>