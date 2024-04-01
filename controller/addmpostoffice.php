<?php
include '../config.php';

$admin=new Admin();

$district=$_POST['district'];
$pincode=$_POST['pincode'];
$contact=$_POST['postphno'];
$link=$_POST['location'];

$login=$admin->cud("INSERT INTO `main_postoffice`( `district`, `pincode`,`contact`,`location`) VALUES ('$district','$pincode','$contact','$link')","sucessfully inserted information");
echo"<script>alert('Added sucessfully');window.location='../admin/managempostoffice.php'</script>";


?>

