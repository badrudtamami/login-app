<?php
session_start();

//logout session
$_SESSION = [];
unset($_SESSION);
session_destroy();
header("location: login.php");
exit;