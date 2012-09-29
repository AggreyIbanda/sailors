<?php
require_once 'header.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
}
?>
<div><a href="summary_today.php" >Todays's Report</a></div>
<div><a href="summary_yest.php" >Yesterday's Report</a></div>
<div><a href="summary_last_week.php">This Weeks's Report</a></div>
<div><a href="summary_last_month.php">This Month's Report</a></div>
<div><a href="#">Record New Rooms and Room Types</a></div>
<div><a href="#">Record New Products</a></div>
<div><a href="signup.php">Add New User</a></div>
<div><a href="#">Change Buying/Selling Price</a></div>



<?php require_once 'footer.php'; ?>