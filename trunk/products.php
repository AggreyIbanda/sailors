<?php
require_once 'header.php';
include 'actions/connect.php';
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == "saved") {
            echo "<strong><font color=green>Successfully saved</font></strong><br/>";
        }
    }
}
if (isset($_GET['product'])) {
    $product = $_GET['product'];
    if ($product == "view") {
        ?>

        <a href="products.php?product=new">Add new product</a>
        <table>
            <tr><th></th><th>Product</th><th>Buying Price(Ksh)</th><th>Selling Price(Ksh)</th><th>Business Unit</th><th></th></tr>
            <?php
            $sql = "SELECT * FROM products ORDER BY product ASC ";
            $result = mysql_query($sql) or die("Error executing '$sql':" . mysql_error());
            $count = 1;
            while ($row = mysql_fetch_assoc($result)) {
                extract($row);
                ?>
                <tr style="text-transform: capitalize">
                    <td><?php echo "$count"; ?></td>
                    <td><?php echo "$product"; ?></td>
                    <td><?php echo "$buyingPrice"; ?></td>
                    <td><?php echo "$sellingPrice"; ?></td>
                    <td><?php echo "$businessUnit"; ?></td>
                    <td><a href="#">Edit</a></td>
                </tr>
                <?php $count++;
            } ?>
        </table> 
        <?php
    } else if ($product == 'new') {
        ?>
        <script type="text/javascript">    
            jQuery.noConflict();
            $(document).ready(function() {
                $("form#products").validate();
            });
        </script>
        <a href="products.php?product=new">View Existing Products</a>
        <div class="lt"></div>
        <div class="lbox">
            <form action="actions/products.php" id="products" enctype="multipart/form-data" method="post">
                <fieldset><legend>New Product</legend>
                    <div><label>Product Name:</label></div>
                    <div><input type="text" name="product"  class="required"/></div>
                    <div><label>Buying Price:</label></div>
                    <div><input type="text" name="buyingPrice" class="required"/></div><br/>
                    <div><label>Selling Price:</label></div>
                    <div><input type="text" name="sellingPrice" class="required"/></div><br/>
                    <div><label>Business Unit:</label></div>
                    <div><select name="businessUnit">
                            <option value="bar">Bar</option>
                            <option value="butchery">Butchery</option>
                            <option value="rooms">Rooms</option>
                            <option value="all">All units</option>
                        </select>
                    </div><br/>
                    <div><input type="submit" value="Save" /> </div>
                </fieldset>
            </form>
        </div>

    <?php
    }
}
require_once 'footer.php';
?>