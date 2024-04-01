<?php
include '../config.php';
$admin = new Admin();
$uid=$_SESSION['uid'];
$amt=$_POST['amt'];
echo $pf=$_POST['sub'];
$sreqid=$_SESSION['service_id'];
$date=date('Y-m-d');
$stmt=$admin->cud("INSERT INTO `payment`( `u_id`, `sreqid`, `date`, `total`, `payment_for`) VALUES ('$uid','$sreqid','$date','$amt','$pf')","ins");
echo "<script>alert('paid sucessful');window.location='../home/index.php'</script>";

?>