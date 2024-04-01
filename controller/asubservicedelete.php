<?php
include '../config.php';

$admin=new Admin();

$id=$_GET['id'];
$stmt=$admin->cud("DELETE FROM `subservice`  WHERE `sub_id`='$id'","Deleted");
echo"<script>alert('Deleted sucessfully');window.location='../admin/managesubservice.php'</script>";

?>