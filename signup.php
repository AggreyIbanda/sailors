<?php include_once 'header.php';?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("form#signup").validate();
    });

</script>
<?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "wrong") {
?>
        <strong class="error">Registration was not successful!</strong>
<?php } else if ($status == "wrongu") {?>
        <strong class="error">Username has already being taken!</strong>
<?php } else if ($status == "wrongp") {?>
        <strong class="error">Your passwords don't match!</strong>
<?php }}
?>

<div class="lt"></div>
<div class="lbox">
    <form id="signup" action="actions/signup.php" enctype="multipart/form-data" method="post">
        <fieldset><legend> New User</legend>
            <div><label>Username:</label></div>
            <div><input type="text" name="username" class="required"/></div><br/>
            <div><label>Password:</label></div>
            <div><input type="password" name="password" class="required"/></div><br/>
            <div><label>Re-enter Password:</label></div>
            <div><input type="password" name="confirm_password" class="required"/></div><br/>
            <div><input type="submit" value="Save" /> </div>
        </fieldset>
    </form>
</div>
<?php include_once('footer.php'); ?>