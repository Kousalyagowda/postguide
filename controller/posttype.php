<?php
include '../config.php';
$admin = new Admin();
$uid=$_SESSION['uid'];
$type=$_POST['type'];
$sreqid=$_SESSION['service_id'];

$stmt=$admin->cud("INSERT INTO `posttype`( `u_id`, `sr_id`, `type`) VALUES ('$uid','$sreqid','$type')","ins");
echo "<script>alert('request submitted successfully');window.location='../home/index.php'</script>";


?>