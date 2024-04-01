<?php
include'../config.php';

$admin=new Admin();

$password=$_POST['password'];
$mail=$_POST['mail'];


$login=$admin->ret("select * from `emp_registration` where `mail`='$mail' and `password`='$password'");
$user=$login->fetch(PDO::FETCH_ASSOC);

$user1=$login->rowCount();

if($user1>0){
	$emp=$user['emp_id'];
	$_SESSION['empid']=$emp;
	echo "<script>alert('login sucessful');window.location='../employee/empindex.php'</script>";
}
else
{
	echo "<script>alert('login unsucessful');window.location='../elogin/login.php'</script>";
}
?>
