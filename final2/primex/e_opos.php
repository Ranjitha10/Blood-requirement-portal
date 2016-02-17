<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Requirement Portal</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/TMForm.js'></script>
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
	
	<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
	<script src="js/tabs.js" type="text/javascript"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    
<a href="login.php" style="padding-left:1100px; padding-top:20px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="donor_registry.php">Be a donor</a>

<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="brand put-left">
					<br>
	
                        <h1>
                            <a href="e_index.php">
                                <img src="images/logo.png" alt="Logo"/>
                            </a>
                        </h1>
						<br>
                    </div>
					<br><br>
                    <nav class="nav put-right">
                        <ul class="sf-menu">
                            <li><a href="e_index.php">Home</a></li>
                           <li class="current"><a href="e_ask.php">Ask for Blood</a>
                               <ul>
                                            <li><a href="e_bpos.php">B+</a></li>
                                            <li><a href="e_bneg.php">B-</a></li>
                                            <li><a href="e_apos.php">A+</a></li>
                                            <li><a href="e_aneg.php">A-</a></li>
                                            <li><a href="e_abpos.php">AB+</a></li>
                                            <li><a href="e_abneg.php">AB-</a></li>
                                            <li><a href="e_opos.php">O+</a></li>
                                            <li><a href="e_oneg.php">O-</a></li>
                                            
                                        </ul>
                            </li>
                            <li><a href="e_about.php">About Us</a></li>
                            <li><a href="e_contacts.php">Contact Us</a></li>
                            
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
        
        <div class="bg_1 wrap_17 wrap_19">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="grid_6">
                           <div class="wrap_18">
                            <h2 class="header_2 indent_5">
                                Information
                            </h2>
                            <address>
                                <p class="text_7 color_6">
                                    This portal gives a quick connection between you and our potential donors.
                                </p>
                                <p class="text_8">
                                    Enter your name<br/>(or name of the person in need of blood)
									<br/>
                                    Phone number to contact you back, <br/>
                                    Email id to contact you back, <br/>
                                    Required blood group, <br/>
                                    Location of blood requirement, <br/>
                                    Hospital name <br/>
                                    And address of the hospital and click on send
                                </p>
								<br/>
								<p class="text_7 color_6">
                                    This will send request for given blood group to all available potential donors.
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="grid_6">
                        <div class="wrap_18">
                            <h2 class="header_2 indent_2">
                                Ask for Blood
                            </h2>
                            <form id="contact-form" action="e_sendopos.php" method="post" enctype="multipart/form-data">
                                <div class="contact-form-loader"></div>
                                <fieldset>
                                    <div class="row">
                                        <div class="grid_2">
                                            <label class="name">
                                                <input type="text" id="name" name="name" placeholder="Name:" value=""
                                                       pattern="[.A-Za-z ]*" required/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid name.</span>
                                            </label>
                                        </div>
                                        
                                        <div class="grid_2">
                                            <label class="name"> Area
                                                <select class="border" name="ba" >
							<!--<option >Blood Group</option>-->
							<option value="Bangalore North">Bangalore North</option>
							<option value="Bangalore South">Bangalore South</option>
							<option value="Bangalore East">Bangalore East</option>
							<option value="Bangalore West">Bangalore West</option>
							
				</select>
                                            </label>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="grid_2">
                                            <label class="name">
                                                <input type="email" name="email" placeholder="E-mail:" required/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid email.</span>
                                            </label>
                                        </div>
                                        <div class="grid_2">
                                            <label class="name">
                                                <input type="text" name="phno" placeholder="Phone Number:" required value="" pattern="[789][0-9]{9}"/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid phone.</span>
                                            </label>
                                        </div>
                                       <div class="grid_2">
                                            <label class="name">
                                                <input type="text" name="hospital" placeholder="Hospital Name:" pattern="[A-Za-z]+||[A-Za-z]+\s[A-Za-z]+" required/>
                                                <span class="empty-message">*This field is required.</span>
                                                <span class="error-message">*This is not a valid email.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <label class="message">
                                        <textarea name="area" id="area" placeholder="Message:" id="area"></textarea>
                                        <span class="empty-message">*This field is required.</span>
                                        <span class="error-message">*The message is too short.</span>
                                    </label>
                                   
                                </fieldset>
                                <input type="submit" value="SEND" style="background:#ff0000; font-weight:bold;  color:#fff; width:100px; height:40px;"> </input>
                           
                            </form>
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