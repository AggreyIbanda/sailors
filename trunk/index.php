<?php
require_once 'header.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    if (isset($_GET['success'])) {
        extract($_GET);
        echo "<strong><font color=green>Successfully saved $success , and $failures records failed</font></strong><br/>";
    }
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == "wrong") {
?>

            <strong class="error">Something went wrong so your details have not been saved!</strong><br/>
<?php } else if ($status == "saved") {
?>
            <strong class="notification">Details have been recorded successfully!</strong><br/>
<?php }
    } ?>


    <a href="signup.php" ><img alt="Add new User"  height="128px" width="128px" title="Add New User"src="images/user.png" /></a>
    <a href="bar.php"><img alt="Bar" height="128px" width="128px" title="Record Bar Transactions"src="images/bar.png" /></a>
    <a href="accommodation.php"><img alt="Add new User" height="128px" width="128px" title="Rooms Transactions"src="images/rooms.jpg" /></a>
    <a href="restaurant.php"><img alt="Bar" height="128px" width="128px" title="Record Restaurant Transactions"src="images/restaurant.jpg" /></a>
    <a href="butchery.php"><img alt="Bar" height="128px" width="128px" title="Record Butchery Transactions"src="images/butchery.JPG" /></a>
<?php
} else {
?>
    <p>Sailors is a private business suited in Mlolongo, along Nairobi-Mombasa highway. The business provides its esteemed customers with the following services
        : </p>
    <p>
        Sailors provides high class fresh and delicious delicacy that leaves with the desire to lick your hands.
        Available meals include nyama choma, Ugali, Kachumbari and much more!
        <a href="restaurant.php"><img alt="Bar" height="128px" width="128px" title="Restaurant"src="images/restaurant.jpg" /></a>
    </p><p>
        Are you looking for a place to spent your night? Sailors guest houses are affordable and
        at a quiet environment where you can relax and enjoy your time. The houses also have hot water and much more to make your visit fun and enjoyable
        <a href="accommodation.php"><img alt="Add new User" height="128px" width="128px" title="Guest Houses"src="images/rooms.jpg" /></a><td>
    </p>

    <p>Ukitaka kuburudika !<a href="bar.php"><img alt="Bar" height="128px" width="128px" title="Pub"src="images/bar.png" /></a>And for meat... we have a butchery with fresh
        clean and soft  healthy meat. All are welcome!
        <a href="butchery.php"><img alt="Bar" height="128px" width="128px" title="Butchery"src="images/butchery.JPG" /></a>

    </p>


<?php }
require_once 'footer.php'; ?>
