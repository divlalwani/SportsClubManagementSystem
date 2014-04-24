<?php
include("connect.php");
session_start();
$user=$_SESSION['myusername'];
$cust=mysql_query("select * from customer where Email='".$_SESSION['myusername']."'");
$res=mysql_fetch_array($cust,MYSQL_BOTH);
$custid = $res['Cid'];


$parts = explode("|", $_POST['cancelbooking']);
$facilityname = $parts[0];
$date =  $parts[1];
$slot = $parts[2];

 mysql_query("UPDATE slots S, facility F, has H 
			SET H.Is_Avail = 0, H.Cid = NULL
			WHERE S.sid = H.sid AND F.fid = H.fid AND F.name = '$facilityname'  AND H.date = '$date' and S.Time = '$slot' and H.Cid = '$custid'");
			
header("location:services.php?bookmsg=Your Slot has been deleted Successfully");
?>