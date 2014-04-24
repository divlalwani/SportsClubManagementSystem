<?php
include_once('header.php');
include_once('connect.php');
$user=$_SESSION['myusername'];
$cust=mysql_query("select * from customer where Email='".$_SESSION['myusername']."'");
$res=mysql_fetch_array($cust,MYSQL_BOTH);
$val ="Welcome ".$res['FName'];
echo '<h2>' . $val. '</h2>';

if(isset($_GET['bookmsg']))
{
echo "<h4> $_GET[bookmsg]</h4>";
unset($_GET['bookmsg']);
}

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
			<div id="content" class="left">
				<div class="highlight">
					<h2>Welcome</h2><br>
					<img src="images/highlight.gif" alt="" class="right" />
					<big><p>Hi, Sports Center is a great place to do exercise and receive professional instructions. In here, you can find professional instructor, free healthy food and comfortable environment. At last, welcome to Sports Center, you will never regret your choice. </p></big><br>
					
				</div>
				
				
					
				</div>
			</div>
			<div id="sidebar" class="right">
				<h3>Star Instructors</h3>
				<div class="sidebar-nav">
					<ul>
					    <li><a href="https://www.facebook.com/yangzeyao">Zeyao Yang</a></li>
					    <li><a href="https://www.facebook.com/oliver.a.lewis?fref=ts">Oliver Lewis</a></li>
					    <li><a href="https://www.facebook.com/divya.lalwani3?fref=ts">Divya Lalwani</a></li>
					    <li><a href="https://www.facebook.com/dreema31?fref=ts">Dreema Patel</a></li>
					    <li><a href="https://www.facebook.com/thakursagar?fref=ts">Sagar Thakur</a></li>
					</ul>
				</div>
				
				
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