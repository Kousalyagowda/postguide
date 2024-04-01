<?php 
include '../config.php';

$admin=new Admin();

$s=$_GET['S'];
$sid=$_GET['sid'];


$stmt=$admin->cud("UPDATE `service_request` SET `status`='$s' WHERE `sr_id`='$sid'","up");

echo"<script>alert('Updated successfully');window.location='../employee/withdrawalreq.php'</script>";
 ?>