<?php
include'../config.php';

$admin=new Admin();
if(isset($_POST['loc'])){
$id=$_POST['id'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$e=$_POST['e'];

$update=$admin->cud("UPDATE `service_request` SET `longitude`='$long',`latitude`='$lat' WHERE `sr_id`='$id'","sucessfully updated information");
echo "<script>alert('updated sucessfully');window.location='../phpmailer/location.php?lat=$lat&long=$long&e=$e'</script>";



}

?>

