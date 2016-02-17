<html>
<?php



$str = '<?xml version="1.0" encoding="UTF-8"?><entrys></entrys>';
$xml = simplexml_load_string($str);

$fname = $_POST['donorname'];
$bg = $_POST['bloodgroup'];
$location = $_POST['location'];
$description = $_POST['desc'];

$fname = htmlentities($fname, ENT_COMPAT, 'UTF-8', false);
$bg = htmlentities($bg, ENT_COMPAT, 'UTF-8', false);
$location = htmlentities($location, ENT_COMPAT, 'UTF-8', false);
$description = htmlentities($description, ENT_COMPAT, 'UTF-8', false);

$xml->reports = "";
$xml->reports->addChild('fname', $fname);
$xml->reports->addChild('bg', $bg);
$xml->reports->addChild('location', $location);
$xml->reports->addChild('description', $description);

$doc = new DOMDocument('1.0');
$doc->formatOutput = true;
$doc->preserveWhiteSpace = true;
$doc->loadXML($xml->asXML(), LIBXML_NOBLANKS);
$doc->save('test2.xml');

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
  xhttp.open("GET", "test2.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Name</th><th>Blood Group</th><th>Area</th><th>Description</th></tr>";
  var x = xmlDoc.getElementsByTagName("entrys");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("fname")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("bg")[0].childNodes[0].nodeValue +
    "</td><td>" +
	 x[i].getElementsByTagName("location")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
</html>
