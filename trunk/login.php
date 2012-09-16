<?php

require_once 'header.php';
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "logout") {
        ?>
        <strong class="error">You have logged out... You must be logged in to use the system!</strong>
    <?php } else if ($status == "Admin") {
        ?>
        <strong class="notification">You are about to login as the Admin of Sailors!</strong>
    <?php }
} ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("form#login").validate();
    });
</script>
<div class="lt"></div>
<div class="lbox">
    <form id="login" action="actions/login.php" enctype="multipart/form-data" method="post">
        <fieldset><legend>Login</legend>
            <div><label>Username:</label></div>
            <div><input type="text" name="username"  class="required"/></div>
            <div><label>Password:</label></div>
            <div><input type="password" name="password" class="required"/></div><br/>
            <div><input type="submit" value="Login" /> </div>
        </fieldset>
    </form>
</div>
<?php require_once 'footer.php'; ?>