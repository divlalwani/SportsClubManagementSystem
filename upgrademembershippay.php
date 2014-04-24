<script>
function submitForm(){

	var cardId = jQuery("#cardId").val();
	
			if (cardId !== "" && cardId.match(/^\d+$/) && cardId.length==10) {
				jQuery( "#paymentId" ).submit();
			}else{
				alert("card number must be 10 digits.");
			}
		


		
};

</script>
<?php
include("header.php");
include("connect.php");
//$upgradetype=$_POST['upgradetype'];
$upgradetype=$_POST['upgradetype'];
$res=mysql_query("select Amt from membership where Description='".$upgradetype."'");
$array=mysql_fetch_array($res);
$amt=$array[0];
 $start_date=date('Y-m-d');
 $end_date = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
 
 
?>
<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;">
	<div class="highlight" style="
    background-color: bisque;
">	
<form action="upgrademembershipdb.php" method="post" id="paymentId">
<table> 
	<tr>
		<td>Amount:</td>
		<td><?php
				echo $amt;
				?> </td>
	</tr>
	<tr>  
		<td width="37%" align="right">Start:</td>  
		<td width="61%"> <input type="text" name="start_date" size="11" readonly value= <?php echo $start_date;?>></td> 
	</tr> 
	<tr> 
	    <td width="37%" align="right">End:</td>  
		<td width="61%"> <input type="text" name="end_date" size="11" readonly value=<?php echo $end_date; ?>></td> 
	</tr> 
 	<tr>
	  <td width="37%" align="right">Card Type:</td>
	  <td width="61%">	<select size="1" name="card_type">    
   						<option selected value="Visa">Visa</option>
   						<option value="Master">Master</option> </select></td>
	 </tr>
  	 <tr>
	   <td width="37%" align="right">Card Number:</td>
	   <td width="61%"> <input type="text" name="card_num" size="20" id="cardId"></td> 
	 </tr> 
  	  <tr>
	    <td width="37%" align="right">Expiry Date:</td>
		<td width="61%">   
  					<?php
						echo "<select size='1' name='exp_month'>";
  						for($i=1;$i<13;$i++)
  						{
     						echo "<option value='$i'>$i</option>";    
  						}
  
  						echo "</select>/<select name='exp_year'><br />";
  						for($j=2013;$j<=2030;$j++)
  						echo "<option value='$j'>$j</option>";
  						echo "</select>";
  					?>
  			</td></tr>
	<tr> 
	 <td width="37%" align="right">CVV:</td> 
	  <td width="61%">  <input type="text" name="cvv" size="2" ></td>
	  <input type="hidden" name="upgradetype" value=<?php echo $upgradetype; ?> />
	 </tr>  
	 <tr>
	 	<td> <input type="button" value="Pay" onclick="javascript:submitForm();"/></td>
		<td><input type="reset" value="Cancel" /></td>
	</tr>
	</table>
	</form>
	</div>
	</div>
	</div>
<?php
include("footer.php");
?>
	
