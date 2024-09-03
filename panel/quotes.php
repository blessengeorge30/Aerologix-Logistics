<?php
    include "../import/db_connection.php";
    
           
    if(isset($_POST["deletion"]))
    {
        $a_ID= $_POST["deletion"];
        $sql = "DELETE from quotes WHERE a_ID = '$a_ID'";
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

<title>:: Admin Panel ::</title>
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



<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Qoutes DataTables</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard"><i class="zmdi zmdi-home"></i> .... logo name ....</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Quotes Tables</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
            
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Quotes</strong> Recevied </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Frieght Type</th>
                                            <th>Total Distance</th>
                                            <th>Submission Time</th>
                                            <th>Opt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           $i=1;
                                            $sql="select * FROM quotes";
                                            $result=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_row($result))
                                            {
                                                $u1=$row[0];
                                                $u2=$row[1];
                                                $u3=$row[2];
                                                $u4=$row[3];
                                                $u5=$row[4];
                                                $u6=$row[5];
                                                $u7=$row[6];
                                                $u8=$row[7];
                                        ?>
                                        <tr>
                                            <td><?php echo $i; $i++; ?></td>
                                            <td><?php echo $u2; ?></td>
                                            <td><?php echo $u3; ?></td>
                                            <td><?php echo $u4; ?></td>
                                            <td><?php echo $u5; ?></td>
                                            <td><?php echo $u6; ?></td>
                                            <td><?php echo $u7; ?></td>
                                            
                                            <td>
                                               
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

            <!-- Exportable Table -->
            <!--<div class="row clearfix">-->
            <!--    <div class="col-lg-12">-->
            <!--        <div class="card">-->
            <!--            <div class="header">-->
            <!--                <h2><strong>Exportable</strong> Examples </h2>-->
            <!--                <ul class="header-dropdown">-->
            <!--                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>-->
            <!--                        <ul class="dropdown-menu dropdown-menu-right slideUp">-->
            <!--                            <li><a href="javascript:void(0);">Action</a></li>-->
            <!--                            <li><a href="javascript:void(0);">Another action</a></li>-->
            <!--                            <li><a href="javascript:void(0);">Something else</a></li>-->
            <!--                        </ul>-->
            <!--                    </li>-->
            <!--                    <li class="remove">-->
            <!--                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--            <div class="body">-->
            <!--                <div class="table-responsive">-->
            <!--                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">-->
            <!--                        <thead>-->
            <!--                            <tr>-->
            <!--                                <th>Name</th>-->
            <!--                                <th>Position</th>-->
            <!--                                <th>Office</th>-->
            <!--                                <th>Age</th>-->
            <!--                                <th>Start date</th>-->
            <!--                                <th>Salary</th>-->
            <!--                            </tr>-->
            <!--                        </thead>-->
            <!--                        <tfoot>-->
            <!--                            <tr>-->
            <!--                                <th>Name</th>-->
            <!--                                <th>Position</th>-->
            <!--                                <th>Office</th>-->
            <!--                                <th>Age</th>-->
            <!--                                <th>Start date</th>-->
            <!--                                <th>Salary</th>-->
            <!--                            </tr>-->
            <!--                        </tfoot>-->
            <!--                        <tbody>-->
            <!--                            <tr>-->
            <!--                                <td>Tiger Nixon</td>-->
            <!--                                <td>System Architect</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>61</td>-->
            <!--                                <td>2011/04/25</td>-->
            <!--                                <td>$320,800</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Garrett Winters</td>-->
            <!--                                <td>Accountant</td>-->
            <!--                                <td>Tokyo</td>-->
            <!--                                <td>63</td>-->
            <!--                                <td>2011/07/25</td>-->
            <!--                                <td>$170,750</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Ashton Cox</td>-->
            <!--                                <td>Junior Technical Author</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>66</td>-->
            <!--                                <td>2009/01/12</td>-->
            <!--                                <td>$86,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Cedric Kelly</td>-->
            <!--                                <td>Senior Javascript Developer</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>22</td>-->
            <!--                                <td>2012/03/29</td>-->
            <!--                                <td>$433,060</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Airi Satou</td>-->
            <!--                                <td>Accountant</td>-->
            <!--                                <td>Tokyo</td>-->
            <!--                                <td>33</td>-->
            <!--                                <td>2008/11/28</td>-->
            <!--                                <td>$162,700</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Brielle Williamson</td>-->
            <!--                                <td>Integration Specialist</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>61</td>-->
            <!--                                <td>2012/12/02</td>-->
            <!--                                <td>$372,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Herrod Chandler</td>-->
            <!--                                <td>Sales Assistant</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>59</td>-->
            <!--                                <td>2012/08/06</td>-->
            <!--                                <td>$137,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Rhona Davidson</td>-->
            <!--                                <td>Integration Specialist</td>-->
            <!--                                <td>Tokyo</td>-->
            <!--                                <td>55</td>-->
            <!--                                <td>2010/10/14</td>-->
            <!--                                <td>$327,900</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Colleen Hurst</td>-->
            <!--                                <td>Javascript Developer</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>39</td>-->
            <!--                                <td>2009/09/15</td>-->
            <!--                                <td>$205,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Sonya Frost</td>-->
            <!--                                <td>Software Engineer</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>23</td>-->
            <!--                                <td>2008/12/13</td>-->
            <!--                                <td>$103,600</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Jena Gaines</td>-->
            <!--                                <td>Office Manager</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>30</td>-->
            <!--                                <td>2008/12/19</td>-->
            <!--                                <td>$90,560</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Quinn Flynn</td>-->
            <!--                                <td>Support Lead</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>22</td>-->
            <!--                                <td>2013/03/03</td>-->
            <!--                                <td>$342,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Charde Marshall</td>-->
            <!--                                <td>Regional Director</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>36</td>-->
            <!--                                <td>2008/10/16</td>-->
            <!--                                <td>$470,600</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Haley Kennedy</td>-->
            <!--                                <td>Senior Marketing Designer</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>43</td>-->
            <!--                                <td>2012/12/18</td>-->
            <!--                                <td>$313,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Tatyana Fitzpatrick</td>-->
            <!--                                <td>Regional Director</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>19</td>-->
            <!--                                <td>2010/03/17</td>-->
            <!--                                <td>$385,750</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Michael Silva</td>-->
            <!--                                <td>Marketing Designer</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>66</td>-->
            <!--                                <td>2012/11/27</td>-->
            <!--                                <td>$198,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Paul Byrd</td>-->
            <!--                                <td>Chief Financial Officer (CFO)</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>64</td>-->
            <!--                                <td>2010/06/09</td>-->
            <!--                                <td>$725,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Gloria Little</td>-->
            <!--                                <td>Systems Administrator</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>59</td>-->
            <!--                                <td>2009/04/10</td>-->
            <!--                                <td>$237,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Bradley Greer</td>-->
            <!--                                <td>Software Engineer</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>41</td>-->
            <!--                                <td>2012/10/13</td>-->
            <!--                                <td>$132,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Dai Rios</td>-->
            <!--                                <td>Personnel Lead</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>35</td>-->
            <!--                                <td>2012/09/26</td>-->
            <!--                                <td>$217,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Jenette Caldwell</td>-->
            <!--                                <td>Development Lead</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>30</td>-->
            <!--                                <td>2011/09/03</td>-->
            <!--                                <td>$345,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Yuri Berry</td>-->
            <!--                                <td>Chief Marketing Officer (CMO)</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>40</td>-->
            <!--                                <td>2009/06/25</td>-->
            <!--                                <td>$675,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Caesar Vance</td>-->
            <!--                                <td>Pre-Sales Support</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>21</td>-->
            <!--                                <td>2011/12/12</td>-->
            <!--                                <td>$106,450</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Doris Wilder</td>-->
            <!--                                <td>Sales Assistant</td>-->
            <!--                                <td>Sidney</td>-->
            <!--                                <td>23</td>-->
            <!--                                <td>2010/09/20</td>-->
            <!--                                <td>$85,600</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Angelica Ramos</td>-->
            <!--                                <td>Chief Executive Officer (CEO)</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>47</td>-->
            <!--                                <td>2009/10/09</td>-->
            <!--                                <td>$1,200,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Gavin Joyce</td>-->
            <!--                                <td>Developer</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>42</td>-->
            <!--                                <td>2010/12/22</td>-->
            <!--                                <td>$92,575</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Jennifer Chang</td>-->
            <!--                                <td>Regional Director</td>-->
            <!--                                <td>Singapore</td>-->
            <!--                                <td>28</td>-->
            <!--                                <td>2010/11/14</td>-->
            <!--                                <td>$357,650</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Brenden Wagner</td>-->
            <!--                                <td>Software Engineer</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>28</td>-->
            <!--                                <td>2011/06/07</td>-->
            <!--                                <td>$206,850</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Fiona Green</td>-->
            <!--                                <td>Chief Operating Officer (COO)</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>48</td>-->
            <!--                                <td>2010/03/11</td>-->
            <!--                                <td>$850,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Shou Itou</td>-->
            <!--                                <td>Regional Marketing</td>-->
            <!--                                <td>Tokyo</td>-->
            <!--                                <td>20</td>-->
            <!--                                <td>2011/08/14</td>-->
            <!--                                <td>$163,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Michelle House</td>-->
            <!--                                <td>Integration Specialist</td>-->
            <!--                                <td>Sidney</td>-->
            <!--                                <td>37</td>-->
            <!--                                <td>2011/06/02</td>-->
            <!--                                <td>$95,400</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Suki Burks</td>-->
            <!--                                <td>Developer</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>53</td>-->
            <!--                                <td>2009/10/22</td>-->
            <!--                                <td>$114,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Prescott Bartlett</td>-->
            <!--                                <td>Technical Author</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>27</td>-->
            <!--                                <td>2011/05/07</td>-->
            <!--                                <td>$145,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Gavin Cortez</td>-->
            <!--                                <td>Team Leader</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>22</td>-->
            <!--                                <td>2008/10/26</td>-->
            <!--                                <td>$235,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Martena Mccray</td>-->
            <!--                                <td>Post-Sales support</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>46</td>-->
            <!--                                <td>2011/03/09</td>-->
            <!--                                <td>$324,050</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Unity Butler</td>-->
            <!--                                <td>Marketing Designer</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>47</td>-->
            <!--                                <td>2009/12/09</td>-->
            <!--                                <td>$85,675</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Howard Hatfield</td>-->
            <!--                                <td>Office Manager</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>51</td>-->
            <!--                                <td>2008/12/16</td>-->
            <!--                                <td>$164,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Hope Fuentes</td>-->
            <!--                                <td>Secretary</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>41</td>-->
            <!--                                <td>2010/02/12</td>-->
            <!--                                <td>$109,850</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Vivian Harrell</td>-->
            <!--                                <td>Financial Controller</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>62</td>-->
            <!--                                <td>2009/02/14</td>-->
            <!--                                <td>$452,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Timothy Mooney</td>-->
            <!--                                <td>Office Manager</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>37</td>-->
            <!--                                <td>2008/12/11</td>-->
            <!--                                <td>$136,200</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Jackson Bradshaw</td>-->
            <!--                                <td>Director</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>65</td>-->
            <!--                                <td>2008/09/26</td>-->
            <!--                                <td>$645,750</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Olivia Liang</td>-->
            <!--                                <td>Support Engineer</td>-->
            <!--                                <td>Singapore</td>-->
            <!--                                <td>64</td>-->
            <!--                                <td>2011/02/03</td>-->
            <!--                                <td>$234,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Bruno Nash</td>-->
            <!--                                <td>Software Engineer</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>38</td>-->
            <!--                                <td>2011/05/03</td>-->
            <!--                                <td>$163,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Sakura Yamamoto</td>-->
            <!--                                <td>Support Engineer</td>-->
            <!--                                <td>Tokyo</td>-->
            <!--                                <td>37</td>-->
            <!--                                <td>2009/08/19</td>-->
            <!--                                <td>$139,575</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Thor Walton</td>-->
            <!--                                <td>Developer</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>61</td>-->
            <!--                                <td>2013/08/11</td>-->
            <!--                                <td>$98,540</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Finn Camacho</td>-->
            <!--                                <td>Support Engineer</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>47</td>-->
            <!--                                <td>2009/07/07</td>-->
            <!--                                <td>$87,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Serge Baldwin</td>-->
            <!--                                <td>Data Coordinator</td>-->
            <!--                                <td>Singapore</td>-->
            <!--                                <td>64</td>-->
            <!--                                <td>2012/04/09</td>-->
            <!--                                <td>$138,575</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Zenaida Frank</td>-->
            <!--                                <td>Software Engineer</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>63</td>-->
            <!--                                <td>2010/01/04</td>-->
            <!--                                <td>$125,250</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Zorita Serrano</td>-->
            <!--                                <td>Software Engineer</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>56</td>-->
            <!--                                <td>2012/06/01</td>-->
            <!--                                <td>$115,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Jennifer Acosta</td>-->
            <!--                                <td>Junior Javascript Developer</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>43</td>-->
            <!--                                <td>2013/02/01</td>-->
            <!--                                <td>$75,650</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Cara Stevens</td>-->
            <!--                                <td>Sales Assistant</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>46</td>-->
            <!--                                <td>2011/12/06</td>-->
            <!--                                <td>$145,600</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Hermione Butler</td>-->
            <!--                                <td>Regional Director</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>47</td>-->
            <!--                                <td>2011/03/21</td>-->
            <!--                                <td>$356,250</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Lael Greer</td>-->
            <!--                                <td>Systems Administrator</td>-->
            <!--                                <td>London</td>-->
            <!--                                <td>21</td>-->
            <!--                                <td>2009/02/27</td>-->
            <!--                                <td>$103,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Jonas Alexander</td>-->
            <!--                                <td>Developer</td>-->
            <!--                                <td>San Francisco</td>-->
            <!--                                <td>30</td>-->
            <!--                                <td>2010/07/14</td>-->
            <!--                                <td>$86,500</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Shad Decker</td>-->
            <!--                                <td>Regional Director</td>-->
            <!--                                <td>Edinburgh</td>-->
            <!--                                <td>51</td>-->
            <!--                                <td>2008/11/13</td>-->
            <!--                                <td>$183,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Michael Bruce</td>-->
            <!--                                <td>Javascript Developer</td>-->
            <!--                                <td>Singapore</td>-->
            <!--                                <td>29</td>-->
            <!--                                <td>2011/06/27</td>-->
            <!--                                <td>$183,000</td>-->
            <!--                            </tr>-->
            <!--                            <tr>-->
            <!--                                <td>Donna Snider</td>-->
            <!--                                <td>Customer Support</td>-->
            <!--                                <td>New York</td>-->
            <!--                                <td>27</td>-->
            <!--                                <td>2011/01/25</td>-->
            <!--                                <td>$112,000</td>-->
            <!--                            </tr>-->
            <!--                        </tbody>-->
            <!--                    </table>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
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