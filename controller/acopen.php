<?php 
include '../config.php';
$admin=new Admin();


$pin=$_POST['pincode'];
$an=$_POST['an'];
$postimg=$_FILES["postimg"]["name"];
move_uploaded_file($_FILES['postimg']['tmp_name'],"../image/".$_FILES['postimg']['name']);

$uid=$_SESSION['uid'];
    $sid=$_SESSION['service_id'];
    $date=date('Y-m-d');
$stmt=$admin->cud("INSERT INTO `acc_open`(`user_id`, `adhar_no`, `adhar_img`, `pincode`) 
VALUES ('$uid','$an','$postimg','$pin')","ins");
    echo "<script>alert('request submitted successfully');window.location='../home/index.php'</script>";

?>

