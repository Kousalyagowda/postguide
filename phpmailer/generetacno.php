<?php

include '../config.php';
$admin= new Admin();
$email=$_GET['email'];
$name =$_GET['name'];
$pin=$_GET['pin'];
$uid=$_GET['uid'];
$rid=$_GET['rid'];
$adhar=$_GET['adhar'];
echo $acno=rand(111111111,999999999);

echo $ifsc=rand(11111,99999);

$stmt=$admin->cud("INSERT INTO `user_acc`(`acc_no`, `ifsc_code`, `pincode`, `user_id`,`adhar_no`) VALUES ('$acno','POST$ifsc','$pin','$uid','$adhar')","ins");

$stmt1=$admin->cud("UPDATE `acc_open` SET `status`='1' WHERE `acc_id`='$rid'","up");

// $stmt2=$admin->cud("UPDATE `service_request` SET `status`='1' WHERE `acc_id`='$stmt'","up");




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
    $mail->Username   = 'postguide50@gmail.com';                     // SMTP username
    $mail->Password   = 'cccyqjahfkcattyq';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('postguide50@gmail.com', 'Postguide1');
    $mail->addAddress("$email", "$name");     // Add a recipient
    $otp=rand(1111,9999);

    $_SESSION['otp']=$otp;
    $_SESSION['email']=$email;
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Postguide';
    $mail->Body    = "<b>hello..$name Your account has been created successfully...<br> Account number:-$acno<br>IFSC code:-POST$ifsc </b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo 'Message has been sent';
	header("location: ../employee/viewaccopen.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}