<!DOCTYPE html>
<html>

<head>
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon">



  <title>Blood Requirement Portal</title>

  

<link href="css/stylel2.css" rel="stylesheet" type="text/css">
<script src="js/scriptl2.js"></script>



</head>

<body>



<div id="mainform">
<div class="innerdiv">
<!-- Required Div Starts Here -->
<h2>LOGIN</h2>

 <form id="myForm" action="changepassword.php" method="post" name="myForm" >
<h3>Fill Your Information!</h3>
<table>


<tr>
<td>Email</td>
<td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
<td>
<div id='email'></div>
</td>
</tr>
<tr>
<td>Old Password</td>
<td><input id='password1' name='Old_Password' value='Old_Password' onblur="validate('Old_Password', this.value)" type='password'></td>
<td>
<div id='Old_Password'></div>
</td>
</tr>
<tr>
<td>New Password</td>
<td><input id='password2' name='New_Password' value='New_Password' onblur="validate('New_Password', this.value)" type='password'></td>
<td>
<div id='New_Password'></div>
</td>
</tr>


</table>
<input onclick="checkForm()" type='button' value="change password">

<br/><br/>

</form>
	       
</div>  
</div>
	

  </body>
</html>

</body>

</html>