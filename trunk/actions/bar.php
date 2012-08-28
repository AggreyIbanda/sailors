<?php

session_start();
include 'connect.php';
$tbl_name = "bar";

$count = 0;
$success_count = 0;
$failure_count = 0;
while ($count < count($_POST) / 4) {
    $product_id = $_POST["product_id$count"];
    $openingStock = $_POST["openingStock$count"];
    $purchases = $_POST["purchases$count"];
    $closingStock = $_POST["closingStock$count"];
    $query = "INSERT INTO $tbl_name (product,openingStock, purchases , closingStock)
                        VALUES ('$product_id','$openingStock', '$purchases', '$closingStock')";
    if (mysql_query($query)) {
        $success_count++;
    } else {
        $failure_count++;
    }
    $count++;
}
header("location: ../bar.php?success=$success_count&failures=$failure_count");
?>