<?php
include("block.php");


$get_setting ="select * from settings";
$run_setting = mysqli_query($connect,$get_setting);
$row_setting = mysqli_fetch_array($run_setting);
$phone = $row_setting['phone'];
$location = $row_setting['location2'];
$email4 = $row_setting['email'];

?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- [if lt IE 9]>

        <script src="js/html5shiv.min.js"></script>

        <script src="js/respond.min.js"></script>

    <![endif] -->
        <link rel="stylesheet" type="text/css" href="bci-assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="bci-assets/css/animate.css">
    <script type="text/javascript">
<?php echo"$chat";?>
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="line-awesome/css/line-awesome.min.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
</head>
<body>


     
    <!-- header area -->
    <section class="header header--2">
        
     <div class="top_bar top--bar2 d-flex align-items-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex topbar_content justify-content-between">
                        <div class="top_bar--info order-0 d-none d-lg-block align-self-center">
                            <ul>
                                <li><span class="la la-envelope"></span> <p><?php echo"$email4";?></p></li>
                                <li><span class="la la-headphones"></span> <p><?php echo"$phone";?></p></li>
                                <li><span class="la la-clock-o"></span> <p>Mon-Sat 8.00 - 18.00</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    <!-- start menu area -->
    <div class="menu_area menu1">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
                <a class="navbar-brand order-sm-1 order-1" href="about.php#"><img src="img/logo.jpeg" alt=""/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="la la-bars"></span>
                </button>

                <div class="collapse navbar-collapse order-md-1" id="navbarSupportedContent2">
                    
    
        
    
    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
            <!-- end: .mega-menu -->
        </li>
        <li class="nav-item active has_mega-lg">
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
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
    </ul>
    <!-- end: .navbar-nav -->
    <!-- end: .navbar-nav -->

                </div>
            </nav>
        </div>
    </div>
    <!-- end menu area -->

    </section><!-- end: .header -->
