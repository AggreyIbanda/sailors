<?php require_once 'header.php';?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("form#restaurant").validate();
        });
    </script>
<form action="actions/restaurant.php" id="restaurant" enctype="multipart/form-data" method="post">
        <div class="lt"></div>
<div class="lbox">
    <form id="login" action="actions/login.php" enctype="multipart/form-data" method="post">
    <fieldset><legend>Food details</legend>
    <div><label>Amount recieved(Ksh):</label></div>
    <div><input type="text" name="amountRecieved"  class="required"/></div>
    <div><label>Date:</label></div>
<!--    <div><input onMouseOver="scwShow(this,event);" class="required"/></div><br/>-->
    <div><input onclick='scwShow(this,event);' id="datepickker"  class="required"/></div><br/>
    <div><input type="submit" value="Save Details" /> </div>
    </fieldset>
</form>
<?php require_once 'footer.php'; ?>