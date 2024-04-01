<?php
include'../config.php';

$admin=new Admin();

$id=$_GET['id'];
$login=$admin->cud("DELETE FROM `main_postoffice` WHERE `mp_id`='$id' ","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/managempostoffice.php'</script>";


?>

