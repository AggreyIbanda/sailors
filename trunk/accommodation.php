<?php
require_once 'header.php';
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "rooms") {
?>
        <!--record occupied rooms-->
<?php
        include 'actions/connect.php';
        $sql = "SELECT roomNumber FROM rooms ORDER BY roomNumber";
        $result = mysql_query($sql);
        $count = mysql_num_rows($result);
        if ($count >= 1) {
?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("form#accom").validate();
                });
            </script>
        <strong style="color: #1aa3e8; margin: 0px 0px 20px 30px; text-transform: capitalize">Check the occupied rooms</strong><br/>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="accom" enctype="multipart/form-data">

    <?php
            $count = 0;
            while ($row = mysql_fetch_assoc($result)) {
                extract($row);
    ?>
                <p style="text-transform: uppercase; margin: 3px 5px 3px 30px;">   <input type="checkbox" name="<?php echo $roomNumber; ?>" value="<?php echo $roomNumber; ?>"/><strong style="padding-left: 10px">Room <?php echo $roomNumber; ?></strong></p>

    <?php $count++;
            } ?>
                <div style="text-align: center"><input type="submit" value="Save" /></div>
        </form>
<?php
        } else {
            echo "No products have been saved under bar";
        }
?>
        <!--end of recording rooms occupancy-->

<?php } else if ($status == "cost") {
?>
        <!--record purchased items for rooms-->

        <!--End of recording rooms purchases and other costs-->

<?php
    }
} else {
?>
    <p style="margin: 100px 100px 100px 250px;"><a href="?status=rooms" >Record Room Occupation</a></p>
    <p style="margin: 100px 100px 100px 250px;"><a href="?status=cost">Record Items Purchased</a></p>
<?php } ?>

<?php require_once 'footer.php'; ?>