<?php

session_start();
include 'connect.php';
$tbl_name = "bar";
extract($_POST);

$count=0;
while($count <= count($_POST)/4+1)
{
    $query = "INSERT INTO $tbl_name (product,openingStock, purchases , closingStock)
                        VALUES ('$product+$count','$openingStock+$count', '$purchases+$count', '$closingStock+$count')";
    $result = mysql_query($query) or die("Error executing '$query':" . mysql_error());
echo  var_dump($query);
    $count++;
}



if (mysql_query($query) == true) {
    header("location: ../bar.php?status=saved");
} else {
    header("location: ../bar.php?status=wrong");
}
?>