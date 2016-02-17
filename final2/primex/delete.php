<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:login.php");
exit;}
?>
<!--!DOCTYPE html-->
<html lang="en">
<head>
	
	 <title>Blood Requirement Portal</title>
	<meta charset="utf-8">
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
	</head>
<body>
<div class="page">
<header id="header">
	
 <a href="login.php" style="padding-left:1100px; padding-top:20px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;





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
                            <li><a href="index.php">Home</a></li>
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
                            <li class="current"><a href="settings.php">Settings</a></li>
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

	</header><?php						 
	 
$hostname="localhost";
$username="root";
$password="root";
$database="bloodbank";
                	$con=mysqli_connect($hostname,$username,$password,$database);
                	if(isset($_POST['donorid']))
                	{
                    	$id=$_POST['donorid'];
                    	$query1="DELETE from donor where d_id='$id';";
						$query2="DELETE from address where d_id='$id';";
						$query3="DELETE from donor_details where d_id='$id';";
						$query4="DELETE from blood where d_id='$id';";
                    	$result1=mysqli_query($con,$query1);
						$result2=mysqli_query($con,$query2);
						$result3=mysqli_query($con,$query3);
						$result4=mysqli_query($con,$query4);
                     	if($result1){
   						 ?>
						 
	
	
						 
     <div class="alert alert-success">
    	<a href="#" class="close" data-dismiss="alert">&times;</a>
    	<strong>Entry deleted</strong> successfully!
	</div>
    <?php
   					 }
                	}
            	?>
 
 
 <form action = "" method = "post">
                                	<div class="form-group">
                                	<div class="input-group">
                                     	<select class = "form-control" name="donorid" >
                                        	<option value=0 selected disabled required>Choose a donor </option>
                                        	<?php
                                                	$con=mysqli_connect($hostname,$username,$password,$database);
                                                	$query="SELECT d_id,name from donor";
                                                	$result=mysqli_query($con,$query);
                                                	while($row=mysqli_fetch_assoc($result))
                                                	{
                                                 	echo "<option value=".$row['d_id'].">".$row['d_id']." ".$row['name']."</option>";
                                                	}
                                                	mysqli_close();
                                        	?>
                                    	</select>
                                	</div>
                            	</div>
                            	<button type="submit" class="btn btn-lg btn-danger">Remove</button>	 
                         	</form>
							<br>
							<form action="index.php" method="post">
   						 <button type="submit" class="btn btn-lg btn-danger">BACK</button>	 
                         	</form>
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
   						
