<?php
include '../config.php';

$admin=new Admin();
$id=$_POST['id'];
$name=$_POST['name'];
$interest=$_POST['interest'];
$min=$_POST['min'];
$period=$_POST['period'];
$desc=$_POST['desc'];
$cat=$_POST['category'];
$img=$_FILES["img"]["name"];

// $postimg=$_FILES["postimg"]["name"];
if (file_exists($_FILES['img']['tmp_name'])) {

$img=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
}
else{
	$img=$_POST['himg'];
}


$update=$admin->cud("UPDATE `insurance` SET `ins_name`='$name',`ins_interest`='$interest',`min_amount`='$min',`period`='$period',`image`='$img',`desc`='$desc',`category`='$cat'   WHERE insurance.ins_id='$id'","sucessfully updated ");
echo"<script>alert('updated sucessfully');window.location='../admin/manageinsurance.php'</script>";


?>



