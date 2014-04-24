

<!DOCTYPE html PUBLIC "Group 23">
<html>
<head>
	<title>Group 23 Sports Center</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="jquery.jcarousel.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="ie6.css" type="text/css" media="all" />
	<![endif]-->
	<link rel="shortcut icon" href="images/favicon.ico" />
<script>
function CheckForm()
{ 
if(document.userinfo.username.value == "") 
{  alert("cannot be empty");  
document.userinfo.username.focus();  
return false; 
} 
if(document.userinfo.username.value.length > 10)
 {
  alert("the length of name cannot be longer than 10 characters");
  document.userinfo.username.focus();
  return false; 
} 
}
  </script>	
	

 
   

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">

<script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "-50:+0", 
    showOn: "both", 
    buttonImage: "images/Calendar.gif", 
    buttonImageOnly: true,
	dateFormat: "yy-mm-dd"
    });
  });
  </script>
  
  
  
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
	<script type="text/javascript" src="js/func.js"></script>
	<script type="text/javascript">

<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
 
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
                
                

<SCRIPT type="text/javascript">
window.history.forward();
function noBack() { window.history.forward(); }
</SCRIPT>   
</head>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
<div class="shell">
	<div class="border">
		<div id="header">
			<h1 id="logo"><a href="#" class="notext">Sports Center</a></h1>
			<div class="socials right">
				<ul>
				    <li><a href="https://www.facebook.com/yangzeyao" class="fb">Facebook</a></li>
				    <li class="last"><a href="https://twitter.com" class="twit">Twitter</a></li>
				</ul>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
		<div id="navigation">
			<ul>
			    
				 <li><a href="./login.php">Home</a></li>
			    <li><a href="./services.php">Facilities</a></li>
			    <li><a href="./plans.php">Plans</a></li> 
				<li><a href="./about.php">About Us</a></li>
			    <li><a href="./contact.php">Contact Us</a></li>
			</ul>
			<div class="cl">&nbsp;</div>
		</div>