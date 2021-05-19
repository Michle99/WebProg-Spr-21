<?php session_start(); /* Starts the session */
unset($_SESSION["username"]);
unset($_SESSION["password"]); /* Destroy started session */
header("location:index.php");
exit;
?>
