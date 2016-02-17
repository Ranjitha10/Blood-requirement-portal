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
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>

<div class="container">
    
	                <div class="row">
                    <div class="grid_6">
                        <div class="wrap_18">
						<center>
						<h2 class="header_2 indent_5">
                                What is blood requirement portal?
                            </h2>
							
							</center>
					
                                <p class="text_7 color_6">
                                    Welcome to blood requirement portal!!!<br/><br/>
                                   
                                </p>
                                <p class="text_8">
                                     This portal aims at meeting the emergency blood requirements in Bangalore city.<br/>
									 Blood banks collect, store, and provide blood.
									 Typically, these banks collect blood from voluntary blood donors.
									 This project aims at helping general public at the time of emergency,
									 such as accident or any operation, and also gives details about blood donation camp.
									 The databases of all donors are saved efficiently and effectively which would be retrieved,
									 at the time of emergency based need of blood type (blood group) and their residential place.
									 Main focus is laid on donors from RVC. Every day hundreds of people in our communities need blood 
									 and there is no substitute for it.This project provides the critical link between potential blood donors,
									 who generously give the gift of life and the local patients who need this lifesaving gift.<br/>
                                </p><br/><br/>
								<p class="text_8">
								The rotract club of RVCE organizes blood donation camp every year at the campus. The information about the donors is collected at the time of blood donation, which is deleted every year once the event is successfully completed. This data is wasted and doesn’t meet public need. Instead a database could be designed, which keeps records of students information who have donated blood and utilize same for public help
								The blood management system helps to maintain the database of the donors so that the blood can be supplied in case of emergencies. It also helps to intimate the donors about the blood camps.
The blood management system helps to find a donor based on his locality. This system reduces most of the paper work and also error prone entries.

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