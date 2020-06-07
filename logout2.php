<?php
session_start();
$session=array();
session_unset();
session_destroy();

//echo 'Thanks.....You have been logged out.';

header('location:Main.php');
?>
