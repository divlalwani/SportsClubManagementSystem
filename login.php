<head>
<script type="text/javascript"
 src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
	
  });
function invalidLogin(){
	alert();
}
</script>
</head>
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
					<h1>Log in</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				

<table border="0" width="70%" bordercolorlight="#FFFFFF" cellspacing="0" id="table1" height="150" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">
<form method="POST" name="userinfo" action="check_login.php">
 <tr>  <td width="37%" align="center" style="
    background-color: cornsilk;
">Name：</td>  <td width="61%" align="center">     <input type="text" name="username" size="40">    </td> </tr> 
<tr>  <td width="37%" align="center" style="
    background-color: cornsilk;
">Password：</td>  <td width="61%" align="center">  <input type="password" name="userPassword" size="40"></td> </tr>
 <tr>  <td width="37%" align="center"> <input type="checkbox" checked="checked">  <big><span>Remember</span></big> </td>  <td width="61%" align="center">     <big><big><big><input type="submit" value="Log in" onclick"javascript:clickme();"> </big></big></big> </td> </tr> 

</form>
</table>
                    
 <a href="./register.php">Register</a>   
		  <?php
		  if(isset($_GET['invalid']))
			echo'<h2>Incorrect login.</h2>';		
		?>

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
					<p>1. Click Register Now <br> 2. Fill in personal information <br> 3. Submit and pay</p>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
		<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		<div class="shadow-b"></div>
	</div>
	
<?php
include("login_footer.php");
?>