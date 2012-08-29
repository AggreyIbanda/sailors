<?php
session_start();
include 'connect.php';
extract($_POST);
$query = "INSERT INTO roomcosts (product,amount, datePurchased )
                        VALUES ('$product','$amount', '$datePurchased')";
$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());
header("location: ../accommodation.php?status=cost&condition=saved");
//var_dump($query);
?>