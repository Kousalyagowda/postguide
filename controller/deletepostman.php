<?php
include'../config.php';

$admin=new Admin();

$id=$_GET['id'];
$login=$admin->cud("DELETE FROM `postman_details` WHERE `postman_id`='$id' ","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/managepostman.php'</script>";


?>

