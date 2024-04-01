<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">SIGN UP</h2>
                        <form method="POST" action="../controller/registration.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="enter minimum eight character" required="" />
                            </div>
                            
                            <div class="form-group">
                                <label for="mail"></i></label>
                                <input type="email" name="mail" id="mail" placeholder="Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="" />
                            </div>
                            <div class="form-group">
                                <label for="address"></i></label>
                                <input type="text" name="address" id="address" placeholder="please enter your address" required="" />
                            </div>
                            <div class="form-group" range="10">
                                <label for="ph_no"></i></label>
                                <input type="tel" name="ph_no" id="ph_no" placeholder="Please enter your phone number" pattern="[6-9]{1}[0-9]{9}" title="please enter correct mobile number" required=""  />
                            </div>
                            
                                <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                           
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/user1.jpg" alt="sign up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

     </div>
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>