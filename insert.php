<?php
include_once('connect.php');
session_start();
$res=mysql_query("select * from customer where Email='".$_POST[email]."'",$con);

$tid = $_POST['type'];
if(mysql_num_rows($res)==0)
{
mysql_query("insert into customer(FName,LName,Apt_No,Street,State,City,Zip,Start_date,End_date,Dob,Gender,Ph_No,Email,Password) values ('".
mysql_real_escape_string( $_POST['firstname']) . "', '".
mysql_real_escape_string( $_POST['lastname'] ) . "','" . 
mysql_real_escape_string( $_POST['apartment'] ) . "','" . 
mysql_real_escape_string( $_POST['street']) . "','".
mysql_real_escape_string( $_POST['state'] ). "','".
mysql_real_escape_string( $_POST['city'] ) . "','" . 
mysql_real_escape_string( $_POST['zip'] )."','".
mysql_real_escape_string( $_POST['start_date'] )."','".
mysql_real_escape_string( $_POST['end_date'] )."','".
mysql_real_escape_string( $_POST['dob'] ) . "','" . 
mysql_real_escape_string( $_POST['gender'] ) . "','" . 
mysql_real_escape_string( $_POST['contact']) . "','".
mysql_real_escape_string( $_POST['email'] ). "','".
mysql_real_escape_string( md5($_POST['password']) ) . "')",$con);
$_SESSION['myusername']=$_POST['email'];
$_SESSION['mypassword']=md5($_POST['password']);


$res1=mysql_query("select Cid from customer C where C.Email='".$_SESSION['myusername']."'");
$array1=mysql_fetch_array($res1);
$cid=$array1[0];

mysql_query("insert into pays (Cid,Tid) values ('".$cid."','".$tid."')"); 
header("location:homepage.php");                   
}
else
{
header("location:register.php?msg=User already exists");
}
mysql_close($con);



?>