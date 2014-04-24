<?php
include("connect.php");
include("header.php");
?>
<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;					<h1>Edit Profile</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				

<form action="updateprofile.php" method="post">
<?php
$query="select * from customer where Email='".$_SESSION['myusername']."'";
$result=mysql_query($query);
echo "<table width=600>";
		while(($row= mysql_fetch_assoc($result))!=NULL)
		{
			extract($row); 
			
			echo "<tr><td><h4>First Name :-</h4></td>";
			echo "<td><input type='text' name='fnm' value='".$FName."'></td></tr>";
			echo "<tr><td><h4>Last Name :-</h4></td>";
			echo "<td><input type='text' name='lnm' value='".$LName."'></td></tr>";
			echo "<tr><td><h4>Apartment Number :-</h4></td>";
			echo "<td><input type='text' name='apt' value='".$Apt_No."'></td></tr>";
			echo "<tr><td><h4>Street :-</h4></td>";
			echo "<td><input type='text' name='street' value='".$Street."'></td></tr>";
			echo "<tr><td><h4>State :-</h4></td>";
			echo "<td><input type='text' name='state' value='".$State."'></td></tr>";
			echo "<tr><td><h4>City :-</h4></td>";
			echo "<td><input type='text' name='city' value='".$City."'></td></tr>";
			echo "<tr><td><h4>Zip :-</h4></td>";
			echo "<td><input type='text' name='zip' value='".$Zip."'></td></tr>";
			echo "<tr><td><h4>Birthdate :-</h4></td>";
			echo "<td><input type='text' name='dob' id='datepicker' value='".$Dob."'></td></tr>";
			echo "<tr><td><h4>Gender :-</h4></td>"; ?>
	 		<td><input type='radio' name='gender' value='Male' <?php echo ($Gender=='Male')?'checked':'' ?>>Male
			<input type='radio' name='gender' value='Female' <?php echo ($Gender=='Female')?'checked':'' ?>>Female</td></tr>
			<?php echo "<tr><td><h4>Contact Number :-</h4></td>";  
			echo "<td><input type='text' name='ph_no' value='".$Ph_No."'></tr>";
			echo "<tr><td><h4>Email :-</h4></td>";  
			echo "<td><input type='text' name='em' value='".$Email."' readonly></tr>";
			
			echo "<tr><td><input type='submit' value='edit'></td></tr>";  
			
			echo "</table>";
			
		}
		?>
		
	
</form>
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
include_once('footer.php');
?>



