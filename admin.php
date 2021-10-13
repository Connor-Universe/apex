<?php include "include/admin_process.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apex Investment Limited - Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="line-awesome/css/line-awesome.min.css">
    <link rel= "stylesheet" href="css/bootstrap.css">
    <!-- endinject-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
</head>
<body>
     
    <section class="login-register bgimage biz_overlay overlay--secondary2">
        <div class="bg_image_holder">
            <img src="img/image3.jpg" alt="">
        </div>
        <div class="content_above">
            
    <!-- start menu area -->
    <div class="menu_area menu5">
        <div class="container">
            <nav class="navbar navbar-bg navbar-expand-lg px-0">
                <a class="navbar-brand order-sm-1 order-1" href="login.php#"><img src="img/logo.jpeg" alt=""/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent5" aria-controls="navbarSupportedContent5" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="la la-bars"></span>
                </button>

                <div class="collapse navbar-collapse order-md-1" id="navbarSupportedContent5">
                    
    
        
    
    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
            <!-- end: .mega-menu -->
        </li>
        <li class="nav-item has_mega-lg">
            <a class="nav-link" href="about.php">About Us</a>
            <!-- end: .mega-menu -->
        </li>
        <li class="nav-item has_mega-lg">
            <a class="nav-link" href="pricing.php">Investment Plans</a>
            <!-- end: .mega-menu -->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="faqs.php">FAQ</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
    </ul>
    <!-- end: .navbar-nav -->

                </div>
            </nav>
        </div>
    </div>
    <!-- end menu area -->

    <div class="login-form d-flex align-items-center">
        <div class="container">
                   
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                            <div class="form-wrapper">
                                <div class="card card-shadow">
                                    <div class="card-header">
                                        <h4 class="text-center">Login!</h4>
                                    </div>
                                    <div class="card-body">
                                        <form id="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                        <?php echo"$fail";?>
                                        <?php echo"$username_err";?>   
                        <div class="form-group">
                            <label class="fixlabel" for="email1">
                 
                            </label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your username">
                        </div>
                        <?php echo"$password_err";?>

                        <div class="form-group">
                            <label class="fixlabel" for="pass1">
                         
                            </label>
                            <input type="password" name="password"  class="form-control" placeholder="Password">

                        </div>
                        <div class="form-group">
                            <input type="submit"  id="recaptcha"  class="btn btn-primary" value="SIGN IN">
                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .col-lg-6 -->
                    </div>
                </div>
            </div><!-- ends: .login-form -->

        </div>
    </section>


     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
     <!-- inject:js-->
     <script src="js/plugins.min.js"></script>
     <script src="js/script.min.js"></script>
     <script src="js/jquery-2.2.4.min.js"></script>
     <script src="js/alertify.min.js"></script>
     <script src="js/data-control.js"></script>
     <!-- endinject-->
</body>
</html>