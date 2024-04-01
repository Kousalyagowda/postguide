<?php 
include '../config.php';

$admin=new Admin();

$s=$_GET['S'];
$sid=$_GET['sid'];


$stmt=$admin->cud("UPDATE `service_request` SET `status`='$s' WHERE `sr_id`='$sid'","up");


$stmt3=$admin->ret("SELECT * FROM `payment` WHERE `sreqid`='$sid'");
$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
$u_id=$row3['u_id'];
$amount=$row3['total'];

if($s==1)
{

$stmt2=$admin->ret("SELECT * FROM `wallete` WHERE `user_id`='$u_id'");
$n=$stmt2->rowCount();
if ($n>0) {
	$row2=$stmt2->fetch(PDO::FETCH_ASSOC);
	$in_amount=$row2['w_amount'];
	$total=$in_amount+$amount;
	$stmt=$admin->cud("UPDATE `wallete` SET `w_amount`='$total' WHERE `user_id`='$u_id'","up");
}
else{
	$stmt=$admin->cud("INSERT INTO `wallete`(`user_id`, `w_amount`) VALUES ('$u_id','$amount')","save");

}

}


echo"<script>alert('Updated successfully');window.location='../employee/deposit.php'</script>";
 ?>