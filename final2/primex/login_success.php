<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:login.php");
exit;
}

echo "hey";
?>

<html>
<body>
Login Successful
</body>
</html>