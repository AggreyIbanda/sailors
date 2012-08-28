<?php
require_once 'header.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "wrong") {
?>

        <strong class="error">Something went wrong so your details have not been saved!</strong><br/>
<?php } else if ($status == "saved") {?>
        <strong class="notification">Details have been recorded successfully!</strong><br/>
<?php } }
?>

<a href="signup.php" ><img alt="Add new User"  height="128px" width="128px" title="Add New User"src="images/user.png" /></a>
<a href="bar.php"><img alt="Bar" height="128px" width="128px" title="Record Bar Transactions"src="images/bar.png" /></a>
<a href="accommodation.php"><img alt="Add new User" height="128px" width="128px" title="Rooms Transactions"src="images/rooms.jpg" /></a>
<a href="restaurant.php"><img alt="Bar" height="128px" width="128px" title="Record Restaurant Transactions"src="images/restaurant.jpg" /></a>
<a href="butchery.php"><img alt="Bar" height="128px" width="128px" title="Record Butchery Transactions"src="images/butchery.JPG" /></a>


<?php require_once 'footer.php'; ?>
