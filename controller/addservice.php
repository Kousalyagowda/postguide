<?php
include'../config.php';

$admin=new Admin();

$service=$_POST['title'];

$login=$admin->cud("INSERT INTO `service`( `service_name`) VALUES ('$service')","ins");


echo"<script>alert('Added sucessfully');window.location='../admin/manageservice.php'</script>";

?>