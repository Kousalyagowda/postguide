<?php 
include '../config.php';
$admin=new Admin();


$pin=$_POST['pincode'];
$ac=$_POST['ac'];
$adhar=$_POST['adhar'];
$ifsc=$_POST['ifsc'];

$uid=$_SESSION['uid'];
$sid=$_SESSION['service_id'];
$date=date('Y-m-d');

$stmt1=$admin->ret("SELECT * FROM `user_acc` WHERE `acc_no`='$ac' AND `ifsc_code`='$ifsc' AND `adhar_no`='$adhar'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
$num=$stmt1->rowCount();

if($num>0){
    $stmt=$admin->cud("INSERT INTO `internetbank`(`user_id`, `acc_no`, `ifsc_code`, `adhar_no`, `pincode`, `sr_id`)
     VALUES ('$uid','$ac','$ifsc',$adhar,'$pin','$sid')","ins");

        echo "<script>alert('request submitted successfully');window.location='../home/index.php'</script>";

}else{

    echo "<script>alert('IFSC Or account number Or adhar is wrong ');window.location='../home/internet.php'</script>";

}



?>