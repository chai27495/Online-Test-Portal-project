<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'frcrce.portal@gmail.com';          // SMTP username
$mail->Password = '#frcrce@portal'; 			// SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('frcrce.portal@gmail.com', 'FRCRCE');
$mail->addReplyTo('frcrce.portal@gmail.com', 'Frcrce');
$mail->addAddress('jenni.winisha@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Score Sheet</h1>';
$bodyContent .= '<p>Your Result in $sub is <b> 100%</b></p>';

$mail->Subject = 'Score Sheet';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>