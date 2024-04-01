<?php
include '../config.php';
$admin = new Admin();
echo $specs = $_GET['dept'];


if($specs=='mailbooking' || $specs=='mail delivary' ){ ?>

<?php

$stmt = $admin->ret("SELECT * FROM `subservice` WHERE `s_id`='$specs'");
?>

<option>Select sub service</option>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

    <option value="<?php echo $row['subs_name']; ?>"><?php echo $row['subs_name']; ?></option>
<?php } ?>

<?php }else{ ?>
    
    <?php
    $uid = $_SESSION['uid'];
$stmt1 = $admin->ret("SELECT * FROM `user_acc` WHERE `user_id`='$uid'");
$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
echo $num = $stmt1->rowCount();
if ($num == 0) { ?>
<option>Select sub service</option>
    <option value="Account Opening">Account Opening</option>

    <?php }else{?>
        <?php

$stmt = $admin->ret("SELECT * FROM `subservice` WHERE `s_id`='$specs'");
?>

<option>Select sub service</option>

<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

    <option value="<?php echo $row['subs_name']; ?>"><?php echo $row['subs_name']; ?></option>
<?php
}?>
  <?php  } }?>