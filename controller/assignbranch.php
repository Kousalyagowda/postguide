<?php
include '../config.php';

$admin=new Admin();

$postid=$_POST['postid'];
$empid=$_POST['empid'];

$stmt=$admin->cud("INSERT INTO `assign_emp`( `postid`, `emp_id`) VALUES ('$postid','$empid')","ins");
echo "<script>alert('assign employee successfully');window.location='../admin/amanageemp.php'</script>";

?>