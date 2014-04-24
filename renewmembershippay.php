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

 $new_start_date=$_POST['new_start_date'];
 $new_end_date = $_POST['new_end_date'];
 $res=mysql_query("select M.Description,M.Amt from 
				  customer C,membership M, pays P 
				  where C.Cid = P.Cid and M.Tid = P.Tid and  Email='$_SESSION[myusername]'");
 $array=mysql_fetch_array($res);
 $type=$array[0];
 $amt=$array[1];

?>
<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;">
	<div class="highlight" style="
    background-color: bisque;
">		
<form action="renewmembershipdb.php" method="post" id="paymentId">
<table> 
	<tr> 
		<td> Membership Type:</td>
		<td> <?php echo $type;?></td>
	</tr> 
	<tr>
		<td>Amount:</td>
		<td><?php
				echo $amt;
				?> </td>
	</tr>
	<tr>  
		<td width="37%" align="right">Start:</td>  
		<td width="61%"> <input type="text" name="new_start_date" size="11" readonly value= <?php echo $new_start_date;?>></td> 
	</tr> 
	<tr> 
	    <td width="37%" align="right">End:</td>  
		<td width="61%"> <input type="text" name="new_end_date" size="11" readonly value=<?php echo $new_end_date; ?>></td> 
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
	  <td width="61%">  <input type="password" id="cvvId" name="cvv" size="2" value=""></td>
	  
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
	
