
<?php
require("connect.php");
require("header.php");?>



				
		<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;
					<h1>Search</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				
<?php 
$facility = htmlspecialchars($_POST["facilityname"]);
$date =  $_POST["date"];
?>

<table border="0" width="74%" bordercolorlight="#000000" cellspacing="0" id="table1" height="358" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">
<form method="POST" name="userinfo" action="books_submit.php">
   <tr>  <td width="37%" align="right">Facility：</td>  <td width="61%">  &nbsp;&nbsp <?php echo $facility ?> </td> </tr> 
   <tr>  <td width="37%" align="right">Date：</td>  <td width="61%">  &nbsp;&nbsp; <?php echo $date ?> </td> </tr> 
   
	<input type="hidden" name="facilityname" id="facilityname" value=<?php echo $facility?>>

	<input type="hidden" name="date" id="date" value=<?php echo $date?>>

 
  
     <?php 
	   $i = 1; //counter for slot number
	  
	   $slots = mysql_query("SELECT S1.time FROM slots S1
							 WHERE S1.time NOT IN (SELECT S.time 
	   					   FROM slots S, facility F, has H 
						   WHERE S.sid = H.sid AND F.fid = H.fid AND F.name = '$facility'  AND H.date = '$date' AND H.Is_Avail = 1)");
	  
		//$result = mysql_fetch_array($sql);
	
$num_rows = mysql_num_rows($slots);
		if ($num_rows == 0)
		{
?>
	
<tr>
<i style="color:red">
	Sorry! No slots available for <?php echo $facility?> on <?php echo $date ?> . Please try to book a slot for different date/facility by clicking previous button.
</i>
	</tr>
<?php
}
else
{
		
	  while ($row = mysql_fetch_array($slots))
	  {
	  $starttime = $row[0];
	  $endtime = date('H:i:s', strtotime($starttime)+7200);
		echo "<tr>  <td width='37%' align='right'>Slot" . $i . ' : ' ."</td>  <td width='61%'>" . $starttime . " - " . $endtime .  "</td>"; 
	$i++;
	  
	 ?>
		<td>
			<input type="radio" name="group1" checked="true" id="group1" value=<?php echo $row[0]?>>
		</td>
		</tr>

	<?php
	  }
	?>
	   

	
	

	
	<input type="hidden" name="slot" id="slot" value="s"/>
	<tr>  
	<td width="37%" align="right">Trainer?</td>  <td width="61%">&nbsp;&nbsp;<input type="radio" value="Yes" checked name="trainer">Yes  <input type="radio" name="trainer" value="No">No</td>
	</tr> 
	 <tr>
	<td>
		<input type="submit" value="Book" >
		</td>
	</tr>
<?php
}

?>
 <tr>
	<td>
		<input type="button" value="Previous" onClick="window.history.back();">
	</td>
	</tr>	
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