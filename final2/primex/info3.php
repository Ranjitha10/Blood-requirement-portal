<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:login.php");
exit;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Requirement Portal</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
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
                            <a href="index.php">
                                <img src="images/logo.png" alt="Logo"/>
                            </a>
                        </h1>
						<br>
                    </div>
					<br><br>
                     <nav class="nav put-right">
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php">Home</a></li>
                            <li><a href="ask.php">Ask for Blood</a>
                               <ul>
                                            <li><a href="bpos.php">B+</a></li>
                                            <li><a href="bneg.php">B-</a></li>
                                            <li><a href="apos.php">A+</a></li>
                                            <li><a href="aneg.php">A-</a></li>
                                            <li><a href="abpos.php">AB+</a></li>
                                            <li><a href="abneg.php">AB-</a></li>
                                            <li><a href="opos.php">O+</a></li>
                                            <li><a href="oneg.php">O-</a></li>
                                            
                                        </ul>
                            </li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contacts.php">Contact Us</a></li>
                            <li><a href="settings.php">Settings</a></li>
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
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>

<div class="container">
    
	                <div class="row">
                    <div class="grid_6">
                        <div class="wrap_18">
						<center>
						<h2 class="header_2 indent_5">
                                F.A.Q
                            </h2>
							
							</center>
					
                                <p class="text_7 color_6">
                                    Welcome to blood requirement portal!!!<br/><br/>
                                   
                                </p>
                                <p class="text_8">
                                   <a href="#"> *Who can be a donor? </a><br/>
								   You are eligible to donate if you are at least 17 years of age, weigh a minimum of 110 pounds and are in general good health.<br/><br/>
					 <a href="#">*How can I register to be donor?</a><br/>
					 Access our portal, on the top right corner of home page, link is provide for donor registry. Click on it and follow the guidelines provided to be a donor<br/><br/>
					 <a href="#">*How to send information for donors?</a><br/>
					 You don't have to login to send request. Access our portal, type in the required blood group, the area where it is needed, and communicate with donors directly.
                     <br/><br/>
					 <a href="#">*How quick is connection?</a><br/>
					 This portal uses way2sms, and email to send blood requirement message. This makes the delivery quicker than ever.<br/><br/>
					 <a href="#">*DO I need an appointment?</a><br/>
					 You do not need an appointment unless you are scheduling an apheresis donation. Walk-in donors are always welcome.<br/><br/>
				
					 <a href="#">*Can I access portal via mobile?</a><br/>
					The mobile app for the same is being developed. Download the app, and access it the same way as that of website. Query for blood and save life <br/><br/> 
									</p>
                            
                        </div>
                    </div>
         
                </div>
</div>




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