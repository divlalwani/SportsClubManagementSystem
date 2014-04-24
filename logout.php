<?php

session_start();
session_destroy();
unset($_SESSION['myusername']);
header('location: login.php');
?>
