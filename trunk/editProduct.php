<?php
include 'actions/connect.php';
//$username = $_SESSION['username'];
$tid = $_GET['id'];
$query = "SELECT * FROM products WHERE id='$tid'";
//var_dump($query);
$result = mysql_query($query) or die("Error executing '$query':" . mysql_error());
while ($row = mysql_fetch_assoc($result)) {
    extract($row);
}
?>

    <form action="?update=1&id=<?php echo $tid; ?> " method="POST">

        <div>Product Name</div>
        <div><input type="text" name="product" value="<?php echo $product; ?>"/></div>


        <div>Buying Price</div>
        <div><input type="text" name="buyingPrice" value="<?php echo $buyingPrice; ?>"/></div>


        <div>Selling Price</div>
        <div><input type="text" name="sellingPrice" value="<?php echo $sellingPrice; ?>"/></div>


        <div>Business Unit</div>
        <div>
            <input type="text" name="businessUnit" value="<?php echo $businessUnit; ?>"/>
        </div>
        <div><input type="submit" value='Update'/></div>

    </form>