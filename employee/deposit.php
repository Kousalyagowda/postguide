<?php
include '../config.php';
$admin = new Admin();

if (!isset($_SESSION['empid'])) {
    echo "<script>alert('login unsucessful');window.location='../elogin/login.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Postguide Employee</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php
            include 'header.php';
            ?>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php
                    include 'sidebar.php';
                    ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h2 class="m-b-10">MANAGE DEPOSIT REQUEST</h2>
                                            <h4 class="m-b-0">Details of deposit request</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="empindex.php" class="btn btn-primary"> <i class="fa fa-home">Home</i> </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- <a href="manaddpostoffice.php" class="btn btn-primary">Add Post-office</a> -->
                                        <!-- Inverse table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Details</h5>

                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-inverse">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Address</th>
                                                                <th>Pincode</th>
                                                                <th>Contact</th>
                                                                <th>Deposit amount</th>
                                                                <th>Date</th>
                                                                <th>Account number</th>
                                                                <th>Ifse code</th>
                                                               <th style="column-width: 30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $empid = $_SESSION['empid'];
                                                            $stm = $admin->ret("SELECT * FROM `assign_emp` INNER JOIN `postoffice` ON postoffice.postid=assign_emp.postid WHERE assign_emp.emp_id='$empid' ");
                                                            $post = $stm->fetch(PDO::FETCH_ASSOC);
                                                            $pincode = $post['pincode'];

                                                            $stmt = $admin->ret("SELECT * FROM `deposit` WHERE `pincode`='$pincode' ");
                                                            while ($post1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                $uid=$post1['user_id'];

                                                                $stmt3=$admin->ret("SELECT * FROM `user_registration` WHERE `user_id`='$uid'");
                                                                $post3=$stmt3->fetch(PDO::FETCH_ASSOC);

                                                                $sid = $post1['sr_id'];
                                                                $stmt4 = $admin->ret("SELECT * FROM `service_request` where `sr_id`='$sid'");
                                                                $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);

                                                            ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $post3['user_id']?></th>
                                                                    <td><?php echo $post3['user_name'] ?></td>
                                                                    <td><?php echo $post3['mail'] ?></td>
                                                                    <td><?php echo $post3['address'] ?></td>
                                                                    <td><?php echo $post1['pincode'] ?></td>
                                                                    <td><?php echo $post3['ph_no'] ?></td>
                                                                    <td><?php echo $post1['deposit_amt'] ?></td>
                                                                    <td><?php echo $post1['deposit_date'] ?></td> 
                                                                  
                                                                    <td><?php echo $post1['acc_no'] ?></td>
                                                                    <td><?php echo $post1['ifsc_code'] ?></td>
                                                                    <?php if ($row4['status'] == 0) { ?>

                                                                        <td> <a href="../controller/ad.php?sid=<?php echo $row4['sr_id'] ?>&S=1" class="badge bg-success">Approve</a> </td>

                                                                        <td> <a href="../controller/ad.php?sid=<?php echo $row4['sr_id'] ?>&S=2" class="badge bg-danger">Reject</a> </td>

                                                                    <?php } else if ($row4['status'] == 1) { ?>

                                                                        <td>Approved</td>
                                                                    <?php } else { ?>

                                                                        <td>Rejected</td>


                                                                    <?php } ?>



                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Inverse table card end -->

                                        <!-- Required Jquery -->
                                        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
                                        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
                                        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
                                        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
                                        <!-- waves js -->
                                        <script src="assets/pages/waves/js/waves.min.js"></script>
                                        <!-- jquery slimscroll js -->
                                        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
                                        <!-- waves js -->
                                        <script src="assets/pages/waves/js/waves.min.js"></script>
                                        <!-- modernizr js -->
                                        <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
                                        <!-- Custom js -->
                                        <script src="assets/js/pcoded.min.js"></script>
                                        <script src="assets/js/vertical-layout.min.js "></script>
                                        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                                        <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>