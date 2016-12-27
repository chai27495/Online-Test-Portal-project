<?php

if(!empty($_SESSION['username'])){
    $name=$_SESSION['username'];
}
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


$res1=mysql_query("select email from student_master where sid='".$name."'");
$result1=mysql_fetch_array($res1);
$email=$result1['email'];

$res2=mysql_query("select lookup_value_name from parameter_master where lookup_value_code='".$name."'");
$result2=mysql_fetch_array($res2);
$sub=$result2['lookup_value_name'];

$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Score Sheet</h1>';
$bodyContent .= "<p>Your Result in $sub is <b> $percentage %</b></p>";

$mail->Subject = 'Score Sheet';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
//    echo 'Message has been sent';
}
?>