<?php

require_once "vendor/autoload.php";

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "oliviorsneto@gmail.com";                 
$mail->Password = "olivioapkchile";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "oliviorsneto@gmail.com";
$mail->FromName = "Stefanini Powering Your Business";

$mail->addAddress("olivio_sjc@live.com", "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "Archive PDF - Emails selecteds !";
$mail->Body = "This is an example of an email to be sent to the selected email! ";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    //echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Check your email !";
}