<?php

include('../config.php');
$admin=new Admin();
$email=$_SESSION['email'];

$grandtotal=$_SESSION['tp'];

$name = "";
$query=$admin->ret("select *from `retailer` WHERE `C_Email`='$email'");

while($row=$query->fetch(PDO::FETCH_ASSOC))
{
$name=$row['C_Name'];

}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ashurabca@gmail.com';                     // SMTP username
    $mail->Password   = 'Ashurath123!@#';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ashurabca@gmail.com', 'E-STOCk');
    $mail->addAddress("$email", "$name");     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'E-STOCk';
    $mail->Body    = "<b>helo..$name we recive your purchase request; we'll be touch you shortly...<br>your purchase total Amount is:$grandtotal</b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo 'Message has been sent';
	header("location: ../elogin/reenter.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}sa