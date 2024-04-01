<?php

include '../config.php';
$admin= new Admin();
echo $email=$_POST['email'];
$_SESSION['email']=$email;
$name=$_POST['name'];
$address=$_POST['add'];
$ph_no=$_POST['phone'];
$pincode=$_POST['pin'];
$service=$_POST['service'];
$subservice=$_POST['subservice'];
$id=$_SESSION['uid'];
$stmt=$admin->Rcud("INSERT INTO `service_request`(`u_id`, `name`, `email`, `address`, `pincode`, `contact`, `service`, `subs_ervice`)
 VALUES ('$id','$name','$email','$address','$pincode','$ph_no','$service','$subservice')","ins");


if($service=='Financial services' || $service=='e-com'   || $service=='money order'){

    echo "<script>alert('request submitted successfully');window.location='../home/payment.php?reqid=$stmt'</script>";

}else{



 echo "<script>alert('request submitted successfully.... check your mail we send track id to your mail');window.location='../home/index.php'</script>";
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
    $mail->Username   = 'postguide50@gmail.com';                     // SMTP username
    $mail->Password   = 'cccyqjahfkcattyq';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('postguide50@gmail.com', 'Postguide1');
    $mail->addAddress("$email", "$name");     // Add a recipient
    $otp=rand(1111,9999);

    $_SESSION['rotp']=$otp;
    $_SESSION['email']=$email;
    $_SESSION['service_id']=$stmt;
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Postguide';
    $mail->Body    = "<b>helo..$name your otp for Confirm service request $otp</b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
    echo 'Message has been sent';

	header("location: ../home/resendotp.php?id=$stmt");

    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}