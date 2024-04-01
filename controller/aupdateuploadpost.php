<?php
include'../config.php';

$admin=new Admin();
$id=$_POST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];

$postimg=$_FILES["postimg"]["name"];
if (file_exists($_FILES['postimg']['tmp_name'])) {

$postimg=$_FILES["postimg"]["name"];
move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);
}
else{
	$postimg=$_POST['himg'];
}


$update=$admin->cud("UPDATE `a_uploadinfo` SET `title`='$title',`description`='$description',`date`='$date' ,`postimg`='$postimg' WHERE a_uploadinfo.info_id='$id'","sucessfully updated information");
echo"<script>alert('updated sucessfully');window.location='../admin/uploadinfo1.php'</script>";


?>

