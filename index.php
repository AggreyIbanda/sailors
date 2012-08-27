<?php
require_once 'header.php'; 
$username=$_SESSION['username'];
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "saved") {
?>
        <p class="notification">Details Saved Successfully</p>
<?php }}?>
        <p>
<a href="signup.php"><img alt="Add new User" height="128px" width="128px" title="Add New User"src="images/user.png" class="icons"/></a>
        </p><p>
<a href="bar.php"><img alt="Bar" height="128px" width="128px" title="Record Bar Transactions"src="images/bar.png" class="icons"/></a>
        </p>

<?php require_once 'footer.php';?>