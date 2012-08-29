<?php

require_once 'header.php';
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("form#butchery").validate();
    });
</script>
<div class="back"><a href="index.php" >&LT;&LT;&LT; Back to previous page</a></div>
<div class="lt"></div>
<div class="lbox">
    <form id="butchery" action="actions/butchery.php" enctype="multipart/form-data" method="post">
        <fieldset><legend>Butchery</legend>
            <div><label>Date:</label></div>
            <div><input onclick='scwShow(this,event);' id="bdate"  name="transactionDate" class="required"/></div>
            <div><label>Opening Stock(Kgs):</label></div>
            <div><input type="text" name="openingStock"  class="required"/></div>
            <div><label>Purchased Kgs:</label></div>
            <div><input type="text" name="purchases" class="required"/></div>
            <div><label>Waste(Kgs):</label></div>
            <div><input type="text" name="waste"  class="required"/></div>
            <div><label>Closing stock (Kgs):</label></div>
            <div><input type="text" name="closingStock" class="required"/></div><br/>
            <div><input type="submit" value="Save" /> </div>
        </fieldset>
    </form>
</div>

<?php require_once 'footer.php'; ?>