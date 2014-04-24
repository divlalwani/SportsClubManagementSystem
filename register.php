<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script>
function submitForm(){
	
if(jQuery("#fname").val().length > 0 && jQuery("#lname").val().length > 0 && jQuery("#pwd").val().length > 0 && jQuery("#emailId").val().length > 0){
	//CheckForm();
	if(jQuery('#emailId').val().indexOf("@") > 0){
	var aptId = jQuery("#aptId").val();
	var zipId = jQuery("#zipId").val();
			if (aptId !== "" && zipId != "" && zipId.match(/^\d+$/) && aptId.match(/^\d+$/)) {
				jQuery( "#registrationID" ).submit();
			}else{
				alert("Enter numeric values for the zip and apt number only.");
			}
		}
		else{
			alert("invalid email address.");
		}

}else{
	alert("Please fill the mandatory fields.");
}
		
};	

</script>
<?php
include_once('loginheader.php');
?>

		<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;
">		
		
					<h1>Register</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				

<table border="0" width="70%" bordercolorlight="#000000" cellspacing="0" id="table1" height="358" bordercolor="#000000" bordercolordark="#FFFFFF" cellpadding="0" style="
    color: rgb(31, 0, 255);
    background-color: rgba(219, 255, 127, 0.42);
">
<?php
if(isset($_GET['msg']))
echo $_GET['msg'];
?>

<form id="registrationID" method="POST" action="payment.php" name="userinfo">
    <tr><td colspan="2" height="37" style="
    background-color: azure;
">  <p align="center">Register</td> </tr>
 <tr>  <td width="37%" align="right">First Name：</td>  
 	<td width="61%">     <input type="text" name="fn" size="13" id="fname">    </td> </tr> 
  <tr>  <td width="37%" align="right">Last Name：</td>  <td width="61%">  
     <input type="text" name="ln"  size="13" id="lname">    </td> </tr> 
 <tr>  <td width="37%" align="right">Email：</td>  
 <td width="61%">     <input type="text" name="email" size="30" id="emailId">    </td> </tr> 
 <tr>  <td width="37%" align="right">Password：</td> 
 <td width="61%">  <input type="password" name="pwd" size="20" id="pwd"></td> </tr>
  <tr>  <td width="37%" align="right">Gender：</td>  
 <td width="61%"><input type="radio" name="gen" value="male" checked >Male    
  <input type="radio" name="gen" value="female">Female</td> </tr> 
   <tr>  <td width="37%" align="right">Date of Birth：</td>  
 <td width="61%">     <input type="text" name="dob" id="datepicker" size="30">    </td> </tr> 
  
 <tr>  <td width="37%" align="right">Street Name：</td>  
 <td width="61%">     <input type="text" name="st" size="30">    </td> </tr> 
 <tr>  <td width="37%" align="right">Apartment No：</td> 
  <td width="61%">     <input type="text" name="apt"  size="30" id="aptId">    </td> </tr> 
 <tr>  <td width="37%" align="right">City：</td> 
  <td width="61%">     <input type="text" name="city" size="30">    </td> </tr> 
 <tr>  <td width="37%" align="right">State：</td> 
  <td width="61%">     <input type="text" name="state" size="30">    </td> </tr> 
 <tr>  <td width="37%" align="right">Zip：</td> 
  <td width="61%">     <input type="text" name="zip"  size="30" id="zipId">    </td> </tr> 





 <tr>  <td width="37%" align="right">Contact No.：</td> 
  <td width="61%"><input type="text" name="cno" ></td> </tr>
   <tr>  <td colspan="2" height="38">  <p align="center"><input id="submitButtonId" type="button" value="Submit" onclick="javascript:submitForm();"/>   <input type="reset" value="Reset" /></p></td> 
</tr>
</form>
</table>




			</div>
			<div id="sidebar" class="right">
								
				<a href="./login.php" class="btn-buy"><em>Log In</em></a>
				
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