<?php
include("connect.php");
session_start();
$start_date=$_POST['new_start_date'];
$end_date=$_POST['new_end_date'];

mysql_query("update customer set Start_date='".$start_date."', End_date='".$end_date."' where Email='$_SESSION[myusername]'");

header("location:profile.php?renewmsg=Your Membership Has Been Renewed");
?>
 