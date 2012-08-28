<?php
session_start();
session_destroy();

//clear session from globals
$_SESSION = array();

//clear session from disk
if ( isset( $_COOKIE[session_name()] ) ){
	setcookie(session_name(), "", time()-3600, "/" );
}
header("location: login.php?status=logout");