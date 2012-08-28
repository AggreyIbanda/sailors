<?php require_once 'header.php';
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "wrong") {
?>
        <strong class="error">Something went wrong so your details have not been saved!</strong>
<?php } else if ($status == "saved") {?>
        <strong class="notification">Details have been recorded successfully!</strong>
<?php } }
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("form#restaurant").validate();
    });
</script>

<div class="lt"></div>
<div class="lbox">
    <form action="actions/restaurant.php" id="restaurant" enctype="multipart/form-data" method="post">
        <fieldset><legend>Food details</legend>
            <div><label>Amount recieved(Ksh):</label></div>
            <div><input type="text" name="amountRecieved"  class="required"/></div>
            <div><label>Date:</label></div>
            <div><input onclick='scwShow(this,event);' id="datepickker"  name="dateRecieved" class="required"/></div><br/>
            <div><input type="submit" value="Save Details" /> </div>
        </fieldset>
    </form>
</div>

<?php require_once 'footer.php'; ?>