<?php 

include '../config.php';

$admin=new Admin();

$name=$_POST['name'];

$mail=$_POST['email'];
$feedback=$_POST['feedback'];
$pin=$_POST['pincode'];

$uid=$_SESSION['uid'];

 // $stmt1=$admin->ret("SELECT * FROM `user_acc` WHERE `user_id`='$uid' ");
 //    $row=$stmt1->fetch(PDO::FETCH_ASSOC);
 //  echo  $pin=$row['pincode'];

$admin=$admin->ret("INSERT INTO `user_feedback`( `user_name`, `feedback`, `email`,`pincode`) VALUES ('$name','$feedback','$mail','$pin')","ins");
echo"<script>alert('Feedback sucessfull');window.location='../home/index.php'</script>";

?>