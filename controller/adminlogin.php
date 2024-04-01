<?php
include'../config.php';

$admin=new Admin();
$a_name=$_POST['name'];
$password=$_POST['password'];
$mail=$_POST['mail'];


$login=$admin->ret("select * from `admin` where `a_name`='$a_name' and `mail`='$mail' and `password`='$password'");
$user=$login->fetch(PDO::FETCH_ASSOC);

$user1=$login->rowCount();

if($user1>0){
	echo "<script>alert('login sucessful');window.location='../admin/aindex.php'</script>";
}
else
{
	echo "<script>alert('login unsucessful');window.location='../alogin/index.php'</script>";
}
?>
