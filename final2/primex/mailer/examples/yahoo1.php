<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.mail.yahoo.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 25;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "aparnajoshi55@yahoo.com";

//Password to use for SMTP authentication
$mail->Password = "bloodbankmanagement55";

//Set who the message is to be sent from
$mail->setFrom('aparnajoshi55@yahoo.com', 'Blood Requirement Portal');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
	$mail->addAddress('aparnajoshi55@yahoo.com', 'Blood Requirement Portal');

//Set the subject line
$mail->Subject = 'FEED BACK FOR BLOODBANK MANAGEMENT SYSTEM';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
if(isset($_REQUEST['m'])){
	$mail->msgHTML('<html>
<body>
  <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
    <h1>Feed Back</h1>
    <div align="center">
	'.preg_replace("/\n/","<BR>",$_REQUEST['m']).'
    </div>
    <p></p>
    <p>Thank you</p>
  </div>
  <small>Blood bank management system.</small>
</body>
</html>
');

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
}else {
	$mail->msgHTML("test");
	$mail->AltBody = 'test';
}


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
