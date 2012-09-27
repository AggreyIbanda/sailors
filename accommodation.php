<?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_GET['success'])) {
    extract($_GET);
    echo "<strong><font color=green>Successfully saved $success , and $failures records failed</font></strong><br/>";
}
if (isset($_GET['condition'])) {
    $condition = $_GET['condition'];
    if ($condition == "saved") {
        echo "<strong><font color=green>Details have been saved successfully</font></strong><br/>";
    }
}

if (isset($_GET['save']) && isset($_POST['occupied_rooms'])) {
    $dateOccupied = $_POST["dateOccupied"];
    foreach ($_POST['occupied_rooms'] as $roomNo) {
        //get the roomtype
        $sql = "SELECT  roomType FROM rooms WHERE roomNumber='$roomNo' "; //get room type
        $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
        $row = mysql_fetch_assoc($result);
        extract($row);
        $roomType = $roomType;
        //get amount for that room
        $sql2 = "SELECT  amountPerNight FROM roomtypes WHERE id='$roomType' "; //get room type
        $result2 = mysql_query($sql2) or die("Error executing '$sql2':" . mysql_error());
        $row2 = mysql_fetch_assoc($result2);
        extract($row2);
        $amountRecieved = $amountPerNight;

        //save rooms occupancy in db
        $query = "INSERT INTO accommodation (roomN0,dateOccupied, amountRecieved )
                                VALUES ('$roomNo','$dateOccupied', '$amountRecieved')";
        $result = mysql_query($query) or die("Error executing '$query':" . mysql_error());
        header("location: ?condition=saved");
    }
}

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
                jQuery(document).ready(function(){
                    jQuery("#accom").validationEngine();
                });
            </script>
            <div class="back"><a href="?" >&LT;&LT;&LT; Back to previous page</a></div>
            <div class="lt"></div>
            <div class="lbox">
                <form action="?save=1" method="POST" id="accom" enctype="multipart/form-data">
                    <strong style="color: #1aa3e8; margin: 0px 0px 20px 30px;">Date:     <input onclick='scwShow(this,event);' id="accomdate"  name="dateOccupied" class="validate[required] wide" /></strong><br/>
                    <strong style="color: #1aa3e8; margin: 0px 0px 20px 30px; text-transform: capitalize">Check the occupied rooms</strong><br/>

                    <?php
                    $count = 0;
                    while ($row = mysql_fetch_assoc($result)) {
                        extract($row);
                        ?>
                        <p style="text-transform: uppercase; margin: 3px 5px 3px 30px;">   <input type="checkbox" name="occupied_rooms[]" value="<?php echo $roomNumber; ?>"/><strong style="padding-left: 10px">Room <?php echo $roomNumber; ?></strong></p>

                        <?php $count++;
                    } ?>
                    <div style="text-align: center"><input type="submit" value="Save" /></div>
                </form></div>
            <?php
        } else {
            echo "No rooms available";
        }
        ?>
        <!--end of recording rooms occupancy-->

    <?php } else if ($status == "cost") { ?>
        <!--record purchased items for rooms-->
        <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#rooms").validationEngine();
    });
</script>
        <div class="back"><a href="?" >&LT;&LT;&LT; Back to previous page</a></div>
        <div class="lt"></div>
        <div class="lbox">
            <form id="rooms" action="actions/accommodation.php" enctype="multipart/form-data" method="post">
                <fieldset><legend>Rooms' Costs</legend>

                    <div><label>Product:</label>
                        <!--  select products and show them as drop down                  -->
                        <select name="product" title="Select Product">

                            <?php
                            $sql = "SELECT * FROM products WHERE businessUnit='rooms' ";
                            $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
                            while ($row = mysql_fetch_assoc($result)) {
                                extract($row);
                                ?>

                                <option value="<?php echo "$id" ?>" ><?php echo "$product"; ?></option>
                            <?php } ?>
                        </select></div>
                    <input value="<?php echo "$buyingPrice"; ?>" name="amount" type="hidden"/>
                    <div><label>Number Of Items:</label></div>
                    <div><input name="noOfItems"  type="text" class="validate[required] wide" id="noOfItems"/></div>
                    <div><label>Date of Purchase:</label></div>
                    <div><input onclick='scwShow(this,event);' id="bedate"  name="datePurchased" class="validate[required] wide" /></div>

                    <div><input type="submit" value="Save" /> </div>
                </fieldset>
            </form>
        </div>

        <!--End of recording rooms purchases and other costs-->

        <?php
    }
} else {//dissplay these links
    ?>
    <div class="back"><a href="index.php" >&LT;&LT;&LT; Back</a></div>
    <p style="margin: 100px 100px 100px 250px;"><a href="?status=rooms" >Record Room Occupation</a></p>
    <p style="margin: 100px 100px 100px 250px;"><a href="?status=cost">Record Items Purchased</a></p>
<?php } ?>

<?php require_once 'footer.php'; ?>