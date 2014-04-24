<?php
session_start(); 
if(isset($_SESSION['myusername'])){
include("header.php");
}  
else{ 
include("loginheader.php");} 
?>
		
		<div id="main">
			<div id="content" class="left">
				<div class="highlight">
					<big><h1>Why choose us?</h1><br></big>
					<img src="images/highlight.gif" alt="" class="right" />
					<big><big><p>Sports Center is not just a gym, it offers more personal service, which makes it customized and unique. In here, you can book a place to do any exercise, and you even can find a instructor to help you build your health with a personal plan. Therefore, you don't have to wait for equipment and or instructors. By our personal service, you don't have to wait time. The only thing you need to do is only to click mouse and book online. I think our service will give you special experience for exercise. On the other hand, our instructors are very professional. They have had strict training, and can offer you professional instructions. Finally, you also can find comfortable environment. We offer fresh fruit, hot water and healthy food every day, and they are free for our members. If you register online and become one of members, you don't have to bring anything and can enjoy the game you booked before.</p></big></big>
					
				</div>
				
				
			</div>
			<div id="sidebar" class="right">
				<h3>Father of Sports Center</h3>
				<div class="sidebar-nav">
					<ul>
					    <li><a href="https://www.facebook.com/yangzeyao">Zeyao</a></li>
					    <li><a href="https://www.facebook.com/oliver.a.lewis?fref=ts">Oliver</a></li>
					    <li><a href="https://www.facebook.com/divya.lalwani3?fref=ts">Divya</a></li>
					    <li><a href="https://www.facebook.com/dreema31?fref=ts">Dreema</a></li>
					    <li><a href="https://www.facebook.com/thakursagar?fref=ts">Sagar</a></li>
					</ul>
				</div>
				
				
				
				

			</div>
			<div class="cl">&nbsp;</div>
		</div>
		
		<div class="shadow-l"></div>
		<div class="shadow-r"></div>
		<div class="shadow-b"></div>
	</div>
	
	<?php

if(isset($_SESSION['myusername'])){
include("footer.php");
}  
else{ 
include("login_footer.php");} 
?>