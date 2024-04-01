<?php

include '../config.php';
$admin= new Admin();


echo $ctid=rand(11111,99999);

$name=$_POST['name'];

$email=$_POST['email'];
$complaint=$_POST['feedback'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$uid=$_SESSION['uid'];
// $stmt=$admin->ret("SELECT * FROM `acc_open` WHERE `user_id`='$uid'  ");
// $post=$stmt->fetch(PDO::FETCH_ASSOC);

$pincode=$_POST['pin'];

$stmt=$admin->Rcud("INSERT INTO `complaint`(`name`, `email`, `complaint`,`latitude`, `longitude`,`uid`,`pincode`) VALUES ('$name','$email','$complaint','$lat','$long','$uid','$pincode')","ins");
$stmt2=$admin->cud("INSERT INTO `complaint_track`(`c_id`, `user_id`, `track_id`) VALUES ('$stmt','$uid','$ctid')","ins");
// echo"<script>alert('complaint send success fully');window.location='../home/index.php'</script>";

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
    $mail->Body    = "<b>hello..$name Your complaint  sent successfully...<br> Complaint track id:-$ctid </b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo "<script> alert('Message has been sent'); </script>";
	header("location: ../home/index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}