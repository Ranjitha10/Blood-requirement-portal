<html>

<?php

//database configuration
$config['mysql_host'] = "localhost";
$config['mysql_user'] = "root";
$config['mysql_pass'] = "root";
$config['db_name']    = "bloodbank";
$config['table_name'] = "donor";
 
//connect to host
$con=mysqli_connect($config['mysql_host'],$config['mysql_user'],$config['mysql_pass']);
//select database
mysqli_select_db($con,$config['db_name']) or die( "Unable to select database");
$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";

$root_element = $config['table_name']."s"; //fruits
$xml         .= "<$root_element>";
//select all items in table
$sql = "SELECT * FROM ".$config['table_name'];
 
$result = mysqli_query($con,$sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}
 
if(mysqli_num_rows($result)>0)
{
   while($result_array = mysqli_fetch_assoc($result))
   {
      $xml .= "<".$config['table_name'].">";
 
      //loop through each key,value pair in row
      foreach($result_array as $key => $value)
      {
         //$key holds the table column name
         $xml .= "<$key>";
 
         //embed the SQL data in a CDATA element to avoid XML entity issues
         $xml .= "<![CDATA[$value]]>";
 
         //and close the element
         $xml .= "</$key>";
      }
 
      $xml.="</".$config['table_name'].">";
   }
}
//close the root element
$xml .= "</$root_element>";
 
//send the xml header to the browser
//header ("Content-Type:text/xml");
 
//output the XML data
$handle = fopen($config['db_name'].'backup'.'.xml','w+');
	fwrite($handle,$xml);
	fclose($handle);
	
?>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<button type="button" onclick="loadDoc()">Get information</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  }
  xhttp.open("GET", "bloodbankbackup.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>ID</th><th>Name</th><th>Phone No.</th><th>Email id</th><th>DOB</th><th>Gender</th><th>Age</th><th>Blood Group</th><th>Area</th><th>Aid</th></tr>";
  var x = xmlDoc.getElementsByTagName("donor");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("d_id")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
	 x[i].getElementsByTagName("ph_number")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("email_id")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("dob")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("gender")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("age")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("blood_group")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("area")[0].childNodes[0].nodeValue +
    "</td><td>" +
	 x[i].getElementsByTagName("a_id")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
</html>
