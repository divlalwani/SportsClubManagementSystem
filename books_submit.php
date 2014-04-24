

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
					<h1>Book</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				

<table border="1" width="70%" bordercolorlight="#000000" cellspacing="0" id="table1" height="358" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">
<form method="POST" name="userinfo" action="books_submitdb.php">
<?php 
$facilityname = $_POST["facilityname"];
$date =  $_POST["date"];

$starttime = $_POST["group1"];
$endtime = date('H:i:s', strtotime($starttime)+7200);

$trainerneeded = $_POST["trainer"];
   $sql = mysql_query("SELECT E.Ename, I.designation
	   					   FROM employee E, teach T, trainer I, facility F
						   WHERE E.eid = I.eid AND I.eid = T.eid AND F.fid = T.fid AND I.designation like '%$facilityname%'");
	
	  while ($row = mysql_fetch_array($sql))
	  {
		$trainer = $row[0];
		$description = $row[1];
		}
?>

   <tr>  <td width="37%" align="right">Facility：</td>  <td width="61%"> <?php echo $facilityname?> </td> </tr> 
	<input type="hidden" name="facilityname" id="facilityname" value=<?php echo $facilityname?>>
	<?php
	if($trainerneeded == 'Yes')
	{
	?>
	
   <tr>  <td width="37%" align="right">Trainer：</td>  <td width="61%">  <?php echo $trainer?>   </td> </tr> 
   <tr>  <td width="37%" align="right">Description：</td>  <td width="61%"><textarea rows="9" name="userGrjs" cols="34"><?php echo $description?></textarea></td> </tr> 
   <?php
   }
   ?>
   <tr>  <td width="37%" align="right">Date：</td>  <td width="61%">  <?php echo $date?>   </td> </tr> 
   
	<input type="hidden" name="date" id="date" value=<?php echo $date?>>
   <tr>  <td width="37%" align="right">Begin Time：</td>  <td width="61%">  <?php echo $starttime?> </td> </tr> 
   
	<input type="hidden" name="slot" id="slot" value=<?php echo $starttime?>>
   <tr>  <td width="37%" align="right">End Time：</td>  <td width="61%">  <?php echo $endtime?> </td> </tr> 
 
 
 <tr>
 <td colspan="2" height="38">  <p align="center"><input type="submit" value="Submit" name="slotSubmit" id="slotSubmit">   
 <input type="button" value="Back" name="back" onClick="window.history.go(-2);"></td> 
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