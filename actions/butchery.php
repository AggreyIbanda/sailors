<?php
session_start();
include 'connect.php';
$tbl_name = "butchery";
extract($_POST);
//calculate amount sold
$amountSold = intval($openingStock) + intval($purchases) - intval($closingStock) - intval($waste);
//calculate total sales
$sql = "SELECT  * FROM products WHERE product='meat' ";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
extract($row);
$sellingPrice = $sellingPrice;
$buyingPrice = $buyingPrice;
$totalSales = $amountSold * intval($sellingPrice);
$totalCost=$amountSold * intval($buyingPrice)+intval($waste)*intval($buyingPrice);
//insert details in db
$query = "INSERT INTO $tbl_name (openingStock,purchases, waste , closingStock,amountSold,totalSales,transactionDate,totalCost)
                        VALUES ('$openingStock','$purchases', '$waste', '$closingStock','$amountSold','$totalSales','$transactionDate','$totalCost')";
$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());
header("location: ../index.php?status=saved");
?>