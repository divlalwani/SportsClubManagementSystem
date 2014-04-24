<script>
jQuery( document ).ready(function() {
    
});
</script>
<?php
include("header.php");
include("connect.php");
$res=mysql_query("select End_date from customer where Email='".$_SESSION['myusername']."'");
$array=mysql_fetch_array($res);
$end_date=$array[0];
echo "<div style='background-color: antiquewhite; height: 100%;'>Your Membership Expires on ".$end_date;
echo "<br><br>";
date_default_timezone_set('America/Chicago');
$new_start_date = date('Y-m-d', strtotime($end_date . ' + 1 day'));
$new_end_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($new_start_date)) . " + 365 day"));
echo "<h4>Renew Membership:</h4>";
echo "<br>";
echo "<form action='renewmembershippay.php' method='post'>";
echo "<table><tr><td>";
echo "Start Date:</td>";
echo "<td><input type='text' name='new_start_date' value='".$new_start_date."' readonly></td></tr>";
echo "<tr><td> End Date:</td>";
echo "<td><input type='text' name='new_end_date' value='".$new_end_date."' readonly></td></tr>";
echo "<tr><td><input type='submit' value='Renew'></td></tr></table></form></div>";
include("footer.php");
?>

