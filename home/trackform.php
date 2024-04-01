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
                            <h2 class="h3 mb-4">TRACKING SERVICE</h2><br><br>
                            <form  action="complainttrack.php" method="post" >
                                <div class="quform-elements">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Check your mail to get Track Id</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="trackid" placeholder="Please enter your track id" />
                                                </div>
                                            </div>
                                        </div>
                                       
                     
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn border-0" type="submit">SUBMIT</button>
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