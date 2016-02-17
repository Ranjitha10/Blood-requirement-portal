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
    
	
<?php
   			 
$hostname="localhost";
$username="root";
$password="root";
$database="bloodbank";
$con=mysqli_connect($hostname,$username,$password,$database);
            	?>
 
	
 <a href="login.php" style="padding-left:1100px; padding-top:20px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;





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
                            <li><a href="s_index.php">Home</a></li>
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
                            <li class="current"><a href="s_settings.php">Settings</a></li>
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
 <form action = "" method = "post">
                                <div class="form-group">
                                	<div class="input-group">
   									 
   									 <?php
   									  if(isset($_POST['donorid']) && !isset($_POST['name']))
   										 {
											 //echo "hey if";
											  // echo $_POST['email_id'];
											  
   										 $query="select * from donor where d_id='{$_POST['donorid']}'";
   										 $result=mysqli_query($con,$query);
   										 $row=mysqli_fetch_assoc($result);
   										 ?>
   									 <select class = "form-control" name="donorid" >
                                        	<option value="<?php echo $_POST['donorid']; ?>" selected><?php echo $_POST['donorid']." ".$row['name']." ".$row['email_id']; ?> </option>
   									 </select>
<br>
   									 <input class = "form-control" type="text" name="name" aria-describedby="name-format" required aria-required=”true” pattern="[.A-Za-z ]*" value="<?php echo $row['name']; ?>" />
	<br>								 
   									 <input class = "form-control" type="text" maxlength="10" name="ph_number" required aria-describedby="name-format" required aria-required=”true” pattern="[789][0-9]{9}" value="<?php echo $row['ph_number'];	?>" />
		<br>							 
									 <input class = "form-control" type="email" name="email_id" required value="<?php echo $row['email_id'];	?>" />
			<br>						 
									 <input class = "form-control" type="date" name="dob" required value="<?php echo $row['dob'];	?>" />
				<br>	
				<input class = "form-control" type="text" maxlength="3" name="age" required aria-describedby="name-format" required aria-required=”true” pattern="[0-9]*" value="<?php echo $row['age'];	?>" />
						<br>				
						<!--<label>Gender
						<select class="border" name="gender" >
							
							<option value="M">M</option>
							<option value="F">F</option>						
						</select  value="<?php echo $row['gender'];	?>">
                </label>		<br> -->		
									<input class = "form-control" type="text" maxlength="1" name="gender" aria-describedby="name-format" required aria-required=”true” pattern="M||F" value="<?php echo $row['gender'];	?>" />
					<br>			 
						
				
<input class = "form-control" type="text" maxlength="3" name="blood_group"  aria-describedby="name-format" required aria-required=”true” pattern="(A|B|AB|O)[/+/-]" value="<?php echo $row['blood_group'];	?>" />
							<br>
									
							<!--<label>Area<select class="border" name="area">
							
							<option value="Bangalore North">Bangalore North</option>
							<option value="Bangalore South">Bangalore South</option>
							<option value="Bangalore East">Bangalore East</option>
							<option value="Bangalore West">Bangalore West</option>
				</select value="<?php echo $row['area'];	?>" >
                </label>	<br>	-->							
				<input class = "form-control" type="text" name="area" aria-describedby="name-format" required aria-required=”true” pattern="Bangalore North||Bangalore South||Bangalore East||Bangalore West" value="<?php echo $row['area'];	?>" />
								<br>
									 <br>
										
									<button type="submit" class="btn btn-lg btn-danger">MODIFY</button>	
   						 									
   									 <!-- similarly for all columns -->
   										 <?php
   										 
   										 }else if(isset($_POST['donorid']) && isset($_POST['name'])){
   										 //echo "hey elseif";
										 //echo $_REQUEST['email_id'];
   										 $query1="update donor set name= '{$_POST['name']}', ph_number='{$_POST['ph_number']}', email_id= '{$_POST['email_id']}', dob= '{$_POST['dob']}', age= '{$_POST['age']}', gender= '{$_POST['gender']}', blood_group= '{$_POST['blood_group']}', area= '{$_POST['area']}' where d_id='{$_POST['donorid']}' ";
										 
										 //echo $query1;
										 echo "Successfully Modified";
										 
   										 $result1=mysqli_query($con,$query1);
										 //var_dump($con);
										 // $result2=mysqli_query($con,$query2);
   										 }   								 
   										 else {
   										 ?>
   										 
   										 
                                     	<select class = "form-control" name="donorid" onchange="document.forms[0].submit()">
                                        	<option value=0 selected disabled required>Choose a donor </option>
                                        	<?php
                                                	//$con=mysqli_connect($hostname,$username,$password,$database);
                                                	$query="SELECT d_id,name from donor";
                                                	$result=mysqli_query($con,$query);
                                                	while($row=mysqli_fetch_assoc($result))
                                                	{
                                                 	echo "<option value=".$row['d_id'].">".$row['d_id']." ".$row['name']."</option>";
                                                	}
                                                	mysqli_close();
                                        	?>
                                    	</select>
   									 
   									 <?php } ?>
                                	</div>
                            	</div>
                            	
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
