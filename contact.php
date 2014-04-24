<?php
session_start(); 
if(isset($_SESSION['myusername'])){
include("header.php");
}  
else{ 
include("loginheader.php");} 
?>
		<div class="slider">
			<div class="slider-nav">
				<a href="#" class="left notext">1</a>
				<a href="#" class="left notext">2</a>
				<a href="#" class="left notext">3</a>
				<a href="#" class="left notext">4</a>
				<div class="cl">&nbsp;</div>
			</div>
			<ul>
			    <li>
			    	<div class="item">
						<div class="text">
							<h3><em>achieve your</em></h3>
							<h2><em>TARGETS</em></h2>
						</div>
			    		<img src="images/slider01.gif" alt="" />
			    	</div>
			    </li>
			    <li>
			    	<div class="item">
						<div class="text">
							
						</div>
			    		<img src="images/slider02.gif" alt="" />
			    	</div>
			    </li>
			    <li>
			    	<div class="item">
						<div class="text">
			
						</div>
			    		<img src="images/slider03.gif" alt="" />
			    	</div>
			    </li>
			    <li>
			    	<div class="item">
						<div class="text">
					
						</div>
			    		<img src="images/slider04.gif" alt="" />
			    	</div>
			    </li>
			</ul>
		</div>
		
		<div id="main">
			<div id="content" align="right">
				<div class="highlight">
					<h2>sportscenter@gmail.com</h2><br>
					
				</div>
				<div class="highlight">
					<h2>1(812) 222-1111</h2><br>
				</div>
				<div class="highlight">
					<h2>1025 E 7th St # 290 Bloomington, IN</h2><br>
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