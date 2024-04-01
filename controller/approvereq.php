<?php 
include '../config.php';

$admin=new Admin();
if(isset($_GET['moneyid'])){
	$s=$_GET['S'];
$sid=$_GET['moneyid'];


$stmt=$admin->cud("UPDATE `service_request` SET `status`='$s' WHERE `sr_id`='$sid'","up");

echo"<script>alert('Updated successfully');window.location='../employee/managemorder.php'</script>";
}


if(isset($_GET['ecomid'])){
	$s=$_GET['S'];
$sid=$_GET['ecomid'];


$stmt=$admin->cud("UPDATE `service_request` SET `status`='$s' WHERE `sr_id`='$sid'","up");

echo"<script>alert('Updated successfully');window.location='../employee/manageeorder.php'</script>";
}
 if(isset($_GET['sid'])){
	 $s=$_GET['S'];
$sid=$_GET['sid'];


$stmt=$admin->cud("UPDATE `service_request` SET `status`='$s' WHERE `sr_id`='$sid'","up");
 echo"<script>alert('Updated successfully');window.location='../employee/manageservice.php'</script>";
 }

 

 ?>