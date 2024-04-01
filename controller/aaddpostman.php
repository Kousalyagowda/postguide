<?php
include '../config.php';

$admin=new Admin();

$name=$_POST['name'];
$phno=$_POST['phno'];
$landline=$_POST['landline'];
$email=$_POST['email'];
$pincode=$_POST['pin'];
echo $postbranch=$_POST['postbranc'];
$postimg=$_FILES["postimg"]["name"];
move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);
$login=$admin->cud("INSERT INTO `postman_details`( `post_branch`, `pincode`,`postman_name`, `phno`, `landline_no`, `email`,`image`) VALUES ('$postbranch','$pincode','$name','$phno','$landline','$email','$postimg')","sucessfully inserted information");
echo"<script>alert('Added sucessfully');window.location='../admin/managepostman.php'</script>";


?>

