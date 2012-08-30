<?php session_start();
include 'connect.php';
$tbl_name = "login";
extract($_POST);
$queryuser = mysql_query("SELECT * FROM login WHERE username='$username' ");
$checkuser = mysql_num_rows($queryuser);
if ($checkuser != 0) {
    header("location:../signup.php?status=wrongu");
} else {
    if ($password != $confirm_password) {
        header("location:../signup.php?status=wrongp");
    } else {
        $insert_user = mysql_query("INSERT INTO login (username, password) VALUES ('$username', '$password')");
        if ($insert_user==True) {
            header("location:../users.php?status=saved");
        } else {
//            echo "error in registration" . mysql_error();
            header("location:../signup.php?status=wrong");
        }
    }
}
?>