<script>
function submitForm(){
	
if(jQuery('#dt').val().length > 0){
	//CheckForm();
	jQuery( "#bookSearchId" ).submit();
}else{
	alert("please select valid date");
}
		
};	

</script>


<?php
require("connect.php");
include("header.php");
$user=$_SESSION['myusername'];
$cust=mysql_query("select * from customer where Email='".$_SESSION['myusername']."'");
$res=mysql_fetch_array($cust,MYSQL_BOTH);
$custid = $res['Cid'];

?>

		
				
		<div id="main" style="
    background-color: antiquewhite;
">
			<div id="content" class="left" style="
    background-color: beige;
">
				<div class="highlight" style="
    background-color: bisque;
					<h1>Search</h1><br>
					<img src="images/highlight.gif" alt="" class="right" />
				</div>
				

<table border="0" width="70%" bordercolorlight="#FFFFFF" cellspacing="0" id="table1" height="210" bordercolor="#FFFFFF" bordercolordark="#FFFFFF" cellpadding="0">
<form method="POST" action="books_choose.php" name="searchform" id="bookSearchId">

<tr>  <td width="37%" align="right">Facility:</td>  <td width="61%">
  <select size="1" name="facilityname">  
  
<?php 
$sql = mysql_query("SELECT F.fid, F.name
					FROM facility F, access A, membership M, customer C, pays P
					WHERE F.fid = A.fid and M.Tid = A.Tid and C.cid = P.cid and C.cid = '$custid' and A.Tid = P.Tid");
					
while ($row = mysql_fetch_array($sql)){
 echo '<option value="' . htmlspecialchars($row[1]) . '" />'. $row[1] . ' </option>';
}
?>

</select>

    </td> </tr>
  <tr>  <td width="37%" align="right">Date:</td>
  <td width="61%"> <input type="text" name="date" id="dt" />
  </td> </tr>  
   <td colspan="2" height="100">  <p align="center"><input type="button" onclick="javascript:submitForm();" value="Search" name="B1"> </td> 
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