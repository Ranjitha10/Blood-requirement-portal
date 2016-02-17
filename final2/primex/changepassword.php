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
$Old_Password=$_REQUEST['Old_Password']; 
$Old_Password=md5($Old_Password);
$New_Password=$_REQUEST['New_Password']; 
$New_Password=md5($New_Password);
// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$Old_Password = stripslashes($Old_Password);
$New_Password = stripslashes($New_Password);

$sql="SELECT name FROM admin WHERE email_id='$email' and password_a='$Old_Password'";

$result=mysqli_query($con,$sql);
	
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// Mysql_num_row is counting table row
if($count==1)
{
//echo $New_Password;
 $query="update admin set password_a= '$New_Password' where password_a='$Old_Password' ";
//echo $query;
$res1=mysqli_query($con,$query);
										 
header("Location:login.php");

}
else
{
	
$sql1="SELECT name FROM system_user WHERE email_id='$email' and password_s='$Old_Password'";



$result1=mysqli_query($con,$sql1);
// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);



// Mysql_num_row is counting table row
if($count1==1)
{
$query1="update system_user set password_s= '$New_Password' where password_s='$Old_Password' ";
//echo $query;
$res2=mysqli_query($con,$query1);
										 

header("Location:login.php");
}

else {
echo "Wrong Username or Password";
}


}






	

?>