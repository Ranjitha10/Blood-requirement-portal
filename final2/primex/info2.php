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
                                Why this portal?
                            </h2>
							
							</center>
					
                                <p class="text_7 color_6">
                                    Welcome to blood requirement portal!!!<br/><br/>
                                   
                                </p>
                                <p class="text_8">
                                     Each year about 15.7 million units of whole blood and red blood cells are donated in the United States 
									 by approximately nine million volunteer blood donors. These units are transfused to about four million patients per year.
									 BCP provides blood for a population of more than 2.2 million. To do this, BCP needs to collect approximately 
									 500 pints of blood daily.While blood donors are needed throughout the year, they are most needed during holidays and in the summer.
									 It is during these times that the 
									 number of donations declines while the demand continues or even increases.
									 In order to assure that patients who need blood can have access to it immediately, 
									 there must be a ready supply on hospital shelves. After natural disasters and other tragedies, 
									 people tend to donate more blood. However, it is the people who donate regularly whose blood saves lives during									 emergency
									 situations because it is there waiting on the hospital shelves<br/>
                                </p><br/><br/>
								<p class="text_8">
								Major Reasons Patients Need Blood : <br/>

    Cancer treatment<br/>
    Heart and blood vessel disease<br/>
    Disease of the gastrointestinal tract<br/>
    Emergencies such as auto accidents and burns<br/>
    Surgery, Organ transplant, Marrow transplant<br/>
    Blood disorders such as anemia and hemophilia; Sickle cell disease - Thalassemia<br/>

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