<?php
include '../config.php';

$admin=new Admin();

$name=$_POST['name'];

$interest=$_POST['interest'];

$min=$_POST['min'];
$period=$_POST['period'];
$desc=$_POST['desc'];

 $cat=$_POST['category'];
$img=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);

$login=$admin->cud("INSERT INTO `insurance`( `ins_name`, `ins_interest`, `min_amount`, `period`, `image`,`desc`,`category`) VALUES ('$name','$interest','$min','$period','$img','$desc','$cat')","ins");


echo"<script>alert('Added sucessfully');window.location='../admin/manageinsurance.php'</script>";

?>