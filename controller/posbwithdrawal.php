<?php 
include '../config.php';
$admin=new Admin();


$pin=$_POST['pincode'];
$ac=$_POST['ac'];
$ifsc=$_POST['ifsc'];
$amt=$_POST['amt'];
$uid=$_SESSION['uid'];
    $sid=$_SESSION['service_id'];
    $date=date('Y-m-d');
    $stmt1=$admin->ret("SELECT * FROM `user_acc` WHERE `acc_no`='$ac' AND `ifsc_code`='$ifsc'");
    $row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    
    if($num>0){
$stmt=$admin->cud("INSERT INTO `withdraw`( `user_id`, `date`, `withdraw_amt`, `acc_no`, `ifsc_code`, `pincode`, `sr_id`)
 VALUES ('$uid','$date','$amt','$ac','$ifsc','$pin','$sid')","ins");
    echo "<script>alert('request submitted successfully');window.location='../home/index.php'</script>";
}else{

    echo "<script>alert('IFSC Or account number is wrong ');window.location='../home/posbwithdrawal.php'</script>";

}
?>

