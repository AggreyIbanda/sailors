<?php
require_once 'header.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
}
?>
<div><a href="#" >Yesterday's Report</a></div>
<div><a href="#">This Month's Report</a></div>
<div><a href="#">Record New Rooms and Room Types</a></div>
<div><a href="#">Record New Products</a></div>
<div><a href="signup.php">Add New User</a></div>
<div><a href="#">Change Buying/Selling Price</a></div>



<?php require_once 'footer.php'; ?>