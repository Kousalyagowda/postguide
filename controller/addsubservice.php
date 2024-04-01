<?php
include'../config.php';

$admin=new Admin();

$service=$_POST['service'];
$subservice=$_POST['subservice'];


$login=$admin->cud("INSERT INTO `subservice`(`s_id`, `subs_name`) VALUES ('$service','$subservice')","inserted");


echo"<script>alert('Added sucessfully');window.location='../admin/managesubservice.php'</script>";

?>