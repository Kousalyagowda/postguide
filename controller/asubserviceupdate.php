<?php
include '../config.php';

$admin=new Admin();
$id=$_POST['id'];
$service=$_POST['service'];
$name=$_POST['subn'];

$stmt=$admin->cud("UPDATE `subservice` SET `subs_name`='$name' WHERE subservice.sub_id='$id'","Updated");
echo"<script>alert('Updated sucessfully');window.location='../admin/managesubservice.php'</script>";

?>