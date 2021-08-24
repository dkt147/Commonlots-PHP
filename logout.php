<?php
ob_start();
session_start();

unset($_SESSION['name']);

session_destroy();
header("Location: http://www.commonlots.net/login.php");
ob_flush();