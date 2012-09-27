<?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>

<table>
    <!--   bar -->
    <tr><th colspan="4">Bar</th></tr>
    <tr><th>Date</th><th>total Sales(Ksh)</th><th>Total Cost(Ksh)</th><th>Profit</th></tr>
    <?php
    $sql = "SELECT * FROM bar order by transactionDate desc";
    $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
        extract($row);
        ?>
        <tr style="text-transform: capitalize">
            <td><?php echo "$transactionDate"; ?></td>
            <td><?php echo "$totalCost"; ?></td>
            <td><?php echo "$totalSales"; ?></td>
            <td>
                <?php
                $profit = intval($totalSales) - intval($totalCost);
                echo "$profit";
                ?>
            </td>
        </tr>
    <?php } ?>
</table>
<table>
    <!-- butchery       -->
    <tr><th colspan="5">Butchery</th></tr>
    <tr><th>Date</th><th>Waste(Kg)</th><th>total Sales(Ksh)</th><th>Total Cost(Ksh)</th><th>Profit</th></tr>
    <?php
    $sql = "SELECT * FROM butchery order by transactionDate desc";
    $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
        extract($row);
        ?>
        <tr style="text-transform: capitalize">
            <td><?php echo "$transactionDate"; ?></td>
            <td><?php echo "$waste"; ?></td>
            <td><?php echo "$totalCost"; ?></td>
            <td><?php echo "$totalSales"; ?></td>
            <td>
                <?php
                $profit = intval($totalSales) - intval($totalCost);
                echo "$profit";
                ?>
            </td>
        </tr>
    <?php } ?>
</table>
<table>
    <!--    rooms    -->
    <tr><th colspan="4">Occupied Rooms</th></tr>
    <tr><th>Date</th><th>Self Contained</th><th>Single</th><th>Total Revenue(Ksh)</th></tr>
    <?php
    $sql = "SELECT * FROM accommodation order by dateOccupied desc";
    $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
    $single = 0;
    $self = 0;
    while ($row = mysql_fetch_assoc($result)) {
        extract($row);
        $sql2 = "SELECT * FROM rooms where roomNumber='$roomN0'";
        $result2 = mysql_query($sql2) or die("Error executing '$sql2':" . mysql_error());
        $row2 = mysql_fetch_assoc($result2);
        extract($row2);
        if ($roomType == '1') {
            $single++;
        } else if ($roomType == '2') {
            $self++;
        }
        ?>
        <tr style="text-transform: capitalize">
            <td><?php echo "$dateOccupied"; ?></td>
            <td><?php echo "$single"; ?></td>
            <td><?php echo "$self"; ?></td>
            <td>
                <?php
                $totalSales = $single * 400 + $self * 600;
                echo "$totalSales";
                ?>
            </td>

        </tr>
    <?php } ?>

</table> 
<?php require_once 'footer.php'; ?>