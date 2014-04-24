<?php
session_start(); 
if(isset($_SESSION['myusername'])){
include("header.php");
?>
<div id="tabDivId" style="
    position: relative;   
    top: 100px;   
    left: 800px;
">
<table id="tabId"><tr>
<td colspan='2' height='38'><p align='center'  style="
    background-color: bisque;
"><a href='books_search.php' style='color: #0000A0' ><h3>Book Facility</h3></a></td></tr>
<tr><td colspan='2' height='38'><p align='center'  style="
    background-color: bisque;
"><a href='cancel_facility.php' style='color: #0000A0'><h3>MySchedule</h3></a></td></tr>

</tr></table>
</div>
<?php  
}
else{ 
include("loginheader.php");} 
?>
<?php
if(isset($_GET['bookmsg']))
{
echo "<h4> $_GET[bookmsg]</h4>";
unset($_GET['bookmsg']);
}
?>

		
			<div id="main">
			<div id="content">
				<h1>Outstanding Facilities</h1>
				<div class="projects">
				
			
					
					<div class="item">
						<div class="image left">
							<a href="#"><img src="images/tennis.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Tennis</h4>	
							<p>Tennis is a lifetime sport that can increase physical fitness and health.  What more, tennis is a highly-social sport. Players not only revel in the competition but also the camaraderie that comes with participation in the sport. You can play individually or as part of a team.  It is a sport that offers something for everyone, regardless of age, background or ability. So come and we will teach you this interesting sport. 
 </p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					
					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="./services.html"><img src="images/swim.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Swimming</h4>
							<p>We offer professional equipment for people who love to swim. With these equipment, you can really enjoy the swim ming. On the other hand, some people in the gym will be responsible for rescuing people. So, it is a good choice for people who are not good at swimming.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					
					<div class="item">
						<div class="image left">
							<a href="./services.html"><img src="images/badminton.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Badminton</h4>
							<p>Join badminton club to use courts during practice times, to receive services provided by the club and to represent your team.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					
					<div class="item">
						<div class="image left">
							<a href="./services.html"><img src="images/squash.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Squash</h4>
							<p>Squash is a racquet sport played by two (singles) or four players (doubles) in a four-walled court with a small, hollow rubber ball. The players must alternate in striking the ball with their racquet and hit the ball onto the playable surfaces of the four walls of the court. So come and play with us.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					
					<div class="item">
						<div class="image left">
							<a href="./services.html"><img src="images/volleyball.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Volleyball</h4>
							<p>Ever wondered what it takes to be successful volleyball? It takes a lot of hard work and determination. Here's an awesome course for great success. Come and join us.</p>
						</div>
						<div class="cl">&nbsp;</div>
					</div>



					<!--next-->
					<div class="item">
						<div class="image left">
							<a href="./services.thml"><img src="images/project03.jpg" alt="" /></a>
						</div>
						<div class="text left">
							<h4>Basketball</h4>
							<p>Instructors in our basketball courses come from Indiana University that is a very famous university for their basketball.</p>
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