<?php
include '../config.php';

$admin = new Admin(); 
if(!isset($_SESSION['uid'])){
    echo "<script>window.location='../rlogin/login.php'</script>";

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

    <style>
        form {
            background-color: #4654e1;
            width: 300px;
            height: 44px;
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        input {
            all: unset;
            font: 16px system-ui;
            color: #fff;
            height: 100%;
            width: 100%;
            padding: 6px 10px;
        }

        ::placeholder {
            color: #fff;
            opacity: 0.7;
        }

        button {
            all: unset;
            cursor: pointer;
            width: 50px;
            height: 49px;
        }

        svg {
            color: #fff;
            fill: currentColor;
            width: 43px;
            height: 49px;
            padding: 10px;
        }
    </style>

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
                   
                    <h2 class="display-22 display-sm-18 display-md-16 display-lg-11 mb-0">KNOW YOUR POSTMAN DETAILS</h2>
                </div>
                <div class="row g-lg-5 mt-n2-9">


                    <form role="search" id="form" action="knowpostman.php" method="POST">
                        <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content" required>
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
                            </svg>
                        </button>
                    </form>




                    <?php
                    if (isset($_POST['q'])) {

                        $pincode = $_POST['q'];
                        $stm = $admin->ret("SELECT * FROM `postman_details` WHERE `post_branch`='$pincode' OR `pincode`='$pincode'");
                    
                         
                    
                    while ($post = $stm->fetch(PDO::FETCH_ASSOC)) {
                       
                    ?>



                        <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                            <div class="card-style1">
                                <div class="card-image position-relative">
                                    <img src="../image/<?php echo $row['image'] ?>" class="card-img-top" alt="..." height="50px">
                                </div>
                                <div class="card-body p-1-6 p-sm-1-9 pt-2-3 position-relative">
                                    <div class="icon-box position-absolute right-10 top-n20">
                                        <img src="img/icons/icon-03.png" class="z-index-9 position-relative" alt="...">
                                        <div class="box-circle primary"></div>
                                    </div>
                                    <h3 class="h4 mb-3"><a href="#"><?php echo $post['postman_name'] ?></a></h3>
                                    <h4 class="h4 mb-3"><?php echo $post['post_branch'] ?></h4>
                                    <p class="mb-4"><?php echo $post['pincode'] ?></p>
                                    
                                    <p class="mb-4"><?php echo $post['phno'] ?></p>
                                    <p class="mb-4"><?php echo $post['landline_no'] ?></p>
                                    <p class="mb-4"><?php echo $post['email'] ?></p>
                                       <a href="viewpostman.php?pid=<?php echo $post['postman_id'] ?>">view more</a>
                                </div>
                            </div>
                        </div>


                    <?php } }else{
                    }?>

                </div>
            </div>
            
        </section>


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