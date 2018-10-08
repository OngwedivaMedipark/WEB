<?php

$name = $_POST['firstName'];
$lastname = $_POST['lastName'];
$dob = $_POST['dateOfBirth'];
$IdNumber = $_POST['idNumber'];   
$MiddleName = $_POST['middleName'];   
$ResAddress1 = $_POST['resAddress1'];
$ResPostCode = $_POST['resPostCode'];
$Title = $_POST['title'];
$Religion = $_POST['religion'];
$Email = $_POST['email'];
$BusAddress = $_POST['busAddress'];
$BusPostCode = $_POST['busPostCode'];   
$HomeTel = $_POST['homeTel'];
$WorkTel = $_POST['workTel'];
$ResSurbub = $_POST['resSurbub'];
$Country = $_POST['country'];
$GenderId = $_POST['genderId'];  
$Ethnicity = $_POST['ethnicity'];
$IdentityType = $_POST['identityType'];
$MaritalStatus = $_POST['maritalStatus'];   
$output='';  
$db_host = "35.229.89.118";
$db_user = "admin";
$db_pass = "sp!cymacfe@st";
$db_name = "omeyah";  
$personId = $_POST["PersonId"]; 
  
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
      die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
  }                           
 
  $sql = "UPDATE omeyah.Person SET FirstName ='$name', LastName='$lastname', IdNumber='$IdNumber',ResAddress1 = '$ResAddress1',  ResPostCode = '$ResPostCode', 
  Title = '$Title', Religion = '$Religion', Email = '$Email', BusAddress = '$BusAddress',  HomeTel = '$HomeTel', WorkTel = '$WorkTel',
   ResSurbub = '$ResSurbub', Country ='$Country',   IdentityType =' $IdentityType', MaritalStatus = '$MaritalStatus', GenderId = '$GenderId'   WHERE PersonId = '$personId'";
  
  if ($conn->query($sql) === TRUE) {
  $message = "Record for " .$name. " "  .$lastname. " updated successfully";
} else {
    $message = "Error updating record: " . $conn->error;
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

      
        <!-- App title -->
        <title>Medipark</title>

        <!-- Modal effect css -->
        <link href="../plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<style>
.modal-dialog{height:auto !important}
</style>
        <script src="js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><img src="assets/images/logo.png" alt="" height="30"></i></a>
                 
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
                                                <img src="images/users/avatar-2.jpg" alt="">
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
                                                <img src="images/users/avatar-3.jpg" alt="">
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
                                                <img src="images/users/avatar-4.jpg" alt="">
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
                                    <img src="images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
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
                                    <li><a href="dashboard.html">Dashboard </a></li>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user"></i><span> Patients</span> <span class="menu-arrow active"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-patient.html">Add Patient</a></li>
                                    <li><a href="patients.php">Manage Patient</a></li>
                                   
                                </ul>
                            </li>

                            <!--<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-deskphone"></i><span> Medical Aid</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Medical Aid Verification</a></li>
                                   
                                </ul>
                            </li>-->


                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>


                </div>
                <!-- Sidebar -left -->

            </div>
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
                                    <h4 class="page-title">Nurses </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Medipark</a>
                                        </li>
                                       
                                        <li class="active">
                                            Nurses
                                        </li>                                        
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                        	<div class="col-lg-12">
                        		<div class="card-box">
                        			<div class="row">
			                        	<div class="col-sm-8">
			                        		<form>
			                                    <div class="form-group search-box">
                                                    <input type="text" id="search-input" class="form-control product-search" placeholder="Search here...">
                                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                                </div>
			                                </form>
                                        </div>
                                        
                                        <div class="col-sm-2">
                                                <a class="btn btn-success btn-rounded btn-md waves-effect waves-light m-b-30"  onclick="advancedSearch()"><i class="md md-add"></i> Advanced Search</a>
                                           </div>
                                            <div class="col-sm-2">
                                                 <a href="add-nurse.html" class="btn btn-success btn-rounded btn-md waves-effect waves-light m-b-30" > Add New Burse</a>
                                            </div>

                                        <div class="col-sm-8" id="advanced-search">
                                                <form>
                                                        <div class="form-group search-box">
                                                           
                                                                <input for="checkbox5" type="checkbox"> ID Number
                                                                
                                                                <input type="checkbox" name="sameaddress" value="" id=""> First Name

                                                                <input type="checkbox" name="sameaddress" value="" id=""> Patient ID
                                                            
                                                        </div>
                                                    </form>
                                        </div>

			                        </div>
 


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

<div class="modal-dialog">


  <div class="modal-content">
    <div class="modal-header text-primary">
      <a href="nurses.php" class="close" data-dismiss="modal">�</a>
      <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i> Nurse Edit Details</h4>
    </div>
    <div class="modal-body">
    <?php echo $message; ?>
    </div>
    <div class="modal-footer">
	  <a href="nurses.php" class="btn btn-default">Finish</a>
    </div>
  </div>

</div>
</div> 
  <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modals.js"></script>
        <script src="assets/js/manage-patient.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <!--<script src="assets/js/add-patient.js"></script>-->

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    <!-- Modal-Effect -->
        <script src="../plugins/custombox/js/custombox.min.js"></script>
        <script src="../plugins/custombox/js/legacy.min.js"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>

<script type="text/javascript">
  $(window).load(function(){
                $('#onload').modal('show');
            });
</script>

    </body>
</html>