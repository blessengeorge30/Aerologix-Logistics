<?php
    include "import/db_connection.php";
  
    
    if(isset($_POST["submit"]))
    {
     $user1 = $_POST["user_name"];
     $user2 = $_POST["user_email"];
     $user3 = $_POST["user_phoneno"];
          $user4 = $_POST["user_freighttype"];
               $user5 = $_POST["user_totaldistance"];
  

  
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('d-m-Y H:i:s');
        $sql = "INSERT INTO quotes VALUES (NULL, '$user1', '$user2', '$user3','$user4','$user5', '$currentTime')";
        if (mysqli_query($conn, $sql)) 
        {
            function submitForm() 
            {
                echo("<script type='text/javascript'>window.alert('Submission Successful.')</script>");
            }
            sleep(1);
            submitForm(); 
            sleep(1);
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>AeroLogix - Logistics & Transportation HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.svg">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Css -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>

<body class="tt-magic-cursor">

 <?php include "import/header.php"; ?>

    <!-- Page header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header box Start -->
                    <div class="page-header-box">
                        <h2 class="text-anime-style-3">Request Quote</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li> Request Quote</li>
                            </ol>
                        </nav>                                
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Get In Touch Section Start -->
    <div class="get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <!-- Get Quote Start -->
                    <div class="get-quote">
                        <h2 class="text-anime-style-3">Request Quote</h2>
                        <div class="get-quote-content">
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Please fill out the form below to get in touch with us. We'll get back to you as soon as possible.</p>
                        </div>
                        <div class="get-quote-form wow fadeInUp" data-wow-delay="0.75s">
                            <form id="" action="" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" class="form-control" id="name" name="user_name" placeholder="Enter Your Full Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group  col-md-12 mb-3">
                                        <input type="email" class="form-control" id="email"  name="user_email" placeholder="Enter Your Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="form-group  col-md-12 mb-3">
                                        <input type="number" class="form-control" id="email"  name="user_phoneno" placeholder="Enter Your Phone No" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                     <div class="form-group col-md-12 mb-3">
                                        <input type="text" class="form-control" id="name"  name="user_freighttype" placeholder="Enter Your Freight type" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                     <div class="form-group col-md-12 mb-3">
                                        <input type="text" class="form-control" id="name" name="user_totaldistance" placeholder="Enter Your Total Distance" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                  

                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn-default">Submit</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Get Quote End -->
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="contact-us">
                        <h2 class="text-anime-style-3">Quick links</h2>
                        <!-- Contact Us Info Start -->
                        <div class="contact-us-info">
                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>

                                <p>Help@gmail.com</p>
                            </div>

                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>

                                <p>121 King Street, Melbourne</p>
                            </div>

                            <div class="footer-info-box wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="images/icon-call.svg" alt="">
                                </div>

                                <p>808 707 6060</p>
                            </div>
                        </div>
                        <!-- Contact Us Info End -->

                        <!-- Contact Us Footer Start -->
                        <div class="contact-us-footer wow fadeInUp" data-wow-delay="1s">
                            <div class="topbar-social-links contact-details">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!--Get Contact Us Start-->
                            <div class="header-contact-us">
                                <a href="#"><img src="images/icon-phone.svg" alt=""><h3>Call Anytime <span>808 707 6060</span></h3></a>
                            </div>                           
                            <!--Get Contact Us End--> 
                        </div>
                        <!-- Contact Us Footer End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->


    
    

    <!-- Main Footer Start  -->
    <?php include "import/footer.php"; ?>
    <!-- Footer Copyright Section End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js File -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js File -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js File -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js File -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js File -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js File -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
	<script src="js/parallaxie.js"></script>
    <!-- MagicCursor js File -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js File -->
	<script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js File -->
    <script src="js/wow.js"></script>
    <!-- Main Custom js File -->
    <script src="js/function.js"></script>
</body>

</html>