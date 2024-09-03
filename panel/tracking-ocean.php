<?php
    include "../import/db_connection.php";
    if(isset($_POST["submission"]))
    {
     $u1 = $_POST["i1"];
     $user2 = $_POST["i2"];

        $sql = "INSERT INTO tracking_ocean VALUES (NULL, '$u1', '$user2')";
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
    
    
    if(isset($_POST["deletion"]))
    {
        $a_id= $_POST["deletion"];
        $sql = "DELETE from tracking_ocean WHERE a_ID = '$a_id'";
        if (mysqli_query($conn, $sql)) 
        {
            function submitForm() 
            {
                echo("<script type='text/javascript'>window.alert('Deletion Successful.')</script>");
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
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Admin Panel | Ocean ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="assets/css/style.min.css">
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
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
       

  

        <!--<li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>-->
        <li><a href="index" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
 <?php include "import/nav.php"; ?>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <!--<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>-->
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
    </ul>

</aside>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Tracking Ocean Frieght</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard"><i class="zmdi zmdi-home"></i> Aerologix </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Enquiry Tables</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                
                
                
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button type="button" class="btn btn-success waves-effect m-r-20 float-right" data-toggle="modal" data-target="#defaultModal"><i class="zmdi zmdi-collection-plus"></i> Add New</button>
                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="title" id="defaultModalLabel">Add New<button class="btn btn-sm btn-default btn-round waves-effect float-right" data-dismiss="modal" aria-label="Close">Close</button></h4>
                                </div>
                                <hr>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                <p align="center">Brand Name</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="form-group">
                                                    <input name="i1" class="form-control" placeholder="Enter Brand Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                <p align="center">Tracking URL</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="form-group">
                                                    <input name="i2" class="form-control" placeholder="Enter Tracking URL" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">    
                                            <div class="col-sm-6 offset-sm-3">
                                                <button type="submit" name="submission" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                                                <button type="reset" class="btn btn-raised btn-danger btn-round waves-effect">Clear</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>                                             
                </div>
                
                
                
            </div>
        </div>

        <div class="container-fluid">
            
            
            
            <!-- Basic Examples -->
            
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>ocean </strong> tracking  </h2>
                            <ul class="header-dropdown">
                              
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Brand Name</th>
                                            <th>Tracking URL</th>
                                            <th>Opt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=1;
                                            $sql="select * FROM tracking_ocean";
                                            $result=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_row($result))
                                            {
                                                $u1=$row[0];
                                                $u2=$row[1];
                                                $u3=$row[2];
                                               
                             
                                        ?>
                                        <tr>
                                            <td><?php echo $i; $i++; ?></td>
                                            <td><?php echo $u2; ?></td>
                                            <td><?php echo $u3; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-primary btn-round waves-effect" href="<?php echo $u3 ?>" target="_blank">Visit Link</a>
                                                <form action="" method="post">
                                                    <button class="btn btn-sm btn-danger btn-round waves-effect" type="submit" value="<?php echo $u1 ?>" name="deletion">Delete</button>
                                                </form>
                                            </td>
                            
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

   
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>
</html>