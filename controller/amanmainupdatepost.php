<?php
include '../config.php';

$admin=new Admin();
$id=$_POST['id'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$postphno=$_POST['postphno'];
$location=$_POST['location'];

$update=$admin->cud("UPDATE `main_postoffice` SET `district`='$district',`pincode`='$pincode',`contact`='$postphno',`location`='$location'   WHERE main_postoffice.mp_id='$id'","sucessfully updated information");
echo"<script>alert('updated sucessfully');window.location='../admin/managempostoffice.php'</script>";


?>

