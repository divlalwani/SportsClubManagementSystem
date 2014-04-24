<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script>
function submitForm(){
	
if(jQuery('#oldId').val().length > 0 && jQuery('#newId').val().length >0 && jQuery('#confirmId').val().length > 0 && (jQuery('#confirmId').val() == jQuery('#newId').val())){
	//CheckForm();
	jQuery( "#reg_form" ).submit();
}else{
	alert("please reenter the password correctly.");
}
		
};	

</script>

<?php
include("header.php");
if(isset($_GET['pwdmsg']))
echo "<h4> $_GET[pwdmsg]</h4>";
unset($_GET['pwdmsg']);
?>


<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;<br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				


<form action="checkpassword.php" method="post" id="reg_form">
<table>
	<tr>
		<td width="37%" align="right">Enter Old Password:</td>
		<td width="37%" align="left"><input type="password" name="oldpwd" id="oldId"></td>
	</tr>
	<tr>
		<td width="37%" align="right">Enter New Password:</td>
		<td width="37%" align="left"><input type="password" name="newpwd" id="newId"></td>
	</tr>
	<tr>
		<td width="37%" align="right">Confirm Your Password: </td>
		<td width="37%" align="left"><input type="password" name="confpwd" id="confirmId"></td>
	</tr>
	
		<td width="37%" align="right"> <input type="button" value="Change" onclick="javascript:submitForm();"></td>
		<td width="37%" align="left"> <input type="reset" value="Cancel"></td>
	</tr>
</table>
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
include("footer.php");
?>
