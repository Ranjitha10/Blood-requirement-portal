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
    <script src="js/.php5shiv.js"></script>
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
<section id="content">
<div class="camera-wrapper">
    <div id="camera" class="camera-wrap">
        <div data-src="images/blood.jpg">
            <div class="fadeIn camera_caption">
                <h2 class="text_1 color_1">Solutions that you need!</h2>
				 <a class="btn_1" href="about.php">More info</a>
          
            </div>
        </div>
        <div data-src="images/blood1.jpg">
            <div class="fadeIn camera_caption">
                <h2 class="text_1 color_1">Choose a required blood group!!</h2>
                
            </div>
        </div>
        <div data-src="images/blood2.jpg">
            <div class="fadeIn camera_caption">
                <h2 class="text_1 color_1">Select a location!!</h2>
               
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wrap_1 wrap_5">
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_1"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="info1.php">What is blood requirement portal?</a></h3>
                <p class="text_3 color_2 maxheight">
                Blood banks collect, store, and provide blood. Typically, these banks collect blood from voluntary blood donors.This portal helps general public at the time of emergency such as accident or any operation.
                </p>
                </div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_2"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="info2.php">Why this portal?</a></h3>
                <p class="text_3 color_2 maxheight">
                   Portal helps us to meet emergency blood requirement during these situations:<br/>
				   
    *Cancer treatment<br/>
    *Heart and blood vessel disease<br/>
    *Disease of gastrointestinal tract<br/>
    *Emergencies such as accidents<br/>
    
                 </p>
		</div>
             
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_3"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="info3.php">F.A.Q</a></h3>
                <p class="text_3 color_2 maxheight">
                     *Who can be a donor?<br/>
					 *How can I register to be donor?<br/>
					 *How to send information for donors?<br/>
					 *How quick is connection?<br/>
					 *DO I need an appointment?<br/>
					 
                </p>
            </div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_4"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="info4.php">Who can donate?</a></h3>
                <p class="text_3 color_2 maxheight">
                     You are eligible to donate if you are at least 17 years of age, 
					 weigh a minimum of 110 pounds and are in general good health.t is completely safe to donate blood. 
					 
					 
                </p>
           
        </div>
    </div>
</div>
<div class="bg_1 wrap_2 wrap_4">
    <div class="container">
        <div class="row">
            <div class="preffix_2 grid_8">
                <h2 class="header_1 wrap_3 color_3">
				 <div class="icon_5"></div>
                  <a href="statistics.php"> STATISTICS</a>
                </h2>
            </div>
        </div>
		
    </div>
</div>
<div class="container">
    <div class="row wrap_1">
        <div class="grid_6">
            <div class="wrap_6">
                <div class="box_2 maxheight2">
                    <div class="put-left"><img src="images/index_img01.png" alt="Image 1"/></div>
                    <div class="caption">
                        <h3 class="text_2 color_2">
                            Save Your Time <br/>
                            with Us
                        </h3>
                        <p class="text_3">
                           This portal provides the quickest way to send request to blood to potential donors. 
						   You don't have to login to send request. Access our portal, type in the required blood group, the area where it is needed, and communicate with donors directly.
                        </p>
                       
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="grid_6">
                <div class="wrap_6">
                    <div class="box_2 maxheight2">
                        <div class="put-left"><img src="images/index_img02.png" alt="Image 2"/></div>
                        <div class="caption">
                            <h3 class="text_2 color_2">
                                The Highest <br/>
                                Quality Services
                            </h3>
                            <p class="text_3">
                               This portal contains only the information about verified donors, living in your vicinity. Hence the information will be sent only to legit people.
							   This makes the contact quicker and provides you with highest quality services 24*7.
                            </p>
                       
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
           
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