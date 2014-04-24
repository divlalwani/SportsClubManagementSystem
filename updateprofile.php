<?php
include("connect.php");
session_start();

if(!isset($_SESSION['myusername']))
{
	header('location:login.php');
}
mysql_query("update customer set FName='".$_POST[fnm]."',LName='".$_POST[lnm]."',Apt_No='".$_POST[apt]."',Street='".$_POST[street]."',State='".$_POST[state]."',City='".$_POST[city]."',Zip='".$_POST[zip]."',Dob='".$_POST[dob]."',Gender='".$_POST[gender]."',Ph_No='".$_POST[ph_no]."' where Email='$_SESSION[myusername]'");

header('location:profile.php?msg=Your Profile Has Been Updated');
?>
