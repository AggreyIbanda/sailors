<?php

require_once 'header.php';
?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#butchery").validationEngine();
    });
</script>
<div class="back"><a href="index.php" >&LT;&LT;&LT; Back to previous page</a></div>
<div class="lt"></div>
<div class="lbox">
    <form id="butchery" action="actions/butchery.php" enctype="multipart/form-data" method="post">
        <fieldset><legend>Butchery</legend>
            <div><label>Date:</label></div>
            <div><input onclick='scwShow(this,event);' id="bdate"  name="transactionDate" class="validate[required] wide" /></div>
            <div><label>Opening Stock(Kgs):</label></div>
            <div><input type="text" name="openingStock"  class="validate[required] wide" id="openingStock"/></div>
            <div><label>Purchased Kgs:</label></div>
            <div><input type="text" name="purchases" class="validate[required] wide" id="purchases"/></div>
            <div><label>Waste(Kgs):</label></div>
            <div><input type="text" name="waste"  class="validate[required] wide" id="waste"/></div>
            <div><label>Closing stock (Kgs):</label></div>
            <div><input type="text" name="closingStock" class="validate[required] wide" id="closingStock"/></div><br/>
            <div><input type="submit" value="Save" /> </div>
        </fieldset>
    </form>
</div>

<?php require_once 'footer.php'; ?>