<?php
include'../config.php';

$admin=new Admin();

$id=$_GET['id'];
$login=$admin->cud("DELETE FROM `user_registration` WHERE `user_id`='$id' ","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/amanageuser.php'</script>";


?>

