<?php

include '../config.php';
$admin= new Admin();
$email=$_SESSION['email'];

if($_POST['otp']==$_SESSION['rotp']){
  $name="";
     $uid=$_SESSION['uid'];
    $sid=$_SESSION['service_id'];
    $trackid=rand(1111111,9999999);
     $stmt=$admin->cud("INSERT INTO `trackid`(`tracku_id`, `uid`,`service_id`) VALUES ('$trackid','$uid','$sid')","ins");
     
     $stmt1=$admin->ret("SELECT * FROM `service_request` WHERE `sr_id`='$sid'");
     $row=$stmt1->fetch(PDO::FETCH_ASSOC);
       $service=$row['subs_ervice'];
       $sub=$row['subs_ervice'];
     if($service=='POSB Deposit'){

        echo "<script>alert('request submitted successfully');window.location='../home/posbdeposit.php?reqid=$stmt'</script>";
   
    }else if($service=='POSB Withdrawal'){
        echo "<script>alert('request submitted successfully');window.location='../home/posbwithdrawal.php?reqid=$stmt'</script>";
    }else if($service=='Account Opening'){
        echo "<script>alert('request submitted successfully');window.location='../home/openac.php?reqid=$stmt'</script>";
    }else if($service=='e-money order'){
        echo "<script>alert('request submitted successfully');window.location='../home/e-money_order.php?reqid=$stmt'</script>";
    }else if($service=='internet /mobile banking'){

        echo "<script>alert('request submitted successfully');window.location='../home/internet.php?reqid=$stmt'</script>";


    }else if($service=='PIL online payment'){
     echo "<script>alert('request submitted successfully');window.location='../home/chooseins.php?sub=$service'</script>";

    }else if($service=='Deposit'){
        echo "<script>alert('request submitted successfully');window.location='../home/posbdeposit.php?reqid=$stmt'</script>";

    }else if($service=='withdrawal'){
        echo "<script>alert('request submitted successfully');window.location='../home/posbdeposit.php?reqid=$stmt'</script>";

    }else if($service=='Amazon'){
        echo "<script>alert('request submitted successfully');window.location='https://www.amazon.in/'</script>";
    }else if($service=='Flipkart'){
        echo "<script>alert('request submitted successfully');window.location='https://www.flipkart.com/'</script>";

    }else if($sub=='mailbooking' || $sub=='mail delivary' ){
        echo "<script>alert('request submitted');window.location='../home/postt.php?reqid=$stmt'</script>";

     
    }
 }else{
 
     echo "<script>alert('wrong otp');window.location='../home/resendotp.php'</script>";
     
 
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

    $_SESSION['trackid']=$otp;
    $_SESSION['email']=$email;




    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Postguide';
    $mail->Body    = "<b>helo..$name your trackid  $trackid</b>";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail';
   if($_POST['otp']==$_SESSION['rotp']){
    $mail->send();
    echo 'Message has been sent';
    if($service=='POSB Deposit'){

        echo "<script>alert('request submitted successfully');window.location='../home/posbdeposit.php?reqid=$stmt'</script>";
   
    }else{
   
   
   
        echo "<script>alert('request submitted');window.location='../home/postt.php?reqid=$stmt'</script>";
    }
   }else{
    echo "<script>alert('wrong otp');window.location='../home/resendotp.php'</script>";

   }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>