<?php include '../config.php';
$admin = new Admin();

if(!isset($_SESSION['uid'])){
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
        <section class="page-title-section top-position1 bg-img cover-background left-overlay-dark" data-overlay-dark="6" data-background="img/banner/page-title.jpg">
            <div class="container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="col-md-12">
                            <ul class="ps-0">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li><a href="#!" class="text-white">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-inline-block p-2 border border-width-2 border-white top-20 right-10 ani-move position-absolute rounded-circle z-index-1"></div>
            <div class="d-inline-block p-2 border border-width-2 border-white bottom-10 left-10 ani-left-right position-absolute z-index-1"></div>
            <img src="img/content/shape5.png" class="position-absolute top-20 left-5 ani-top-bottom z-index-1" alt="...">
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-xl-8">
                        <div class="ps-xl-3">
                            <h2 class="h3 mb-4">Account open form</h2>
                            <form  action="../controller/acopen.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">
                                  
                                        <!-- Begin Text input element -->
                                        
                                                   

                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Enter pincode<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="pincode" placeholder="Enter pincode" pattern="[0-9]+"  minlength="6" maxlength="6"  title="enter valid number" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Enter Adhara number<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="an" placeholder="Enter Adhara number number" required="" />
                                                </div>
                                            </div>
                                        </div> <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Upload adhara card <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="file" name="postimg" placeholder="Enter IFSC code" required="" />
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                      
                                       
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->

                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                     
                                     
                                        <!-- End 
                                         End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn border-0" type="submit">Send Message</button>
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

            function hello(dd){

                if(dd.value == 'mail delivary'){
                    document.getElementById("okay").style.display = "show";
                }
            }
        </script>
        <script>
        function showSub(dept){
		


        var xhttp=new XMLHttpRequest(dept);
        xhttp.onreadystatechange = function(){


            if (this.readyState==4 && this.status==200){
            
                document.getElementById("doctor").innerHTML = this.responseText;
            }
        };
        
        xhttp.open("GET","../controller/subservice.php?dept="+dept,true);
        xhttp.send();

    }
   
   </script>
        <!-- MAP
        ================================================== -->
        <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>

        <!-- FOOTER
        ================================================== -->
        <footer class="footer-style1 pt-0 overflow-hidden position-relative">
            <div class="footer-top-info">
                <div class="container z-index-2 position-relative">
                    <div class="row mt-n1-9">
                        <div class="col-md-4 col-lg-6 mt-1-9">
                            <div class="footer-logo">
                                <img src="img/logos/footer-light-logo.png" alt="...">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-1-9">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="ti-location-pin display-15"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h4 class="h5 text-white">Location</h4>
                                    <p class="mb-0 opacity7">66 Guild Street 512B.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-1-9">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="ti-headphone-alt display-15"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h4 class="h5 text-white">Call Us</h4>
                                    <p class="mb-0 opacity7">(+44) 123 456 789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-lg-4 pe-5 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="footer-top">
                            <h3 class="mb-1-9 h5">About us</h3>
                            <p class="mb-1-6 text-white">The proper insurance on proper time can preserve you protection. We assist you make sure everybody forward.</p>
                            <ul class="social-icon-style1 mb-0 d-inline-block list-unstyled">
                                <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li class="d-inline-block me-2"><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                <li class="d-inline-block"><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 mt-1-9 wow fadeIn" data-wow-delay="350ms">
                        <h3 class="h5 mb-1-9">Services</h3>
                        <ul class="footer-list ps-0">
                            <li>
                                <a href="life-insurance.html">Life insurance</a>
                            </li>
                            <li>
                                <a href="business-insurance.html">Business insurance</a>
                            </li>
                            <li>
                                <a href="travel-insurance.html">Travel insurance</a>
                            </li>
                            <li>
                                <a href="car-insurance.html">Car insurance</a>
                            </li>
                            <li>
                                <a href="health-insurance.html">Health insurance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="500ms">
                        <h3 class="h5 mb-1-9">Recent News</h3>
                        <div class="d-flex mb-1-9">
                            <div class="flex-shrink-0 image-hover">
                                <img src="img/content/footer-thumb1.jpg" class="rounded" alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="text-white mb-2 h6"><a href="blog-details.html" class="text-white text-primary-hover">People saying about insurance.</a></h4>
                                <small class="text-white opacity7">8 Nov, 2021</small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 image-hover">
                                <img src="img/content/footer-thumb2.jpg" class="rounded" alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="text-white mb-2 h6"><a href="blog-details.html" class="text-white text-primary-hover">Providing all types of insurance</a></h4>
                                <small class="text-white opacity7">3 Nov, 2021</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="650ms">
                        <h3 class="h5 mb-1-9">NewsLetter</h3>
                        <p class="text-white">Subscribe to our newsletter for discounts and more.</p>
                        <form class="quform newsletter-form" action="https://lifesthtml.websitelayout.net/quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="quform-element">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="butn white border-0 w-100" type="submit">Subscribe</button>
                                        </div>
                                        <div class="quform-loading-wrap text-center"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>&copy; <span class="current-year"></span> Lifest is Powered by <a href="#!" class="text-primary text-white-hover">Website Design Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/content/shape1.png" class="position-absolute bottom-0 start-0 ani-top-bottom" alt="...">
            <img src="img/content/shape3.png" class="position-absolute bottom-10 left-5 d-none d-lg-block" alt="...">
        </footer>

    </div>

    <!-- BUY TEMPLATE
    ================================================== -->
    <div class="buy-theme alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/item/lifest-insurance-agency-html-template/35437741" target="_blank"><i class="fas fa-cart-plus"></i><span>Buy Template</span></a></div>

    <div class="all-demo alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/user/websitedesigntemplates" target="_blank"><i class="far fa-envelope"></i><span>Quick Question?</span></a></div>

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