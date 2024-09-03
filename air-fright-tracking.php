<?php
    include "import/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Awaiken">
        <title>Logistics & Transportation</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.svg">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/slicknav.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link href="css/all.min.css" rel="stylesheet" media="screen">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet" media="screen">
    </head>
    <body class="tt-magic-cursor">
        <?php include "import/header.php"; ?> 
        <div class="page-header parallaxie">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-header-box">
                            <h2 class="text-anime-style-3">Air Tracking</h2>
                            <nav class="wow fadeInUp" data-wow-delay="0.25s">
                                <ol class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li> Tracking </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-posts blog-page">
            <div class="container">
                <div class="row">
                    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                        <?php
                            $sql="select * FROM ocean_tracking";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_row($result))
                            {
                                $u1=$row[0];
                                $u2=$row[1];
                                $u3=$row[2];
                        ?>
<style>
    .card-container {
        background-color: lightgrey;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        width: 32%;
        margin-bottom: 25px;
        box-sizing: border-box;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth scaling and shadow transition */
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Initial subtle shadow */
    }
    
    .card-container:hover {
        transform: scale(1.05); /* Scale the card on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Larger shadow on hover */
    }
    
    .post-item {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        width: 100%;
    }
    
    .post-body h3 a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease-in-out; /* Smooth color transition */
    }
    
    .post-body h3 a:hover {
        color: #007bff; /* Change color on hover */
    }
    
    .post-readmore a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease-in-out; /* Smooth color transition */
    }
    
    .post-readmore a:hover {
        color: #0056b3; /* Darker color on hover */
    }
</style>


<div class="col-lg-4 col-md-6 card-container">
    <div class="post-item wow fadeInUp" data-wow-delay="0.75s">
        <div class="post-body">
            <h3><a href="<?php echo $u3 ?>" target="_blank"><?php echo $u2 ?></a></h3>
            <div class="post-readmore"> 
                <a href="<?php echo $u3 ?>" target="_blank">Track Now</a> 
            </div>
        </div>
    </div>
</div>

                        <?php 
                            }
                        ?>
                    </div>
                    <!--
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-md-12" >
                            <div class="post-pagination wow fadeInUp" data-wow-delay="1s">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
       
       
        <?php include "import/footer.php"; ?>
        <script src="js/jquery-3.7.1.min.js"></script> <script src="js/bootstrap.min.js"></script> <script src="js/validator.min.js"></script> <script src="js/jquery.slicknav.js"></script> <script src="js/swiper-bundle.min.js"></script> <script src="js/jquery.waypoints.min.js"></script> <script src="js/jquery.counterup.min.js"></script> <script src="js/jquery.magnific-popup.min.js"></script> <script src="js/SmoothScroll.js"></script> <script src="js/parallaxie.js"></script> <script src="js/gsap.min.js"></script> <script src="js/magiccursor.js"></script> <script src="js/SplitText.js"></script> <script src="js/ScrollTrigger.min.js"></script> <script src="js/jquery.mb.YTPlayer.min.js"></script> <script src="js/wow.js"></script> <script src="js/function.js"></script>
    </body>
</html>