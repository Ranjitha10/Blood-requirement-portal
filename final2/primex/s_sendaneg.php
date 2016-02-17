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
	//echo "a=5;";
	//var_dump($_POST);
	//echo "*/";
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
$msg= "{$_POST['name']} needs blood A- at hospital-{$_POST['hospital']}({$_POST['area']}) \\nContact: {$_POST['phno']} / {$_POST['email']}";

//echo ($msg);

$sql="SELECT ph_number, email_id from donor where blood_group='A-' and area='{$_POST['area']}' ";


$res=mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($res);
//echo $num_rows;
$phnos="";
$emails="";
while($row=mysqli_fetch_assoc($res)) { 
	$phnos.=$row['ph_number'].' ';
	$emails.=$row['email_id'].' ';
	}
	/*
	echo http_get ("hell/sms.php", array("special" => "selene", 'sub' =>'way2sms', 'm'=> $msg , 'c[]' => $phnos))."<hr>";
	echo http_get ("mailer/examples/yahoo.php", array( 'm'=> $msg , 'to' => $emails));
	*/
	
	?>
	
	<script type="text/javascript">	
	
	$( //dcument.ready
	function (){
		msg = '<?php echo $msg; ?>';
		msg1= '<?php echo " Number of donors = "; echo $num_rows; ?>';
		alert(msg1);
		
	/*	msg2= '<?php echo $num_rows; ?>';
		alert("The number of donors available are "msg2); */

	$.get( "http://shu.16mb.com/hell/sms.php", 	{'c[]': '<?php echo $phnos ; ?>' , special: 'selene', sub:'way2sms', m:msg, 
		//u:'ppg9DzcJcgO6LxildJ1wwbSnJJ0cZIWFG+4WoLv0J0w=', q: 'AIxoia8bLOjH3MZTXF79b4+NaXkpJ+zXz5CjnobRXDg='
		u:'r2WGChBGQ7uj5jnKt91JVnx5pSsSx/SnlcqykrFsDWk=', q:'fzYEdul0pFZthy2HicmgkOhIkwU74UpDxUUqbC1jaIE='
	});//.done(finish);
	$.get("mailer/examples/yahoo.php",	{m:msg , to: '<?php echo $emails ; ?>'	}).done(finish);
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
                            <li><a href="s_index.php">Home</a></li>
                            <li class="current"><a href="s_ask.php">Ask for Blood</a>
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