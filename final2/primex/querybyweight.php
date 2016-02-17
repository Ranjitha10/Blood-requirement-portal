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
	<center>
<h3>Report by Weight </h3>
                   
                        <form method="post" action="">
                            
								  Weight above <br/> <input type="number" name="weight" value="50" min="50" max="100" required /> 
								  
                                    <input type="submit"  />
                        </form>
						<form method="get" action="statistics.php">
   </form>	      <br><br><br>
                <?php
                    if(isset($_POST['weight']))
                    {
                        $con=mysqli_connect("localhost","root","root","bloodbank");
                        if (!$con)
                        {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            exit();
                        }
                        
                        echo "The donors above weight are ".$_POST['weight']." are:<br/><br/>";
						
						
						$query="select * from donor left join donor_details on donor.d_id = donor_details.d_id  
						where donor_details.weight>='{$_POST['weight']}'";
                        
						//$query="SELECT * from donor_details where weight = '{$_POST['weight']}'";
						//echo $query;
						$result=mysqli_query($con,$query);
				   
                     /*   if($result === FALSE ) 
                        {
                            echo "No one found!";
                        }
                        
                        else */ if(isset($result) and $result != FALSE)
                        {                       
                            if($result->num_rows>0)
                            {
                            ?>
                                <div>
                                <table border=1>
                                    
                                <thead>
                                    <tr>
										<th>ID</th>
										<th>Name</th>
										<th>Phone Number</th>
										<th>E-mail</th>
                                        <th>Height</th>
										<th>Weight</th>
                                        <th>BMI</th>
                                        
                                    </tr>
                                </thead>

                            <?php
                            while($row = mysqli_fetch_assoc($result))
                            {
							
								//var_dump($row);
                                echo "<tr>";
                                echo "<td valign=middle align=center>" . $row['d_id'] . "</td>";
								echo "<td valign=middle align=center>" . $row['name'] . "</td>";
								echo "<td valign=middle align=center>" . $row['ph_number'] . "</td>";
								echo "<td valign=middle align=center>" . $row['email_id'] . "</td>";
                                echo "<td valign=middle align=center>" . $row['height'] . "</td>";
								echo "<td valign=middle align=center>" . $row['weight'] . "</td>";
                                echo "<td valign=middle align=center>" . $row['bmi'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</div>";
                            echo "</div>";
                        }
                        else
                        echo "No entries!";
                    }
                    else
                    echo "No entries!";
                    mysqli_close($con); 
                }
                
    
                ?>
</center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" style="background:#129894">
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
