<?php

$host="silo.cs.indiana.edu"; // Host name 
$username="b561f13_srthakur"; // Mysql username 
$password="b561f13_srthakur"; // Mysql password 
$db_name="b561f13_srthakur"; // Database name 

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>

