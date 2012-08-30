<script type="text/javascript">
    var myObject = {
        testMethod:function(details) {
            var total;
            // We are removing a row, always enable this action
            if(details.remove) {
                total = details.rows.length ? details.rows.length - 1 : 0;
                // We are adding a row
            } else {
                // Only if no TH tags located
                if(details.row.getElementsByTagName("th").length != 0) {
                    // return false to tell the script not to select this row
                    return false;
                };
                total = details.rows.length + 1;
            };
            document.getElementById('selectResults').innerHTML = total + " row" + (total != 1 ? "s" : "") + " currently selected";
            // Return TRUE or FALSE to tell the script to enable the ADD/REMOVE action
            return true;
        }
    };

</script><?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
}
if (isset($_GET['need'])) {
    $need = $_GET['need'];
    if ($need == "new") {

        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status == "saved") {
                echo "<strong><font color=green>The room has been added successfully!</font></strong><br/>";
            }
        }
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("form#nr").validate();
    });
</script>
<div class="back"><a href="?need=view" >&LT;&LT;&LT; See Existing Rooms</a></div>
<div class="lt"></div>
<div class="lbox">
    <form id="nr" action="actions/newRoom.php" enctype="multipart/form-data" method="post">
        <fieldset><legend>New Room</legend>
            <div><label>Room Number:</label></div>
            <div><input type="text" name="roomNumber"  class="required"/></div>
            <div><select name="roomType" class="required">Select Room type:
                    <option value="1">SINGLE</option>
                    <option value="2">SELF-CONTAINED</option>
                </select>
            </div>

            <div><input type="submit" value="Save" /> </div>
        </fieldset>
    </form>
</div>

<br/>
<?php
    } else if ($need == "view") {
        $sql = "SELECT * FROM rooms ORDER BY roomNumber ASC ";
        $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
        $count = 1;
?>
        <div class="back"><a href="?need=new" >&LT;&LT;&LT; Record New Room</a></div>
        <table id="rooms" class="rowstylealt-alt rowstylehover-rowHover colstylehover-rowHover rowselect-rowSelect rowselectcallback-myObject-testMethod cellhover-currentCell">
            <thead>
                <tr>
                    <th rowspan="2"></th>
                    <th rowspan="2" >Room Number</th>
                    <th rowspan="2">Room Type</th>
                    <th colspan="2">Operations</th>
                </tr>


                <tr>

                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
        <?php
        while ($row = mysql_fetch_assoc($result)) {
            extract($row);
            $sql1 = "SELECT roomType as rtype FROM roomtypes ";
            $result1 = mysql_query($sql1) or die("Error executing '$sql1':" . mysql_error());
            $row1 = mysql_fetch_assoc($result1);
            extract($row1);
            if ($roomType == '1') {
                $rtype = 'SINGLE';
            } else if ($roomType == '2') {
                $rtype = 'SELF-CONTAINED';
            }
        ?>

            <tr><td><?php echo "$count"; ?></td><td><?php echo "$roomNumber"; ?></td><td><?php echo "$rtype"; ?></td><td>Edit</td><td>Delete</td></tr>

            <!--    echo "$count. $roomNumber $type<br/>";-->
        <?php
            $count++;
        }
        ?>

    </tbody>
</table>

<?php }
}require_once 'footer.php'; ?>
