<?php
include '../config.php';

$admin=new Admin();

$name=$_POST['name'];

$mail=$_POST['email'];
$address=$_POST['add'];
$ph_no=$_POST['phone'];
$pincode=$_POST['pin'];
$service=$_POST['service'];
$subservice=$_POST['subservice'];
$stmt=$admin->Rcud("INSERT INTO `service_request`( `name`, `email`, `address`, `pincode`, `contact`, `service`, `subs_ervice`)
 VALUES ('$name','$mail','$address','$pincode','$ph_no','$service','$subservice')","ins");

if($service=='Financial services' || $service=='e-com' || $service=='money order'){

    echo "<script>alert('request submitted successfully');window.location='../home/paymnet.php?reqid=$stmt'</script>";

}else{



 echo "<script>alert('request submitted successfully');window.location='../home/index.php'</script>";
}
 ?>