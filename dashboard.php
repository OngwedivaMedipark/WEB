<?php

session_start();

 $db_host = "35.229.89.118";
 $db_user = "admin";
 $db_pass = "sp!cymacfe@st";
 $db_name = "omeyah";

 $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 if (!$conn) {
     die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
 }
  
//  $sql = 'SELECT personId, firstName, lastName, email, idNumber
//          FROM Person p LIMIT 10';

$sql ='SELECT p.PatientId,ps.FirstName,ps.LastName,ps.Email,ps.HomeTel FROM omeyah.Patient p join
Person ps on ps.PersonId = p.PersonId LIMIT 10';
          
 $query = mysqli_query($conn, $sql);
                             
 if (!$query) {
     die ('SQL Error: ' . mysqli_error($conn));
 }
                                 
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="">
        <!-- App title -->
        <title>Medipark</title>

        <!-- date range picker -->
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <link rel="stylesheet" href="assets/css/dashboard-table.css" type="text/css" />  
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><img src="assets/images/logo.png" alt="" height="30"></a>
                    
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                           
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-success">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Settings</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-email"></i>
                                    <span class="badge up bg-danger">8</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Messages</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Patricia Beach</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-3.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Connie Lucas</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-4.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Margaret Becker</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Messages</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, Shawn</h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>                                    
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
              <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right"></span> <span> Dashboard </span> </a>
                                <ul class="list-unstyled">                                    
                                    <li><a href="dashboard.php">Dashboard </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md"></i><span> Doctors</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-doctor.html">Add Doctor</a></li>
                                    <li><a href="doctors.php">Manage Doctor</a></li>                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-stethoscope"></i><span> Nurse</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-nurse.html">Add Nurse</a></li>
                                    <li><a href="nurses.php">Manage Nurse</a></li>                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a class="waves-effect"><i class="fa fa-user"></i><span> Patients</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-patient.html">Add Patient</a></li>
                                    <li><a href="patients.php">Manage Patient</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>


                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Medipark</a>
                                        </li>                                      
                                        <li class="active">
                                            Dashboard 
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
    
                        <div class="row">

<div class="col-lg-6 col-md-6">
    <div class="card-box widget-box-two widget-two-primary">
        <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
        <div class="wigdet-two-content">
            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Latest Patients admitted Today</p>
            <h2><span data-plugin="counterup">10</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
            <p class="text-muted m-0"><b>Last Admitted:</b>About an hour ago</p>
        </div>
    </div>
</div><!-- end col -->

<div class="col-lg-6 col-md-6">
    <div class="card-box widget-box-two widget-two-warning">
        <i class="mdi mdi-layers widget-two-icon"></i>
        <div class="wigdet-two-content">
            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Patients Discharged Today</p>
            <h2><span data-plugin="counterup">5 </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
            <p class="text-muted m-0"><b>Last Discharge:</b>About 30min ago</p>
        </div>
    </div>
</div><!-- end col -->

<div class="col-lg-6 col-md-6">
    <div class="card-box widget-box-two widget-two-danger">
        <i class="mdi mdi-access-point-network widget-two-icon"></i>
        <div class="wigdet-two-content">
            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Number Of beds Available</p>
            <h2><span data-plugin="counterup">52</span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
            <p class="text-muted m-0"><b>Last Updated:</b> About 5 min ago</p>
        </div>
    </div>
</div><!-- end col -->

<div class="col-lg-6 col-md-6">
    <div class="card-box widget-box-two widget-two-success">
        <i class="mdi mdi-account-convert widget-two-icon"></i>
        <div class="wigdet-two-content">
            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Doctors on Call </p>
            <h2><span data-plugin="counterup">15 </span> <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
            <p class="text-muted m-0"><b>Last Updated:</b> About 15min ago </p>
        </div>
    </div>
</div><!-- end col -->

</div>
                        <!-- end row -->




                        <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Recent Patients Added<h4>
                                        	<div class="table-responsive text-muted m-0">
                                                    <table class="table table-hover mails m-0 table table-actions-bar">
                                                        <thead>
                                                            <tr>
                                                               
                                                                <th>Patient ID</th>
                                                                <th>Name</th>
                                                                <th>Surname</th>
                                                                <th>Email</th>
                                                                <th>Phone Numbers   </th>                                                                
                                                            </tr>
                                                        </thead>
                                                                                       
                                                <tbody>
                                                <?php 
                                                while($row = mysqli_fetch_array($query))
                                                    {
                                                ?>
                                                <tr>
                                                  
                                                    <td>
                                                        <?php echo $row["PatientId"]; ?>
                                                    </td>
            
                                                    <td>
                                                        <?php echo $row["FirstName"]; ?>
                                                    </td>
            
                                                    <td>
                                                        <?php echo $row["LastName"]; ?>
                                                    </td>
            
                                                    <td>                                       
                                                        <?php echo $row["Email"]; ?>
                                                    </td>
            
                                                    <td>
                                                        <?php echo $row["HomeTel"]; ?>
                                                    </td>
                                                    <td>                                                  
                                                </tr>
                                                <?php
                                                 } 
                                               
                                                 ?>
                                                </tbody>
                                            </table>
            
                                                </div> <!-- end table responsive -->
                                            </div> <!-- end card-box -->

                                    <!--<div class="table-responsive">
                                        <table class="table table table-hover m-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>User Name</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="thumb-sm img-circle" />
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0">Louis Hansen</h5>
                                                        <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                    </td>
                                                    <td>+12 3456 789</td>
                                                    <td>USA</td>
                                                    <td>07/08/2016</td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <span class="avatar-sm-box bg-primary">C</span>
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0">Craig Hause</h5>
                                                        <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                                    </td>
                                                    <td>+89 345 6789</td>
                                                    <td>Canada</td>
                                                    <td>29/07/2016</td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <img src="assets/images/users/avatar-7.jpg" alt="user" class="thumb-sm img-circle" />
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0">Edward Grimes</h5>
                                                        <p class="m-0 text-muted font-13"><small>Founder</small></p>
                                                    </td>
                                                    <td>+12 29856 256</td>
                                                    <td>Brazil</td>
                                                    <td>22/07/2016</td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <span class="avatar-sm-box bg-pink">B</span>
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0">Bret Weaver</h5>
                                                        <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                    </td>
                                                    <td>+00 567 890</td>
                                                    <td>USA</td>
                                                    <td>20/07/2016</td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <img src="assets/images/users/avatar-8.jpg" alt="user" class="thumb-sm img-circle" />
                                                    </th>
                                                    <td>
                                                        <h5 class="m-0">Mark</h5>
                                                        <p class="m-0 text-muted font-13"><small>Web design</small></p>
                                                    </td>
                                                    <td>+91 123 456</td>
                                                    <td>India</td>
                                                    <td>07/07/2016</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>--> <!-- table-responsive -->
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        

                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Messages</h4>

                                    <div class="inbox-widget slimscroll-alt" style="min-height: 302px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Miriam Chobe</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Shetu Sheetekela</p>
                                                <p class="inbox-item-text">IT Upgrading Hospital network!..</p>
                                                <p class="inbox-item-date">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Frank Mokgoloboto</p>
                                                <p class="inbox-item-text">New Ongwediva Medipark Website is live!...</p>
                                                <p class="inbox-item-date">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Princess Shikomba</p>
                                                <p class="inbox-item-text">Nice to meet you...</p>
                                                <p class="inbox-item-date">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Rongeni Petrus</p>
                                                <p class="inbox-item-text">Economy is good, we made a profi...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                        <!-- <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Adhamdannaway</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">9:56 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Arashasghari</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="img-circle" alt=""></div>
                                                <p class="inbox-item-author">Joshaustin</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">9:56 AM</p>
                                            </div>
                                        </a> -->
                                    </div>

                                </div> <!-- end card -->
                            </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Medipark.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Flot chart js -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard_2.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
        </script>

    </body>
</html>