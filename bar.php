<?php
require_once 'header.php';
include 'actions/connect.php';

//Displaying the table
$sql = "SELECT * FROM products WHERE businessUnit='bar' ";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if ($count >= 1) {
?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#bar").validationEngine();
    });
</script>
   
    <div class="back"><a href="index.php" >&LT;&LT;&LT; Back to previous page</a></div>

    <form action="actions/bar.php" id="bar" enctype="multipart/form-data" method="post">

        <table>


            <tr><th></th> <th>Opening Stock</th><th>Bottles Purchased</th><th>Closing stock</th></tr>

        <?php
        $count = 0;
        while ($row = mysql_fetch_assoc($result)) {
            extract($row);
        ?>
            <tr>
                <td><?php echo $product; ?><input type="hidden" value="<?php echo $id; ?>" name="product_id<?php echo $count; ?>"/></td>
                <td><input type="text" name="openingStock<?php echo $count; ?>" class="validate[required] wide" id="openingStock<?php echo $count; ?>"/></td>
                <td><input type="text" name="purchases<?php echo $count; ?>" class="validate[required] wide" id="purchases<?php echo $count; ?>"/></td>
                <td><input type="text" name="closingStock<?php echo $count; ?>" class="validate[required] wide" id="closingStock<?php echo $count; ?>"/> </td>
            </tr>

        <?php $count++;
        } ?>
        <tr><td>Date:</td><td colspan=""> <input onclick='scwShow(this,event);' id="barDate"  name="transactionDate" class="validate[required] wide"/></td><td colspan="2"></td></tr>
        <tr><td colspan="4"><input type="submit" value="Save" /></td></tr>
    </table>
</form>
<?php
    } else {
        echo "No products have been saved under bar";
    }
?>
<?php require_once 'footer.php'; ?>