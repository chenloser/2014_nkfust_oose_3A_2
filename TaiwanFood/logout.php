<?php
session_start();
header('Content-Type: text/html; charset=utf8');
unset($_SESSION['username']);
header("location:qqq.php");
?>