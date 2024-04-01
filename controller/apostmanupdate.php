<?php
include '../config.php';

$admin=new Admin();
$id=$_POST['id'];
$name=$_POST['name'];
$phno=$_POST['phno'];
$landline=$_POST['landline'];
$email=$_POST['email'];
$pincode=$_POST['pin'];
$postbranch=$_POST['postbranc'];
$postimg=$_FILES["postimg"]["name"];
if (file_exists($_FILES['postimg']['tmp_name'])) {

$postimg=$_FILES["postimg"]["name"];
move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);
}
else{
	$postimg=$_POST['himg'];
}



$update=$admin->cud("UPDATE `postman_details`SET `post_branch`='$postbranch', `pincode`='$pincode',`postman_name`='$name', `phno`='$phno', `landline_no`='$landline', `email`='$email',`image`='$postimg'  WHERE postman_details.postman_id='$id'","sucessfully updated information");
echo"<script>alert('updated sucessfully');window.location='../admin/managepostman.php'</script>";


?>











