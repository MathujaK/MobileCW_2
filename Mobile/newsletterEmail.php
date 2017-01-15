<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$email = $_POST['signup-email'];

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'PubPassion224@gmail.com';          // SMTP username
$mail->Password = 'pubpassion'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('PubPassion224@gmail.com', 'Mathuja Ketheeswaran');
$mail->addReplyTo('PubPassion224@gmail.com', 'Mathuja Ketheeswaran');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Sending Email From Pubpassion Hotel</h1>';
$bodyContent .= '<p>First subscription Letter from us <b>offline</b></p>';

$mail->Subject = 'Email from Pub passion By Pub passion management';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
	
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	// visit our site www.studyofcs.com for more learning
}

