<?php
include '../config.php';
$admin = new Admin();


if($_POST['otp']==$_SESSION['trackid']){
    $trackid=$_SESSION['trsckid'];
    $uid=$_SESSION['uid'];
    $stmt=$admin->cud("INSERT INTO `trackid`(`tracku_id`, `uid`) VALUES ('$trackid','$uid')","ins");
    echo "<script>window.location='../home/trackservice.php'</script>";
}else{

    echo "<script>alert('wrong otp');window.location='../home/resendotp.php'</script>";
    

}


?>