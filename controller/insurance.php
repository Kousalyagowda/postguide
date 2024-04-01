<?php
include '../config.php';

$admin=new Admin();




$pin=$_POST['pin'];
$uid=$_SESSION['uid'];
$insid=$_POST['iid'];
$adhar=$_POST['adhar'];
// $sid=$_SESSION['service_id'];

$voter=$_FILES["voter"]["name"];
move_uploaded_file($_FILES['voter']['tmp_name'],"../image/".$_FILES['voter']['name']);

$birth=$_FILES["birth"]["name"];
move_uploaded_file($_FILES['birth']['tmp_name'],"../image/".$_FILES['birth']['name']);


$certificate=$_FILES["certificate"]["name"];
move_uploaded_file($_FILES['certificate']['tmp_name'],"../image/".$_FILES['certificate']['name']);

$stmt1=$admin->ret("SELECT * FROM `user_acc` WHERE `adhar_no`='$adhar' AND `user_id`='$uid'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
$num=$stmt1->rowCount();

if($num>0){


$date=date('Y-m-d');
$login=$admin->cud("INSERT INTO `insurance_req`(`u_id`, `ins_id`, `date`, `pincode`, `adhar_no`, `birth_certificate`, `certificate`, `voter_id`) 
VALUES ('$uid','$insid','$date','$pin','$adhar','$birth','$certificate','$voter')","login sucessful");
echo"<script>alert('Request submitted sucessfull');window.location='../home/inspay.php?iid=$insid'</script>";


}else{

    echo "<script>alert('Adhar  number is wrong ');window.location='../home/insuranceform.php?iid=$insid'</script>";

}





?>

