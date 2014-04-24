<?php
session_start(); 
if(isset($_SESSION['myusername'])){
include("header.php");
}  
else{ 
include("loginheader.php");} 
?>
				
		<div id="main">
			<div id="content">
				<h1>Member Plan</h1>
				<div class="projects">
					<div class="item">
						<div class="image left"> 
							<a href="#"><img src="images/memberplan01.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Gold</h4>
							<p>As a gold member, you can access to all the facilities in our club. You can play Basketball, Squash, Tennis, Badminton, Swim and Volleyball.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="#"><img src="images/memberplan02.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Silver</h4>
							<p>As a silver member, you can play Basketball, Squash, Tennis and Badminton.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="#"><img src="images/memberplan03.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Bronze</h4>	
							<p>As a bronze member, you can play Basketball and Tennis.</p>
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

if(isset($_SESSION['myusername'])){
include("footer.php");
}  
else{ 
include("login_footer.php");} 
?>