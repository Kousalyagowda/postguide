<?php
include'../config.php';

$admin=new Admin();

$id=$_GET['id'];
$login=$admin->cud("DELETE FROM `a_uploadinfo` WHERE `info_id`='$id' ","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/uploadinfo1.php'</script>";


?>

