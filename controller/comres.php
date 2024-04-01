<?php 
include '../config.php';
$admin=new Admin();

$cid=$_POST['cid'];
$uid=$_POST['uid'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$res=$_POST['res'];
$stmt1=$admin->cud("DELETE FROM `complaint_res` WHERE `c_id`='$cid'","del");
$stmt=$admin->cud("INSERT INTO `complaint_res`(`c_id`, `lat`, `long`, `u_id`, `response`)
VALUES ('$cid','$lat','$long','$uid','$res')","ins");

$stmt2=$admin->cud("UPDATE `complaint` SET `status`='1' WHERE `complaint_id`='$cid'","update");


echo"<script>alert('response sent successfully');window.location='../employee/viewcomplaint.php'</script>";
?>