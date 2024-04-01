<?php include '../config.php';
$admin = new Admin(); 


if(!isset($_SESSION['uid'])){
   echo "<script>alert('login unsucessful');window.location='../rlogin/login.php'</script>";
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
    <title>Post-office Management</title>

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
                            <h2 class="h3 mb-4">INSURANCE FORM </h2>
                            <form  action="../controller/insurance.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Enter Your Adhar Number <span class="quform-required">*</span></label>
                                                <div class="quform-input"><br><br>
                                                    <input class="form-control" id="name" type="text" name="adhar" placeholder="Please Enter Your Adhar Number" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Upload Your Voter ID<span class="quform-required">*</span></label>
                                                <div class="quform-input"><br><br>
                                                    <input class="form-control" id="voter" type="file" name="voter" placeholder="Please Upload Your Voter Id" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Upload Your Birth Certificate<span class="quform-required">*</span></label>
                                                <div class="quform-input"><br><br>
                                                    <input class="form-control" id="email" type="file" name="birth" placeholder="Please Upload your birth certificate" required="" />
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Pincode</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="pin" placeholder="Your phone here" />
                                                    <input class="form-control" id="phone" type="hidden" name="iid"  value="<?php echo $_GET['iid'] ?>"placeholder="Please Enter Pincode" />

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php 
                                        $ins=$_GET['iid'];
                                        $stmt=$admin->ret("SELECT * FROM `insurance` WHERE `ins_id`='$ins'");
                                        $row=$stmt->fetch(PDO::FETCH_ASSOC);
                                        
                                        ?>
                                         <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <?php if($row['category']=='Degree holder'){ ?>
                                                <label for="phone">Upload study certificate </label>
                                                <?php } else if($row['category']=='Government job holder'){ ?>
                                                    <label for="phone">Upload certificate </label>
                                                    <?php }else{?>

                                                        <label for="phone">Upload certificate </label>

                                                        <?php } ?>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="file" name="certificate" placeholder="Your phone here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->

                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        
                                        <!-- End Captcha element -->

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