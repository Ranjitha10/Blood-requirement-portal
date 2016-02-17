<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:login.php");
exit;}
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
   <title> Blood Requirement Portal</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
   
</head>
<body>
<form name="lsrReports" action="xmlinterface1.php" method="post">
<table width="50%" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td> DonorName:</td><td> <input type="text" name="donorname"></td>
    <td> BloodGroup:</td><td>  <input type="text" name="bloodgroup"></td>
  </tr>
  <tr>
    <td> Location:</td><td> <input type="text" name="location"></td>
   
  </tr>
  <tr>
     <td> Description: </td><td colspan="4"> <textarea rows="5" cols="65" name="desc" onfocus="this.value=''">Enter report description</textarea></td>
  </tr>
  <tr>
     <td colspan="4" style="text-align:center;"><input type="submit" name="lsr-submit" value="Submit"></td>
  </tr>
</table>
</form>
</body>
</html>