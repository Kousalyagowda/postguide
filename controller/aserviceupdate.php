<?php
include '../config.php';

$admin=new Admin();

$serviceid=$_POST['id'];
$servicename=$_POST['title'];
$stmt=$admin->cud("UPDATE `service` SET `service_name`='$servicename' WHERE service.s_id='$serviceid'","updated");
echo"<script>alert('Updated sucessfully');window.location='../admin/manageservice.php'</script>";

?>