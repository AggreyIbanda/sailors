<?php

session_start();
include 'connect.php';
$tbl_name = "login";
extract($_POST);

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if ($count == 1) {
    session_register("username");
    $_SESSION['username'] = $username;
    if ($username == Admin) {
        $_SESSION['type'] = "admin";
    } else {
        $_SESSION['type'] = "staff";
    }

    header("location:../index.php");
} else {
    header("location: ../login.php?status=wrong");
}
?>