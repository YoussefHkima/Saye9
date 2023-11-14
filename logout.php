<?php
session_start();
session_unset();
session_destroy();
header("location:/Saye9/css3/login.php");
die;
?>