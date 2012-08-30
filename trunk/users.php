<?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
}
?>
<strong>The current users are:</strong><br/>
<?php
$sql = "SELECT * FROM login ORDER BY username ASC ";
$result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
$count=1;
while ($row = mysql_fetch_assoc($result)) {
    extract($row);
    echo "$count. $username<br/>";
    $count++;
} require_once 'footer.php';
?>
