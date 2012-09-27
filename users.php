<?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
}
if (isset($_GET['user'])) {
    $user = $_GET['user'];
}
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "saved") {
        ?>
<strong class="notification"><?php echo "<font color=red>$user  </font>";?> has been added as a user!</strong><br/>
        <?php
    }
}
?>
<table>
    <tr><th rowspan="2"></th><th colspan="3">The current users</th></tr>
    <tr><th>Names</th><th>National Id</th><th>Username</th></tr>
    <?php
    $sql = "SELECT * FROM login ORDER BY username ASC ";
    $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
    $count = 1;
    while ($row = mysql_fetch_assoc($result)) {
        extract($row);
        ?>
        <tr><td><?php echo "$count"; ?></td><td style="text-transform: capitalize"><?php echo "$names"; ?></td><td><?php echo "$nationalId"; ?></td><td><?php echo "$username"; ?></td></tr>
        <?php $count++;
    } ?>
</table> 
<?php require_once 'footer.php'; ?>
