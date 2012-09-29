<?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
$day = date("w"); //0=sunday, 1=monday e.t.c
$day = ((int) $day + 6) % 7; //0=monday, 1=tuesday e.t.c
$days_to_end = 6 - $day; //6=monday, 5=tuesday e.t.c
$date_start = date("Y-m-d", strtotime("-$day days"));
$date_end = date("Y-m-d", strtotime("+$days_to_end days"));
?>

<table>
    <!--   bar -->
    <tr><th colspan="4">Bar Sales This Week (From <?php echo $date_start; ?> to <?php echo $date_end; ?>)</th></tr>
    <tr><th>Date</th><th>total Sales(Ksh)</th><th>Total Cost(Ksh)</th><th>Profit</th></tr>
    <?php
    $sql = "SELECT * FROM bar where transactionDate >= '$date_start' and transactionDate <= '$date_end' order by id";
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
        <tr><th colspan="5">Butchery  Sales This Week (<?php echo $date_start; ?> to <?php echo $date_end; ?>)</th></tr>
        <tr><th>Date</th><th>Waste(Kg)</th><th>total Sales(Ksh)</th><th>Total Cost(Ksh)</th><th>Profit</th></tr>
    <?php
        $sql = "SELECT * FROM butchery where transactionDate >= '$date_start' and transactionDate <= '$date_end'   order by id";
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
        <tr><th colspan="4">Occupied Rooms  This Week (<?php echo $date_start; ?> to <?php echo $date_end; ?>)</th></tr>
        <tr><th>Date</th><th>Self Contained</th><th>Single</th><th>Total Revenue(Ksh)</th></tr>
    <?php
        $sql = "SELECT * FROM accommodation  where dateOccupied >= '$date_start' and dateOccupied <= '$date_end'    order by id";
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