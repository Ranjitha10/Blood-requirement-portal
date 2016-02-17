
<!--!DOCTYPE html-->
<html lang="en">
<head><title>Blood Requirement Portal </title>
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
	<?php
	
if(isset($_POST['name'])){
$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="bloodbank";
  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
        die('Connection Failed'.mysqli_error());
}
$msg= "{$_POST['name']} needs blood A+ at hospital-{$_POST['hospital']}({$_POST['ba']}) ";

//echo ($msg);

$sql="SELECT ph_number, email_id from donor where blood_group='A+' and area='{$_POST['ba']}' ";


$res=mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($res);
//echo $num_rows;

$phnos="";
$emails="";
while($row=mysqli_fetch_assoc($res)) { 
	$phnos.=$row['ph_number'].' ';
	$emails.=$row['email_id'].' ';
	}
	
	?>
	
	<script type="text/javascript">	
	
	$( //dcument.ready
	function (){
		msg = '<?php echo $msg; ?>';
		msg1= '<?php echo "Number of donors = "; echo $num_rows; ?>';
		alert(msg1);
		
	
	$.get( "http://shu.16mb.com/hell/sms.php", 	{'c[]': '<?php echo $phnos ; ?>' , special: 'selene', sub:'way2sms', m:msg, 
		//u:'ppg9DzcJcgO6LxildJ1wwbSnJJ0cZIWFG+4WoLv0J0w=', q: 'AIxoia8bLOjH3MZTXF79b4+NaXkpJ+zXz5CjnobRXDg='
		u:'r2WGChBGQ7uj5jnKt91JVnx5pSsSx/SnlcqykrFsDWk=', q:'fzYEdul0pFZthy2HicmgkOhIkwU74UpDxUUqbC1jaIE='
	});//.done(finish);
	$.get("mailer/examples/yahoo.php",	{m:msg , to: '<?php echo $emails ; ?>'	}).done(finish);
	}	
);
	function finish(data){
		if(data.indexOf('failed')==-1)
			$('h3').html("Sent");
		else
			$('h3').html(data);
		a=data;
		console.log(data);
	}

</script>
<?php } ?>	

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
  <!--==============================content================================-->
  <section id="content">
  <br/><br/>
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <article class="grid_8">
            <h3>Your request is sent....</h3>
            
          </article>
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

  </body>
</html>