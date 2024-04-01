<?php
include '../config.php';

$admin=new Admin();

$name=$_POST['name'];
$password=$_POST['password'];
$mail=$_POST['mail'];
$address=$_POST['address'];
$ph_no=$_POST['ph_no'];

$login=$admin->cud("INSERT INTO `user_registration`( `user_name`, `password`, `mail`, `address`, `ph_no`) VALUES ('$name','$password','$mail','$address','$ph_no')","login sucessful");
echo"<script>alert('Registration sucessfull');window.location='../rlogin/login.php'</script>";


?>

