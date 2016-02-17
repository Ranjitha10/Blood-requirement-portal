<?php
session_start();

?>
<!--!DOCTYPE html-->
<html lang="en">
<head>
	
	 <title>Blood Requirement Portal</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/TMForm.js'></script>
	
	<link rel="stylesheet" href="css/my_style.css" type="text/css" media="screen">
	<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
	<script src="js/tabs.js" type="text/javascript"></script>
	
	<?php
	
if(isset($_POST['name'])){
	//echo "gotcha=5;\n";
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="bloodbank";
  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
        die('Connection Failed'.mysqli_error());
}
$msg= "Feed Back by : {$_POST['name']} Email id : {$_POST['email']} Phone number : Email id : {$_POST['phno']} Feed back - {$_POST['area']} ";

	?>
	
	<script type="text/javascript">	
	
	$( 
	function (){
		msg = '<?php echo $msg; ?>';

		//alert(msg);   
$.get("mailer/examples/yahoo1.php",	{m:msg })
.done(finish);
	}		
                                             	

);

	function finish(data){
		if(data.indexOf('failed')==-1)
			$('h3').php("Sent");
		else
			$('h3').php(data);
		a=data;
		console.log(data);
	}

	
	

</script>
<?php } ?>	

</head>
	
<body>
<div class="page">
  <!--==============================header=================================-->
       
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
                            <li><a href="e_ask.php">Ask for Blood</a>
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
                            <li class="current"><a href="e_contacts.php">Contact Us</a></li>
                          
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
  <!--==============================content================================-->
  <section id="content">
   <br/><br/> <div class="container">
      <div class="row wrap_1">
        <div class="wrap_6">
          
            <h3>Your request is sent....</h3>
            
          
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
  </section>
</div>
 
  <!--==============================footer=================================--><footer>
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
