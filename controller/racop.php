<?php 
include '../config.php';

$admin=new Admin();

$s=$_GET['S'];
$sid=$_GET['sid'];


$stmt=$admin->cud("UPDATE `acc_open` SET `status`='$s' WHERE `acc_id`='$sid'","up");

echo"<script>alert('Updated successfully');window.location='../employee/viewaccopen.php'</script>";
 ?>