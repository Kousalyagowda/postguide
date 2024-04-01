<?php 
include '../config.php';
$admin=new Admin();

$pass=$_POST['pass'];
$email=$_SESSION['email'];
$stmt=$admin->cud("UPDATE `user_registration` SET  `password`='$pass' WHERE `mail`='$email'","up");
echo "<script>alert('change password');window.location='../rlogin/login.php'</script>";

?>