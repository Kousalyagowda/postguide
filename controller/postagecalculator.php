<?php 
include '../config.php';
$admin = new Admin();
 $fromp=$_POST['fromp'];
 $froma=$_POST['froma'];
$fromb=$_POST['fromb'];
$top=$_POST['top'];
$toa=$_POST['toa'];
$tob=$_POST['tob'];
$item=$_POST['item'];
$weight=$_POST['weight'];
$length=$_POST['length'];
$height=$_POST['height'];
$width=$_POST['width'];
$posttyep=$_POST['post'];
$date=date('Y-m-d');
$userid=$_SESSION['uid'];



$stmt=$admin->Rcud("INSERT INTO `postagecalculator`( `fromp`, `froma`, `fromb`, `top`, `toa`, `tob`, `item`, `weight`, `height`, `length`, `width`, `user_id`, `date`) 
VALUES ('$fromp','$froma','$fromb','$top','$toa','$tob','$item','$weight','$height','$length','$width','$userid','$date')","ins");
echo "<script>alert('request submited successfully');window.location='../home/getprice.php?id=$stmt'</script>";
?>