<?php

include '../config.php';
$admin= new Admin();


$cid=$_POST['cid'];
$uid=$_POST['uid'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$res=$_POST['res'];
$stmt1=$admin->cud("DELETE FROM `complaint_res` WHERE `c_id`='$cid'","del");
$stmt=$admin->cud("INSERT INTO `complaint_res`(`c_id`, `lat`, `long`, `u_id`, `response`)
VALUES ('$cid','$lat','$long','$uid','$res')","ins");

$stmt2=$admin->cud("UPDATE `complaint` SET `status`='1' WHERE `complaint_id`='$cid'","update");

$stmt3=$admin->ret("SELECT * FROM `complaint` WHERE `complaint_id`='$cid'");
$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
$e=$row3['email'];
$n=$row3['name'];



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
    $mail->addAddress("$e", "$n");     // Add a recipient
    $otp=rand(1111,9999);

    // $_SESSION['rotp']=$otp;
    $_SESSION['email']=$e;
    // $_SESSION['service_id']=$stmt;
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Postguide';
    $mail->Body    = "<b>Complaint Response:</b>".$res;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
 //    echo 'Message has been sent';

	// header("location: ../home/resendotp.php?id=$stmt");
    echo"<script>alert('response sent successfully');window.location='../employee/viewcomplaint.php'</script>";


    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



