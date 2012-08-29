<?php

session_start();
include 'connect.php';
$tbl_name = "bar";

$count = 0;
$success_count = 0;
$failure_count = 0;
$transactionDate = $_POST["transactionDate"];
while ($count < count($_POST) / 4-1) {
    $product_id = $_POST["product_id$count"];
    $openingStock = $_POST["openingStock$count"];
    $purchases = $_POST["purchases$count"];
    $closingStock = $_POST["closingStock$count"];
//    calculating the total number of units sold
    $unitsSold = intval($openingStock) + intval($purchases) - intval($closingStock);
//    clalculating total sales per item
    $sql = "SELECT  sellingPrice FROM products WHERE id='$product_id' ";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
    extract($row);
    $sellingPrice=$sellingPrice;
    $totalSales = $unitsSold * intval($sellingPrice);
//saving all the details to the database
    $query = "INSERT INTO $tbl_name (product,openingStock, purchases , closingStock,unitsSold,totalSales,transactionDate)
                        VALUES ('$product_id','$openingStock', '$purchases', '$closingStock','$unitsSold','$totalSales','$transactionDate')";
    if (mysql_query($query)) {
        $success_count++;
    } else {
        $failure_count++;
    }
    $count++;
}
header("location: ../index.php?success=$success_count&failures=$failure_count");
?>