<?php
include'../config.php';

$admin=new Admin();
$id=$_POST['id'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$postphno=$_POST['postphno'];
$postbranch=$_POST['postbranch'];

$postimg=$_FILES["postimg"]["name"];
if (file_exists($_FILES['postimg']['tmp_name'])) {

$postimg=$_FILES["postimg"]["name"];
move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);
}
else{
	$postimg=$_POST['himg'];
}


$update=$admin->cud("UPDATE `postoffice` SET `address`='$address',`pincode`='$pincode',`postimg`='$postimg',`postphno`='$postphno',`postbranch`='$postbranch' WHERE postoffice.postid='$id'","sucessfully updated information");
echo"<script>alert('updated sucessfully');window.location='../admin/managepostoffice.php'</script>";


?>

