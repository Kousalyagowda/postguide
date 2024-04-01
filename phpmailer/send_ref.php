<?php

include '../config.php';
$admin= new Admin();



$s=$_GET['S'];
$sid=$_GET['sid'];
$no=rand(11111111,99999999);

$stmt=$admin->cud("UPDATE `service_request` SET `status`='$s', `ref_no`='$no' WHERE `sr_id`='$sid'","up");


$stmt3=$admin->ret("SELECT * FROM `service_request` WHERE `sr_id`='$sid'");
$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
$u_id=$row3['u_id'];


$stmt4=$admin->ret("SELECT * FROM `payment` WHERE `sreqid`='$sid'");
$row4=$stmt4->fetch(PDO::FETCH_ASSOC);
echo $amount=$row4['total'];

$stmt5=$admin->ret("SELECT * FROM `wallete` WHERE `user_id`='$u_id'");
$row5=$stmt5->fetch(PDO::FETCH_ASSOC);
 $ava=$row5['w_amount'];

echo $a=$ava-$amount;

$stmt6=$admin->cud("UPDATE `wallete` SET `w_amount`='$a' WHERE `user_id`='$u_id'","up");


   

$stmt2=$admin->ret("SELECT * FROM `user_registration` WHERE `user_id`='$u_id'");
$row2=$stmt2->fetch(PDO::FETCH_ASSOC);
$e=$row2['mail'];
$n=$row2['user_name'];




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
    

    // $_SESSION['rotp']=$otp;
    $_SESSION['email']=$e;
    // $_SESSION['service_id']=$stmt;
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Postguide';
    if ($s==1) {
        $mail->Body    = "<b>Resquest Approved Ref NO.: </b>".$no."and ava amount: ".$a;
    }
    else {
        $mail->Body    = "<b>Resquest Rejected </b>";
    }
    
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';

    $mail->send();
 //    echo 'Message has been sent';

	// header("location: ../home/resendotp.php?id=$stmt");
    echo"<script>alert('Updated successfully');window.location='../employee/withdrawalreq.php'</script>";
    


    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





