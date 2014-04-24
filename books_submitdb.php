<?php
include("connect.php");
session_start();
$user=$_SESSION['myusername'];
$cust=mysql_query("select * from customer where Email='".$_SESSION['myusername']."'");
$res=mysql_fetch_array($cust,MYSQL_BOTH);
$custid = $res['Cid'];

$facilityname = $_POST["facilityname"];
$date =  $_POST["date"];
$slot = $_POST["slot"];
$query = "()";
$result = mysql_query("SELECT * FROM
					   slots S, facility F, has H 
					   WHERE S.sid = H.sid AND F.fid = H.fid AND F.name = '$facilityname'  AND H.date = '$date' and S.Time = '$slot'");
					   
if(mysql_num_rows($result) > 0) {
    mysql_query("UPDATE slots S, facility F, has H 
				SET H.Is_Avail = 1, H.Cid = '$custid'
				WHERE S.sid = H.sid AND F.fid = H.fid AND F.name = '$facilityname'  AND H.date = '$date' and S.Time = '$slot'");
}
else
{
	$fidrow = mysql_query("Select fid FROM facility WHERE name = '$facilityname'");
	$res1=mysql_fetch_array($fidrow,MYSQL_BOTH);
	$fid = $res1[0];
	
	$sidrow = mysql_query("Select sid FROM slots WHERE time = '$slot'");
	$res2=mysql_fetch_array($sidrow,MYSQL_BOTH);
	$sid = $res2[0];
	
	mysql_query("INSERT INTO has VALUES ('$date', '$custid', '$fid' , '$sid', '1')");
}
			  
	header("location:services.php?bookmsg=Your Slot has been added Successfully");
?>