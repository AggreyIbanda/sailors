<?php
session_start();
include 'connect.php';
$tbl_name = "products";
extract($_POST);
$query = "INSERT INTO $tbl_name (product,buyingPrice, sellingPrice , businessUnit)
                     VALUES ('$product','$buyingPrice', '$sellingPrice', '$businessUnit')";
$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());
header("location: ../products.php?status=saved&product=view");
?>