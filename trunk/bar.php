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
        $(document).ready(function() {
            $("form#bar").validate();
        });
    </script>
<?php
    if (isset($_GET['success'])) {
        extract($_GET);
        echo "<strong><font color=green>Successfully saved $success , and $failures records failed</font></strong>";
    }
?>

    <form action="actions/bar.php" id="bar" enctype="multipart/form-data" method="post">
        <table>
            <tr><th></th> <th>Opening Stock</th><th>Bottles Purchased</th><th>Closing stock</th></tr>

        <?php
        $count = 0;
        while ($row = mysql_fetch_assoc($result)) {
            extract($row);
        ?>
            <tr>
                <td><?php echo $product; ?><input type="hidden" value="<?php echo $id; ?>"name="product_id<?php echo $count; ?>"/></td>
                <td><input type="text" name="openingStock<?php echo $count; ?>" class="required"/></td>
                <td><input type="text" name="purchases<?php echo $count; ?>" class="required"/></td>
                <td><input type="text" name="closingStock<?php echo $count; ?>" class="required"/> </td>
            </tr>

        <?php $count++;
        } ?>
        <tr><td></td><td></td><td></td><td><input type="submit" value="Save" /></td></tr>
    </table>
</form>
<?php
    } else {
        echo "No products have been saved under bar";
    }
?>
<?php require_once 'footer.php'; ?>