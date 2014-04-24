<?php
require("connect.php");
session_start();

$tbl_name="customer"; // Table name 



// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword= md5($_POST['userPassword']); //encrypt the password




// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Email='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
 

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "homepage.php"
if (!isset($_SESSION['myusername']))
  $_SESSION['myusername'] = $myusername;
  
if (!isset($_SESSION['mypassword']))
  $_SESSION['mypassword'] = $mypassword;
  

//session_register("mypassword"); 


header("location:homepage.php");
}
else {
header("location:login.php?invalid=Invalid username or password");
}
?>