<!DOCTYPE html>
<html>
<head>
 <title>Blood Requirement Portal</title>
<link href="css/stylel.css" rel="stylesheet" type="text/css">
<script src="js/scriptl.js"></script>
</head>
<body>
<div id="mainform">
<div class="innerdiv">
<!-- Required Div Starts Here -->
<h2>LOGIN</h2>
 <form id="myForm" action="checklogin.php" method="post" name="myForm" >
<h3>Fill Your Information!</h3>
<table>
<tr>

<tr>
<td>Email</td>
<td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
<td>
<div id='email'></div>
</td>
</tr>
<tr>
<td>Password</td>
<td><input id='password1' name='password' onblur="validate('password', this.value)" type='password'></td>
<td>
<div id='password'></div>
</td>
</tr>


</table>
<input onclick="checkForm()" type='button' value='Submit'>
<br/><br/>
<a style="color: #0B87AA" href="newpass.php"> Change Password </a>
</form>
	       
</div>
</div>
</body>
</html>