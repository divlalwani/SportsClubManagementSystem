<?php

session_start();
if (isset ($_SESSION['myusername']))
{
	header("location:homepage.php");
}
else
{
	header("location:login.php");
}


?>