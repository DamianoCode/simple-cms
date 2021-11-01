<?php
session_start();
 
$past = 60 * 60 * 24 * 365 * 10;

$_SESSION = array();

session_unset();

session_destroy();

session_regenerate_id(true);

header("location: login.php");

?>