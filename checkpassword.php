<?php
session_start();
if(!isset($_SESSION['myusername']))
	header('location:login.php');
	
include("connect.php");
$oldpwd=md5($_POST['oldpwd']);
$newpwd=md5($_POST['newpwd']);
$password=$_SESSION['mypassword'];
if($password==$oldpwd)
{
mysql_query("update Customer set Password='".$newpwd."' where Email='".$_SESSION[myusername]."'");
header("location:changepassword.php?pwdmsg=Your Password Has Been Changed Successfully");
}
else
header("location:changepassword.php?pwdmsg=Your Old Passsword Does Not Match");

?>