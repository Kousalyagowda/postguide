<?php 

include '../config.php';

$admin=new Admin();

$name=$_POST['name'];

$mail=$_POST['email'];
$address=$_POST['add'];
$complaint=$_POST['feedback'];
$lat=$_POST['lat'];
$long=$_POST['long'];


$uid=$_SESSION['uid'];

 $stmt1=$admin->ret("SELECT * FROM `user_acc` WHERE `user_id`='$uid' ");
    $row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $pin=$row['pincode'];

$admin=$admin->ret("INSERT INTO `complaint`(`name`, `email`, `complaint`,`latitude`, `longitude`, `uid`, `pincode`, `address`) VALUES ('$name','$mail','$complaint','$lat','$long','$uid','$pin','$address')","ins");
echo"<script>alert('Sent sucessfully');window.location='../home/index.php'</script>";
?>


