<script>
function submitForm(){

	var cardId = jQuery("#cardId").val();
	
			if (cardId !== "" && cardId.match(/^\d+$/) && cardId.length==16) {
				jQuery( "#paymentId" ).submit();
			}else{
				alert("card number must be 16 digits.");
			}
		


		
};

</script>
<?php
include_once('loginheader.php');
include("connect.php");

$firstname=$_POST['fn'];
$lastname=$_POST['ln'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$gender=$_POST['gen'];
$dob=$_POST['dob'];
$street=$_POST['st'];
$apartment=$_POST['apt'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$contact=$_POST['cno'];



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
				


<table border="0" width="70%" bordercolorlight="#000000" cellspacing="0" id="table1" height="358" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">
<form method="POST" action="insert.php" name="userinfo" onSubmit="return CheckForm();" id="paymentId">
<tr>  <td width="37%" align="right">Membership_Type：</td> 

<?php
 $types = mysql_query("SELECT * FROM membership");

 while ($row = mysql_fetch_array($types))
	  {

	  
	 ?>
		<td>
			<input type="radio" name="type" id="group1" value=<?php echo $row[0]?>> <?php echo $row[2] . " - " . $row[1] ?> </input>
		</td>
	

	<?php
	  }
	?>
</tr>

 <?php
 date_default_timezone_set('America/Chicago');
 $start_date=date('Y-m-d');
 $end_date = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
 ?>
<tr>  <td width="37%" align="right">Start：</td>  <td width="61%"> 
 <input type="text" name="start_date" size="11" readonly value= <?php echo $start_date;?>></td> </tr> 
<tr>  <td width="37%" align="right">End：</td>  <td width="61%">
  <input type="text" name="end_date" size="11" readonly value=<?php echo $end_date; ?>></td> </tr> 
 <tr>  <td width="37%" align="right">Card Type：</td>  <td width="61%">
  <select size="1" name="card_type">    
   <option selected value="Visa">Visa</option>
   <option value="Master">Master</option> </select>
  </td> </tr>
  <tr>  <td width="37%" align="right">Card Number：</td>  <td width="61%"> <input type="text" name="card_num" size="20" id="cardId"></td> </tr> 
  
   <tr>  <td width="37%" align="right">Expiry Date：</td>  <td width="61%"> 
  <select size="1" name="exp_month">  
  <?php
  for($i=1;$i<13;$i++)
  {
     echo "<option value='$i'>$i</option>";    
  }
  
  echo "</select>/<select><br />";
  for($j=2013;$j<=2030;$j++)
  echo "<option value='$j'>$j</option>";
  echo "</select>";
  ?>
  
  </td> </tr>
  <tr>  <td width="37%" align="right">CVV：</td>  <td width="61%">  <input type="text" name="cvv" size="2" ></td> </tr> 
  <input type="hidden" name="firstname" value="<?php echo $firstname ?>"  />
  <input type="hidden" name="lastname" value="<?php echo $lastname ?>"  />
  <input type="hidden" name="email" value="<?php echo $email ?>"  />
  <input type="hidden" name="password" value="<?php echo $password ?>"  />
  <input type="hidden" name="gender" value="<?php echo $gender ?>"  />
  <input type="hidden" name="dob" value="<?php echo $dob ?>"  />
  <input type="hidden" name="street" value="<?php echo $street ?>"  />
  <input type="hidden" name="city" value="<?php echo $city ?>"  />
  <input type="hidden" name="state" value="<?php echo $state ?>"  />
  <input type="hidden" name="zip" value="<?php echo $zip ?>"  />
  <input type="hidden" name="contact" value="<?php echo $contact ?>"  />
  <input type="hidden" name="apartment" value="<?php echo $apartment ?>"  />
  
  <tr>  <td colspan="2" height="38">  <p align="center"><input type="button" value="Pay" name="B1" onclick="javascript:submitForm();">   </td> 
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
				
				<div class="info">
					<h3>Register Procedure</h3>
					<p>1. Click Register Now <br> 2. Full in personal information <br> 3. Submit and pay</p>
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