<?php
include '../config.php';
$admin = new Admin();


if($_POST['otp']==$_SESSION['rotp']){
  
   echo $uid=$_SESSION['uid'];
   $trackid=rand(11111,99999);
    $stmt=$admin->cud("INSERT INTO `trackid`(`tracku_id`, `uid`) VALUES ('$trackid','$uid')","ins");
    echo "<script>window.location='../home/trackservice.php'</script>";
}else{

    echo "<script>alert('wrong otp');window.location='../home/resendotp.php'</script>";
    

}


?>