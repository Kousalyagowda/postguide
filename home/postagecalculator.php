<?php include '../config.php';
$admin = new Admin(); 
if(!isset($_SESSION['uid'])){
    echo "<script>window.location='../rlogin/login.php'</script>";

}?>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>

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
                            <h2 class="h3 mb-4"><b>POSTALCALCULATOR</b></h2><br><br><br>
                            <form action="../controller/postagecalculator.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <label for="">Select From</label>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Pin code <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type='text' name="fromp" id='user_id' class='form-control' placeholder='Enter user id' onkeyup="GetDetail(this.value)" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Address <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="froma" id="first_name" readonly class="form-control" placeholder='First Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Branch<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="fromb" id="last_name" readonly class="form-control" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->

                                        <hr>
                                        <label for="">Select To</label>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Pin code <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type='text' name="top" id='topin' class='form-control' placeholder='Enter user id' onkeyup="GetDetailto(this.value)" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact </label>
                                                <div class="quform-input">
                                                    <input type="text" name="toa" id="toadd" readonly class="form-control" placeholder='First Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact </label>
                                                <div class="quform-input">
                                                    <input type="text" name="tob" id="tobranch" readonly class="form-control" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->

                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <label for="phone">Contact <span class="quform-required">*</span> </label>
                                                <div class="quform-input">
                                                    <select name="item" id="" class="form-control">
                                                        <option value="">Select An item</option>
                                                        <option value="">Letter/Document</option>
                                                        <option value="">Parcel</option>
                                                        <option value="">Book Packet</option>
                                                        <option value="">Book Packet Containing periodicals</option>
                                                    </select>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Weight (in gram)<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type='text' name="weight" id='user_id' class="txtCal" onblur="findTotal()" placeholder='Enter user id' onkeyup="GetDetail(this.value)" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Length (in cm)<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="length" id="first_name" class="txtCal" onblur="findTotal()" placeholder='First Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Width (in cm)<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="width" id="last_name" class="txtCal" onblur="findTotal()" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Width (in cm)<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="width" id="last_name" class="txtCal" onblur="findTotal()" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr>

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Speed post<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="radio" name="post" id="last_name" onclick="myFunction1()" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Normal Post<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="radio" name="post" id="first_name" onclick="myFunction2()" placeholder='First Name' value="">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Captcha element -->
                                        <div id="myDIV1" style="display:none">

                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">price<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="height" id="last_name" class="totCal" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>

                                        </div>

                                        <div id="myDIV2" style="display:none">

                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">price<span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input type="text" name="height" id="last_name" class="totCal1" placeholder='Last Name' value="">
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        >

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script> 

function myFunction1() {

  document.getElementById("myDIV1").style.display = "block";

  document.getElementById("myDIV2").style.display = "none";

  document.getElementById("myDIV3").style.display = "none";

  document.getElementById("myDIV4").style.display = "none";

}

function myFunction2() {

document.getElementById("myDIV1").style.display = "none";

document.getElementById("myDIV2").style.display = "block";

document.getElementById("myDIV3").style.display = "none";

document.getElementById("myDIV4").style.display = "none";

}
</script>
        <script>
            var arr = document.getElementsByClassName('txtCal');

            function findTotal() {
                var tot = 0;
                for (var i = 0; i < arr.length; i++) {
                    tot += parseInt(arr[i].value);
                }
                var tot1 = 0;
                for (var i = 0; i < arr.length; i++) {
                    tot1 += parseInt(arr[i].value)+10;
                }
                document.getElementsByClassName('totCal')[0].value = tot;
                document.getElementsByClassName('totCal1')[0].value = tot1;

            }


            for (var i = 0; i < arr.length; i++) {
                arr[i].addEventListener('keyup', findTotal);
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
        <script>
            function GetDetail(str) {
                if (str.length == 0) {
                    document.getElementById("first_name").value = "";
                    document.getElementById("last_name").value = "";
                    return;
                } else {

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {

                        if (this.readyState == 4 &&
                            this.status == 200) {

                            var myObj = JSON.parse(this.responseText);



                            document.getElementById("first_name").value = myObj[0];


                            document.getElementById(
                                "last_name").value = myObj[1];
                        }
                    };


                    xmlhttp.open("GET", "gfg.php?user_id=" + str, true);


                    xmlhttp.send();
                }
            }
        </script>

        <script>
            function GetDetailto(str) {
                if (str.length == 0) {
                    document.getElementById("toadd").value = "";
                    document.getElementById("tobranch").value = "";
                    return;
                } else {

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {

                        if (this.readyState == 4 &&
                            this.status == 200) {

                            var myObj = JSON.parse(this.responseText);



                            document.getElementById("toadd").value = myObj[0];


                            document.getElementById(
                                "tobranch").value = myObj[1];
                        }
                    };


                    xmlhttp.open("GET", "toadd.php?user_id=" + str, true);


                    xmlhttp.send();
                }
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