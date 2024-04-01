<?php
include'../config.php';

$admin=new Admin();

$id=$_GET['id'];
$login=$admin->cud("DELETE FROM `postoffice` WHERE `postid`='$id' ","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/managepostoffice.php'</script>";


?>

