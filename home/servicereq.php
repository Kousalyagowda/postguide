<?php include '../config.php';
$admin = new Admin();

if (!isset($_SESSION['uid'])) {
    echo "<script>window.location='../rlogin/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from lifesthtml.websitelayout.net/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 07:12:01 GMT -->

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
                        
                        
                    </div>
                </div>
            </div>
            <div class="d-inline-block p-2 border border-width-2 border-white top-20 right-10 ani-move position-absolute rounded-circle z-index-1"></div>
            <div class="d-inline-block p-2 border border-width-2 border-white bottom-10 left-10 ani-left-right position-absolute z-index-1"></div>
           
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-xl-8">
                        <div class="ps-xl-3">
                            <h2 class="h3 mb-4">SERVICE REQUEST </h2>
                            <form action="../phpmailer/requestemail.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">
                                        <?php

                                        $uid = $_SESSION['uid'];
                                        $stm = $admin->ret("SELECT * FROM `user_registration`  WHERE `user_id`='$uid'");
                                        $post = $stm->fetch(PDO::FETCH_ASSOC);






                                        ?>
                                        <!-- Begin Text input element -->

                                        <input class="form-control" value="<?php echo $post['user_name'] ?>" id="name" type="hidden" name="name" placeholder="Your name here" required=""  />
                                        <input class="form-control" id="subject" type="hidden" value="<?php echo $post['address'] ?>" name="add" placeholder="Your subject here" required="" />
                                        <input class="form-control"  type="hidden" value="<?php echo $post['ph_no'] ?>" name="phone" placeholder="Your phone number here" required=""/>

                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Your Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="email" name="email" placeholder="Your email here"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->

                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Pincode</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" pattern="[0-9]+"  minlength="6" maxlength="6"  title="enter valid number"  name="pin" placeholder="Your pincode here" required="" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->

                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <select name="service" id="cls" onchange="showSub(this.value)" class="form-control" onclick="hello(this.value)">
                                                            <option>Select service</option>
                                                            <?php
                                                            $stm = $admin->ret("select * from `service`");
                                                            while ($post = $stm->fetch(PDO::FETCH_ASSOC)) {

                                                            ?>
                                                                <a href="servicereq.php?ser=<?php echo $post['service_name'] ?>">
                                                                    <option value="<?php echo $post['service_name'] ?>"><?php echo $post['service_name'] ?></option>
                                                                </a>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <select class="form-control" id="doctor" name="subservice">
                                                            <option>Select service</option>

                                                        </select>

                                                    </div>
                                                </div>
   
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="okay" style="display:none ;">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact </label>
                                                <div class="quform-input">
                                                    <input class="form-control" type="text" name="phone" placeholder="Your phone number here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End 
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn border-0" type="submit">Send request</button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function hello(dd) {

                if (dd.value == 'mail delivary') {
                    document.getElementById("okay").style.display = "show";
                }
            }
        </script>
        <script>
            function showSub(dept) {



                var xhttp = new XMLHttpRequest(dept);
                xhttp.onreadystatechange = function() {


                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("doctor").innerHTML = this.responseText;
                    }
                };

                xhttp.open("GET", "../controller/subservice.php?dept=" + dept, true);
                xhttp.send();

            }
        </script>
        <!-- MAP
        ================================================== -->
        <!-- <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->

        
       
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


<!-- Mirrored from lifesthtml.websitelayout.net/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 07:12:01 GMT -->

</html>