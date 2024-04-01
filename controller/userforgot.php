<?php
include '../config.php';
$admin = new Admin();

if($_POST['otp']==$_SESSION['otp']){

echo "<script>window.location='../rlogin/changepassword.php'</script>";
}else{

    echo "<script>alert('wrong otp');window.location='../rlogin/login.php'</script>";
    

}


?>