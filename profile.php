<?php
include_once('header.php');
include_once('connect.php');

$res=mysql_query("select * from customer where Email='".$_SESSION['myusername']."'");
$ans=mysql_fetch_array($res,MYSQL_BOTH);
$custid = $ans['Cid'];
$firstname=$ans['FName'];
$lastname=$ans['LName'];
$gender=$ans['Gender'];
$apt=$ans['Apt_No'];
$street=$ans['Street'];
$state=$ans['State'];
$city=$ans['City'];
$zip=$ans['Zip'];
$Ph_No=$ans['Ph_No'];
$dob=$ans['Dob'];

$res2=mysql_query("select Tid from pays where Cid = '$custid'");
$ans2=mysql_fetch_array($res2,MYSQL_BOTH);
$tid=$ans2[0];
//$tid = $ans['Tid'];
$res1=mysql_query("select Description from membership where Tid = '$tid'");
$ans1=mysql_fetch_array($res1,MYSQL_BOTH);
$type=$ans1[0];
?>
				
		<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;
					<h1>Profile</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
<?php
if(isset($_GET['msg']))
{
echo "<h4> $_GET[msg]</h4>";
unset($_GET['msg']);
}
if(isset($_GET['upgrademsg']))
{
echo "<h4> $_GET[upgrademsg]</h4>";
unset($_GET['upgrademsg']);
}
if(isset($_GET['renewmsg']))
{
echo "<h4> $_GET[renewmsg]</h4>";
unset($_GET['renewmsg']);
}
?>
				


<table border="0" width="70%" bordercolorlight="#FFFFFF" cellspacing="0" id="table1" height="358" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">   
<form method="POST" action="bb.asp" name="userinfo" onSubmit="return CheckForm();">
   <tr>  <td width="37%" align="right">Name：</td>  <td width="61%">  <?php echo $firstname." ".$lastname; ?> </td> </tr> 
   <tr>  <td width="37%" align="right">Email：</td>  <td width="61%">  <?php echo $_SESSION['myusername'];  ?> </td> </tr>
    <tr>  <td width="37%" align="right">Gender：</td>  <td width="61%">  <?php echo $gender;  ?> </td> </tr> 
   <tr>  <td width="37%" align="right">Birthday：</td>  <td width="61%">  <?php echo $dob; ?></td> </tr> 
    <tr>  <td width="37%" align="right">Street name:</td>  <td width="61%">  <?php echo $street; ?></td> </tr> 
	 <tr>  <td width="37%" align="right">Apartment No:</td>  <td width="61%">  <?php echo $apt; ?></td> </tr> 
   <tr>  <td width="37%" align="right">City</td>  <td width="61%"> <?php echo $city; ?> </td> </tr> 
    <tr>  <td width="37%" align="right">State:</td>  <td width="61%">  <?php echo $state; ?></td> </tr> 
	 <tr>  <td width="37%" align="right">Zip:</td>  <td width="61%">  <?php echo $zip; ?></td> </tr> 
	  <tr>  <td width="37%" align="right">Contact No:</td>  <td width="61%">  <?php echo $Ph_No; ?></td> </tr> 
      <tr>  <td width="37%" align="right">Membership_Type：</td>  <td width="61%">  <?php echo $type; ?>   </td> </tr>  
   


  <tr>
 
 <td colspan="2" height="38">  <p align="center"> <a href="upgrademembership.php"> Upgrade Membership </a>  <br /> <a href="renewmembership.php"> Renew Membership </a>  <a href="editprofile.php"> Edit Profile </a>  <a href="changepassword.php">Change Password</a> </td> 
</tr>  
</form>
</table> 


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
include_once('footer.php');
?>