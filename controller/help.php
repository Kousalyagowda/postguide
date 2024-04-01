<?php
include'../config.php';

$admin=new Admin();
if(isset($_POST['submit'])){

$name=$_POST['name'];
$number1=$_POST['n1'];
$number2=$_POST['n2'];


$login=$admin->cud("INSERT INTO `helpline`( `hname`,`hnumber1`,`hnumber2`) VALUES ('$name','$number1','$number2')","ins");

echo"<script>alert('Added sucessfully');window.location='../admin/help.php'</script>";
}

if(isset($_POST['update'])){

$name=$_POST['name'];
$number1=$_POST['n1'];
$number2=$_POST['n2'];
$id=$_POST['id'];


$update=$admin->cud("UPDATE `helpline` SET `hname`='$name',`hnumber1`='$number1',`hnumber2`='$number2'  WHERE `hid`='$id'","sucessfully updated information");
echo"<script>alert('updated sucessfully');window.location='../admin/help.php'</script>";

}

if(isset($_GET['id'])){
	echo $id=$_GET['id'];
$login=$admin->cud("DELETE FROM `helpline` WHERE `hid`='$id'","Delete sucessful");
echo"<script>alert('Deleted sucessfully');window.location='../admin/help.php'</script>";


}
?>