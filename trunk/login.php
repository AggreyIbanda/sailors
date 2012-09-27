<?php require_once 'header.php'; ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#login").validationEngine();
    });
</script>
<div class="lt"></div>
<div class="lbox">
    <form id="login" action="actions/login.php" enctype="multipart/form-data" method="post">
        <fieldset><legend>Login</legend>
            <?php
            if (isset($_GET['status'])) {
                $status = $_GET['status'];
                if ($status == "Admin") {
                    ?>
                    <div><label>Username:</label></div>
                    <div><input name="username"  readonly="readonly" class="validate[required] wide" id="username" value="Admin" /></div>
                    <div><label>Password:</label></div>
                    <div><input type="password" name="password" class="validate[required] wide" id="password"/></div><br/>
                <?php } else if ($status == "wrong"){ ?>
                    <p style="color: red">The password or Username entered is wrong</p>
                    <div><label>Username:</label></div>
                    <div><input type="text" name="username"  class="validate[required] wide" id="username" /></div>
                    <div><label>Password:</label></div>
                    <div><input type="password" name="password" class="validate[required] wide" id="password"/></div><br/>
                <?php }
            } else { ?>

                <div><label>Username:</label></div>
                <div><input type="text" name="username"  class="validate[required] wide" id="username" /></div>
                <div><label>Password:</label></div>
                <div><input type="password" name="password" class="validate[required] wide" id="password"/></div><br/>
<?php } ?>
            <div><input type="submit" value="Login" /> </div>
        </fieldset>
    </form>
</div>
<?php require_once 'footer.php'; ?>