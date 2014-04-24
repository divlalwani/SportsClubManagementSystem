<script>
jQuery( document ).ready(function() {
    
});
</script>
<?php
include("header.php");
include("connect.php");

$res=mysql_query("select M.Description
				  from membership M, customer C, pays P
				  where Email='".$_SESSION['myusername']."' and C.cid = P.cid and P.tid = M.tid");
$array=mysql_fetch_array($res);
$type=$array[0];

echo "<html><body><div style='background-color: antiquewhite; height: 100%;'><table height='auto'><tr>";?>

		<td> Your Current Membership Type: </td>
		<td>
		<?php echo $type; ?>
		</td></tr>
	    <tr><td>
		<?php if($type=='Gold')
		  echo "You Cannot Upgrade Above This</td></tr>";
		else 
		{
		  echo "<tr><td> Upgrade To: </td></tr>";
		 
		  echo "<form action='upgrademembershippay.php' method='post'>";
		  if($type=='Silver')
		  {
		  echo "<tr><td><input type='radio' name='upgradetype' selected value='Gold'>Gold ($800)</td></tr>";
		  }
		  else if($type=='Bronze') 
			{	
			echo "<tr>";
			echo "<td><input type='radio' name='upgradetype' selected value='Silver'>Silver ($600)</td>";
			echo "<td><input type='radio' name='upgradetype' value='Gold'>Gold ($800)</td></tr>";
			}
		echo "<tr><td>";
		echo "<input type='submit' value='Upgrade'></td>";  
		}
		echo "</form></table></div></body></html>";
?>

<?php
include("footer.php");
?>
		   
				
				
				
				
		
		
					
		