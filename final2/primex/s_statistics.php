<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:login.php");
exit;}
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
   <title> Blood Requirement Portal</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/my_style.css" type="text/css" media="screen">
	<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
	<script src="js/tabs.js" type="text/javascript"></script>
	
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="js/camera.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<div class="page">
<!--========================================================
                          HEADER
=========================================================-->

<a href="login.php" style="padding-left:1100px; padding-top:20px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;




<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="brand put-left">
					<br>
	
                        <h1>
                            <a href="s_index.php">
                                <img src="images/logo.png" alt="Logo"/>
                            </a>
                        </h1>
						<br>
                    </div>
					<br><br>
                     <nav class="nav put-right">
                        <ul class="sf-menu">
                            <li class="current"><a href="s_index.php">Home</a></li>
                            <li><a href="s_ask.php">Ask for Blood</a>
                               <ul>
                                            <li><a href="s_bpos.php">B+</a></li>
                                            <li><a href="s_bneg.php">B-</a></li>
                                            <li><a href="s_apos.php">A+</a></li>
                                            <li><a href="s_aneg.php">A-</a></li>
                                            <li><a href="s_abpos.php">AB+</a></li>
                                            <li><a href="s_abneg.php">AB-</a></li>
                                            <li><a href="s_opos.php">O+</a></li>
                                            <li><a href="s_oneg.php">O-</a></li>
                                            
                                        </ul>
                            </li>
                            <li><a href="s_about.php">About Us</a></li>
                            <li><a href="s_contacts.php">Contact Us</a></li>
                            <li><a href="s_settings.php">Settings</a></li>
							<?php 
			if(isset($_SESSION['email'])){ //logged in ?>
				<li><a href="logout.php">Log out</a></li>
			<?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========================================================
                          CONTENT
=========================================================-->
<section id="content">
<div class="bg_1 wrap_2 wrap_4">
    <div class="container">
        <div class="row">
            <div class="preffix_2 grid_8">
                <h3 class="header_3 wrap_3 color_3">
				 <center>
                  <a href="bloodxml.php"> View Donor Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="export.php"> Export Donor Details</a>
                </center>
				</h3>
            </div>
        </div>
		
    </div>
</div>
  <?php

$hostname="localhost";
$username="root";
$password="root";
$database="bloodbank";
$con=mysqli_connect($hostname,$username,$password,$database);

?>
<center>
		<script src="js/Chart.min.js"></script>
	
		<div style="width: 50%">
			<canvas id="canvas" height="450" width="600"></canvas>
			
		</div>
		<u>Legend:</u>
		<div id="legend"></div>
	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
		<?php 
			$query="select distinct blood_group from donor order by blood_group asc";
			$result=mysqli_query($con,$query);
			$bgroups=array();
			while($row=mysqli_fetch_assoc($result)){
				echo   '"',$row['blood_group'].'", ';
				array_push($bgroups,$row['blood_group']);
			}
		?>
		],
		datasets : [ 
			{
				label: "Male : Grey",
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [//male
				<?php 
					foreach($bgroups as $bg){
						$query="select * from donor where blood_group='$bg' and gender='M'";
						$result=mysqli_query($con,$query);
						if($result)
							echo $result->num_rows.',';
						else
							echo "0,"; //just in case
					}
				
				?>
				]
			},
			{
				label: "Female : Blue",
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [//female
				<?php 
					foreach($bgroups as $bg){
						$query="select * from donor where blood_group='$bg' and gender='F'";
						$result=mysqli_query($con,$query);
						if($result)
							echo $result->num_rows.',';
						else
							echo "0,"; //just in case
					}
				
				?>
				]
			}
		],
		legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
		
		document.getElementById("legend").innerHTML=window.myBar.generateLegend();
	}

	</script>
	<br><br><br>
	<!--
	<h3>Report for</h3> <div class="btn-wrap"> <span class="button"> <a href="querybyage.php"><strong>AGE</strong></a> </span> 
	  <span class="button"> <a href="querybybloodandarea.php"><strong>AREA and BLOODGROUP</strong></a> </span> 
	 	 <span class="button"> <a href="querybyweight.php"><strong>WEIGHT</strong></a> </span>
		 <span class="button"> <a href="queryfordetails.php"><strong>DETAILS</strong></a> </span>
		 <span class="button"> <a href="querybytime.php"><strong>TIMESTAMP</strong></a> </span>
		</div>
  -->
	</center>


</section>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" style="background:#ff0000">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                   Copyright &copy; Developed by Aparna Joshi and Apoorva N
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>