<?php
include '../config.php';

$admin=new Admin();

$address=$_POST['address'];
$pincode=$_POST['pincode'];

$postbranch=$_POST['postbranch'];
$contact=$_POST['postphno'];
$link=$_POST['link'];
$postimg=$_FILES["postimg"]["name"];
move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);
$district=$_POST['dist'];

$login=$admin->cud("INSERT INTO `postoffice`( `address`, `pincode`, `postimg`,`district`,`postbranch`,`contact`,`location`) VALUES ('$address','$pincode','$postimg','$district','$postbranch','$contact','$link')","sucessfully inserted information");
echo"<script>alert('Added sucessfully');window.location='../admin/managepostoffice.php'</script>";


?>

