<?php
session_start();

$hostname="localhost"; 
$username="root"; 
$password="root"; 
$database="bloodbank";
  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
        die('Connection Failed'.mysqli_error());
}



// username and password sent from form 
$email=$_REQUEST['email']; 
$password=$_REQUEST['password']; 
$password=md5($password);
//echo md5('#geethaise');
//echo $password;

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);


$sql="SELECT name FROM admin WHERE email_id='$email' and password_a='$password'";

$result=mysqli_query($con,$sql);
	
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// Mysql_num_row is counting table row
if($count==1)
{
	
	//this is admin
		$row=mysqli_fetch_assoc($result);
		session_regenerate_id();
		$_SESSION['email'] =$email;
		$_SESSION['name'] =$row['name'];
		$_SESSION['type'] = 'admin';
		session_write_close();
// Register $myusername, $mypassword and redirect to file "login_success.php

header("Location:index.php");

}
else
{
	


$sql1="SELECT name FROM system_user WHERE email_id='$email' and password_s='$password'";



$result1=mysqli_query($con,$sql1);
// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);



// Mysql_num_row is counting table row
if($count1==1)
{

// Register $myusername, $mypassword and redirect to file "login_success.php"8

	//this is suser
		$row=mysqli_fetch_assoc($result);
		session_regenerate_id();
		$_SESSION['email'] =$email;
		$_SESSION['name'] =$row['name'];
		$_SESSION['type'] = 'suser';
		session_write_close();

header("Location:s_index.php");
}

else {
echo "Wrong Username or Password";
}


}






	

?>