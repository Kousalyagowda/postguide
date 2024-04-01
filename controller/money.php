<?php 
include '../config.php';
$admin=new Admin();


$pin=$_POST['pin'];
$ac=$_POST['ac'];
$name=$_POST['name'];
$add=$_POST['add'];
$ifsc=$_POST['ifsc'];
echo $amt1=$_POST['amt'];
$uid=$_SESSION['uid'];
$sid=$_SESSION['service_id'];
$date=date('Y-m-d');
$fpin=$_POST['fpin'];

 $total=$amt1*5/100;
 $amt=$amt1+$total;

if($amt1>5000){


    echo "<script>alert('Amount should be greater less then 5000');window.location='../home/e-money_order.php'</script>";

}else{

$stmt1=$admin->ret("SELECT * FROM `user_acc` WHERE `acc_no`='$ac' AND `ifsc_code`='$ifsc'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);

$num=$stmt1->rowCount();

if($num>0){
    $stmt=$admin->cud("INSERT INTO `money_order`(`user_id`, `acc_no`, `ifsc_code`, `to_name`, `to_address`, `to_pincode`, `amt`, `sr_id`,`from_pin`) 
    VALUES ('$uid','$ac','$ifsc','$name','$add','$pin','$amt','$sid','$fpin')","ins");

        echo "<script>alert('request submitted successfully');window.location='../home/payment.php?amt=$amt'</script>";

}else{

    echo "<script>alert('IFSC Or account number is wrong ');window.location='../home/e-money_order.php'</script>";

}

}

?>