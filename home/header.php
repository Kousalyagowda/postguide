<header class="header-style1 menu_area-light">

<div class="navbar-default border-bottom border-color-light-white">

    <!-- start top search -->
    <div class="top-search bg-dark">
        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <form class="search-form" action="https://lifesthtml.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                <div class="input-group">
                    <span class="input-group-addon cursor-pointer">
                        <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                    </span>
                    <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                    <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                </div>
            </form>
        </div>
    </div>
    <!-- end top search -->

    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
        <div class="row align-items-center">
            <div class="col-12 col-lg-12">
                <div class="menu_area alt-font">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="navbar-header navbar-header-custom">
                            <!-- start logo -->
                            <img id="logo" src="img/logos/logo123.jpg" alt="logo" height="5000px" width="250px">
                            <!-- end logo -->
                        </div>

                        <div class="navbar-toggler"></div>

                        <!-- start menu area -->

                        

                        <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                            <?php if(!isset($_SESSION['uid'])){
                                 ?>
                            <li class="btn btn-primary"><a href="../rlogin/login.php">LOGIN</a></li>
                              <?php }?>
                               <?php if(isset($_SESSION['uid'])){
                                 ?>
                            <li class="btn btn-primary" style="color: red"><a href="index.php">HOME</a> </li>
                            <li class="btn btn-primary"><a href="servicereq.php">SERVICES</a></li>
                            <li class="btn btn-primary"><a href="logout.php">LOGOUT</a></li>
                          <?php }?>
                        </ul>
                        <!-- end menu area -->

                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</header>