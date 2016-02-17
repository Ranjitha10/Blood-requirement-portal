function checkForm() {
// Fetching values from all input fields and storing them in variables.

var email = document.getElementById("email1").value;
var Old_Password = document.getElementById("password1").value;
var New_Password = document.getElementById("password2").value;

//Check input Fields Should not be blanks.
if (email == '' || Old_Password == ''||New_Password == '' ) {
alert("Fill All Fields");
} else {
//Notifying error fields
var email1 = document.getElementById("email");
var password1 = document.getElementById("Old_Password");
var password2 = document.getElementById("New_Password");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (email1.innerHTML == 'Invalid email'|| password1.innerHTML == 'Password too short' || password2.innerHTML == 'Password too short') {
alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='newpass.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation2.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}