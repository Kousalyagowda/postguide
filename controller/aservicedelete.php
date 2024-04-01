<?php
include'../config.php';

$admin=new Admin();

$id=$_GET['id'];
$login=$admin->cud("DELETE FROM `service` WHERE `s_id`='$id' ","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/manageservice.php'</script>";


?>

