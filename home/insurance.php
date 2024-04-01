<?php
include '../config.php';
$admin = new Admin();
error_reporting(E_ALL ^ E_WARNING); 
if (!isset($_SESSION['uid'])) {
    echo "<script>alert('login unsucessful');window.location='../rlogin/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lifesthtml.websitelayout.net/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 07:11:48 GMT -->

<head>
    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="Website Design Templates" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="Insurance Agency HTML Template" />
    <meta name="description" content="Lifest - Insurance Agency HTML Template" />

    <!-- title  -->
    <title>Post-Office Management</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png">

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="quform/css/base.css">

    <!-- theme core css -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
         <?php include 'header.php' ?>


        <!-- PAGE TITLE
        ================================================== -->
        <!-- <section class="page-title-section top-position1 bg-img cover-background left-overlay-dark" data-overlay-dark="6" data-background="img/banner/page-title.jpg"> -->
            <div class="container">
                <div class="page-title">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <ul class="ps-0">
                                <!-- <li class="btn btn-primary"><a href="index.php" ><h3 class="text-white" >Home</h3></a></li> -->
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-inline-block p-2 border border-width-2 border-white top-20 right-10 ani-move position-absolute rounded-circle z-index-1"></div>
            <div class="d-inline-block p-2 border border-width-2 border-white bottom-10 left-10 ani-left-right position-absolute z-index-1"></div>
            
        </section>

        <!-- SERVICES
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading text-center mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    
                    <h1>INSURANCE DETAILS </h1>
                    <h3 class="display-22 display-sm-18 display-md-16 display-lg-11 mb-0">Details Of Stored Insurance</h3>
                </div>
                <div class="row g-lg-5 mt-n2-9">
                    <?php
                    if (isset($_POST['type'])) {
                        $ins = $_POST['type'];
                        $stmt = $admin->ret("SELECT * FROM `insurance` WHERE `category`='$ins'");
                    } else {
                        $stmt = $admin->ret("SELECT * FROM `insurance`");
                    }
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="card-style1">
                                <div class="card-image position-relative">
                                    <img src="../image/<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body p-1-6 p-sm-1-9 pt-2-3 position-relative">
                                    <div class="icon-box position-absolute right-10 top-n20">
                                        <!-- <img src="img/icons/icon-03.png" class="z-index-9 position-relative" alt="..."> -->
                                        <div class="box-circle primary"></div>
                                    </div>
                                    <!-- <?php echo   $a =$row['ins_id']; ?> -->
                                    <h3 class="h4 mb-3"><a href="life-insurance.html"><?php echo $row['ins_name'] ?></a></h3>
                                    <p class="mb-4"><?php echo $row['desc'] ?></p>
                                    <p class="mb-4">Intrest:<?php echo $row['ins_interest'] ?>%</p>
                                    <p class="mb-4">Amonut:<?php echo $row['min_amount'] ?></p>
                                    <p class="mb-4">Period:<?php echo $row['period'] ?>Year</p>
                                       <?php 
                                                 $stmt1=$admin->ret("SELECT * FROM `insurance_pay` WHERE `ins_id`= '$a' ");
                                                $row1=$stmt1->fetch(PDO::FETCH_ASSOC); 
                                                if($row1['ins_id']==$a){?>

                <a href="../home/inspay.php?iid= <?php echo   $a =$row['ins_id']; ?>" class="text-secondary text-primary-hover font-weight-600">Pay now<i class="ti-arrow-right ms-2 align-middle display-30"></i></a>                                   
                                                    <?php } else {?> 
 <a href="insuranceform.php?iid=<?php echo $row['ins_id'] ?>" class="text-secondary text-primary-hover font-weight-600">Apply now<i class="ti-arrow-right ms-2 align-middle display-30"></i></a>
                                                    <?php } ?>
                                   
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            

        

    </div>

   
    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery -->
    <script src="js/core.min.js"></script>

    <!-- Search -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>

    <!-- form plugins js -->
    <script src="quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="quform/js/scripts.js"></script>

    <!-- all js include end -->

</body>


<!-- Mirrored from lifesthtml.websitelayout.net/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 07:11:48 GMT -->

</html>