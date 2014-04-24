

<?php
require("connect.php");
include("header.php");
$user=$_SESSION['myusername'];
$cust=mysql_query("select * from customer where Email='".$_SESSION['myusername']."'");
$res=mysql_fetch_array($cust,MYSQL_BOTH);
$custid = $res['Cid'];
?>

		
				
		<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;	
					<h1>Cancel Facility</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				

<table border="1" width="70%" bordercolorlight="#FFFFFF" cellspacing="0" id="table1" height="210" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">
<form method="POST" action="cancel_facilitydb.php" name="cancelform">

 <?php 
	   $i = 1; //counter for booked slots
	   $sql = mysql_query("SELECT F.name, H.date, S.time
	   					   FROM slots S, facility F, has H 
						   WHERE S.sid = H.sid AND F.fid = H.fid AND H.Cid = '$custid' AND H.Is_Avail = 1");
		//$result = mysql_fetch_array($sql);
	
$num_rows = mysql_num_rows($sql);
		if ($num_rows == 0)
		{
?>
	
<tr>
<i style="color:red">
	Sorry! There isn't any booking for you. 
</i>
	</tr>
<?php
}
else
{
?>
<tr><b> <td width = '30%'align='center'> Facility</td> <td width = '20%'align='center'> Date</td> <td width = '30%'align='center'> Slot</td> <td width='20%' align='center'> Select</td></b> </tr>

<?php
	  while ($row = mysql_fetch_array($sql))
	  {
	  $starttime = $row[2];
	  $endtime = date('H:i:s', strtotime($starttime)+7200);
		echo "<tr>  <td width='30%' align='center'>" . $row[0] . "</td>  <td width='20%' align='center'>" . $row[1] . "</td>  <td width='30%' align='center'>" . $starttime . " - " . $endtime .  "</td>"; 
	  $cancelslot = $row[0] . '|' . $row[1] . '|' . $row[2];
	 ?>
		<td width='20%' align='center'>
			<input type="radio" name="cancelbooking" id="cancelbooking" checked="true" value=<?php echo htmlspecialchars($cancelslot)?>>
		</td>
		</tr>

	<?php
	  }
	  
	?>
 <tr>
 <td colspan="2" height="38">  <p align="center"><input type="submit" value="Cancel" name="cancel" id="cancel">   
 <input type="button" value="Back" name="back" onClick="window.history.back();"></td> 
</tr>

<?php
	  }
	  
	?>
</form>
</table>

                    


			</div>
			<div id="sidebar" class="right">
								
				
				<div class="advertisement">
					<h3>Advertisement</h3>
					<div class="ads">
						<div class="ad left">
							<a href="#"><img src="images/ad01.gif" alt="" /></a>
						</div>
						<div class="ad right">
							<a href="#"><img src="images/ad02.gif" alt="" /></a>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
				
				
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
		<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		<div class="shadow-b"></div>
	</div>
	
<?php
include("footer.php");
?>