<?php
include("connect.php");
session_start();
$upgradetype=$_POST['upgradetype'];
echo $upgradetype;
echo $_SESSION['myusername'];

$res1=mysql_query("select Tid from membership where  Description='$upgradetype'");
$array1=mysql_fetch_array($res1);
$tid=$array1[0];

$res=mysql_query("select Cid from customer where Email='$_SESSION[myusername]'");
$array=mysql_fetch_array($res);
$cid=$array[0];

mysql_query("update pays set tid = '$tid' where cid='$cid'");

header("location:profile.php?upgrademsg=Your Membership Type Has been Upgraded Successfully");
?>