<?php
    include "../import/db_connection.php";
    include "session.php";
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Admin :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->


<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
      
        <!--<li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>-->
        <li><a href="logout" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
 <?php include "import/nav.php"; ?>



<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index"><i class="zmdi zmdi-home"></i> Aerologix</a></li>
                    <li class="breadcrumb-item active">Dashboard </li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
  <div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon" style="transition: transform 0.3s ease-in-out;">
            <div class="body" style="transition: transform 0.3s ease-in-out;">
                <?php
                    $sql="select count(*) FROM enquires";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    $ecount=$row[0];
                ?>
                <h6>Enquiries</h6>
                <h2><?php echo $ecount; ?> <small class="info">Enquires Received</small></h2>
                <small>Total Recieved Enquires</small>
                <div class="progress">
                    <div class="progress-bar l-purple" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon" style="transition: transform 0.3s ease-in-out;">
            <div class="body" style="transition: transform 0.3s ease-in-out;">
                <?php
                    $sql="select count(*) FROM quotes";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    $ecount=$row[0];
                ?>
                <h6>Quotes</h6>
                <h2><?php echo $ecount; ?> <small class="info">Quotes Received</small></h2>
                <small>Total Recieved Quotes</small>
                <div class="progress">
                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="50" style="width: 30%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon" style="transition: transform 0.3s ease-in-out;">
            <div class="body" style="transition: transform 0.3s ease-in-out;">
                <?php
                    $sql="select count(*) FROM tracking_air";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    $ecount=$row[0];
                ?>
                <h6>Tracking Air</h6>
                <h2><?php echo $ecount; ?> <small class="info">Tracking Air Frieghts</small></h2>
                <small>Total Recieved Quotes</small>
                <div class="progress">
                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="50" style="width: 90%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card widget_2 big_icon" style="transition: transform 0.3s ease-in-out;">
            <div class="body" style="transition: transform 0.3s ease-in-out;">
                <?php
                    $sql="select count(*) FROM tracking_ocean";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    $ecount=$row[0];
                ?>
                <h6>Tracking Ocean</h6>
                <h2><?php echo $ecount; ?> <small class="info">Tracking Ocean Frieghts</small></h2>
                <small>Total Recieved Quotes</small>
                <div class="progress">
                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="50" style="width: 50%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Adding hover effect using JavaScript
    document.querySelectorAll('.card').forEach(function(card) {
        card.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        card.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    });
</script>

</section>


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>