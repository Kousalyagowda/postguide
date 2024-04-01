<?php
include'../config.php';

$admin=new Admin();

$password=$_POST['password'];
$mail=$_POST['mail'];


$login=$admin->ret("select * from `user_registration` where `mail`='$mail' and `password`='$password'");
$user=$login->fetch(PDO::FETCH_ASSOC);

$user1=$login->rowCount();

if($user1>0){
	$id=$user['user_id'];
	$_SESSION['uid']=$id;
	echo "<script>alert('login sucessful');window.location='../home/index.php'</script>";
}
else
{
	echo "<script>alert('login unsucessful');window.location='../rlogin/login.php'</script>";
}
?>
