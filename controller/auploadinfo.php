<?php
include'../config.php';

$admin=new Admin();

$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];
// $postimg=$_FILES["postimg"]["name"];
// move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);


$login=$admin->cud("INSERT INTO `a_uploadinfo`( `info_title`, `info_description`, `date`) VALUES ('$title','$description','$date')","sucessfully inserted information");
echo"<script>alert('Uploaded sucessfully');window.location='../admin/uploadinfo1.php'</script>";

?>

