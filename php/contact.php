<?php 
error_reporting(E_ALL);
require("PHPMailer/PHPMailerAutoload.php");

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Enable SMTP debugging.
$mail->SMTPDebug = 1;   



//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "mail.codewills.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "noreply@codewills.com";                 
$mail->Password = ",hB$U=N+kWPm";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                

$mail->From = "site@codewills.com";
$mail->FromName = "Site Admin";

$mail->addAddress("akhil.s@hashroot.com", "Akhil S");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

/*

// ADD your Email and Name
$recipientEmail='vivek.sahu@hashroot.com';
$recipientName='Vivek';

//collect the posted variables into local variables before calling $mail = new mailer

$senderName = 'Sahu';
$senderEmail = 'vivek.hashroot@gmail.com';
$senderSubject = 'New Message From' . $senderName . $senderEmail;
$senderMessage = 'contact-message';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Set who the message is to be sent from
$mail->setFrom($recipientEmail, $recipientName);
//Set an alternative reply-to address
$mail->addReplyTo($recipientEmail,$recipientName);
//Set who the message is to be sent to
$mail->addAddress($recipientEmail, $senderName );
//Set the subject line
$mail->Subject = $senderSubject;

$mail->Body = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->AddAddress($recipientEmail, $recipientName);

//$mail-&gt;AddAttachment("images/phpmailer.gif"); // attachment
//$mail-&gt;AddAttachment("images/phpmailer_mini.gif"); // attachment

//now make those variables the body of the emails

$mail->Body="
Name: $senderName<br/>
Email: $senderEmail<br/>
Suburb: $senderSubject<br/>
Message: $senderMessage";

if(!$mail->Send()) {
	echo '<div class="alert alert-danger" role="alert">Error: '. $mail->ErrorInfo.'</div>';
} else {
	echo '<div class="alert alert-success" role="alert">Thank you. We will contact you shortly.</div>';
}
*/
?>