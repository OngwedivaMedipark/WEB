<?php

error_reporting(0);
ini_set('display_errors', 0);

  $output='';  
  $db_host = "35.229.89.118";
  $db_user = "admin";
  $db_pass = "sp!cymacfe@st";
  $db_name = "omeyah";
  
  $personId = $_GET["id"]; 
  
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
      die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
  }                           
 
  $sql = "SELECT * FROM omeyah.Person WHERE PersonId = '$personId'";
  

  $query = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($query))
      {
         $firstName = $row['FirstName'];
         $lastname = $row['LastName'];
         $dob = $row['DateOfBirth'];
         $IdNumber = $row['IdNumber'];
         $PassportNumber = $row['PassportNumber'];
         $CauseOfDeath = $row['CauseOfDeath'];
         $DeathDate = $row['DeathDate'];
         $CreatorId = $row['CreatorId'];
         $MiddleName = $row['MiddleName'];
         $Initials = $row['Initials'];
         $ResAddress1 = $row['ResAddress1'];
         $ResPostCode = $row['ResPostCode'];
         $Title = $row['Title'];
         $Religion = $row['Religion'];
         $Email = $row['Email'];
         $BusAddress = $row['BusAddress'];
         $BusPostCode = $row['BusPostCode'];
         $Type = $row['Type'];
         $TypeBusName = $row['TypeBusName'];
         $HomeTel = $row['HomeTel'];
         $WorkTel = $row['WorkTel'];
         $ResSurbub = $row['ResSurbub'];
         $Country = $row['Country'];
         $GenderId = $row['GenderId'];
         $DeadTypeId = $row['DeadTypeId'];
         $Ethnicity = $row['Ethnicity'];
         $IdentityType = $row['IdentityType'];
         $MaritalStatus = $row['MaritalStatus'];
         
      }
        
 
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-stethoscope"></i><span> Nurses</span> <span class="menu-arrow"></span></a>
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
                                            Edit Nurses
                                        </li>                                        
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                        	<!--<div class="col-lg-12">
                        		<div class="card-box">
                        			<div class="row">
			                        	<div class="col-sm-8">
			                        		<form>
			                                    <div class="form-group form-inline search-box">
                                                    <input type="text" id="search-input" class="form-control product-search" placeholder="Search here...">
                                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                                </div>
			                                </form>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="" class="btn btn-success btn-rounded btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-overlayColor="#36404a" data-toggle="modal" data-target="#custom-modal"><i class="md md-add"></i> Advanced Search</a>
                                       </div>
			                        	<div class="col-sm-2">
			                        		 <a href="" class="btn btn-success btn-rounded btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-overlayColor="#36404a" data-toggle="modal" data-target="#custom-modal"><i class="md md-add"></i> Add New Patient</a>
			                        	</div>
			                        </div>

                        		
                        		</div>--> <!-- end card-box -->

                               

                            </div> <!-- end col -->
                            <div class="col-lg-12">
                                <div class="add-patient-container">
                                    <h4 class="custom-modal-title">Add New Nurse</h4>
                                    <div class="custom-modal-text text-left">
        
        
                                        <!-- Modal -info -->
                                        <form class="add-doctor" action="update-doctor.php" method="post" id="update-nurse">
                                            <ul id="progressbar">
                                                <li class="active">Personal Information</li>
                                                <li>Contact Information</li>
                                                <li>Practice Information</li>
                                                <li>Qualification Information</li>
                                                <li>Declaration</li>
                                            </ul>
                                            <input type="hidden" value="<?php echo $personId;?>" name="PersonId" id="PersonId" />
        
        
        
                                            <!-- Personal Information -->
                                            <fieldset>
                                                <h2 class="fs-title">Personal Information</h2>
                                                <h3 class="fs-subtitle"></h3>
        
                                                <div class="col-lg-8">
                                                    <div class="form-group form-inline">
                                                        <label for="title">Title <span>*</span></label>
                                                        <select name="title" class="form-control" id="title" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="title">Title</option>
                                                            <option value="mr">Mr</option>
                                                            <option value="mrs">Mrs</option>
                                                            <option value="miss">Miss</option>
                                                            <option value="ms">Ms</option>
                                                            <option value="prof">Prof</option>
                                                            <option value="dr">Dr</option>
                                                            <option value="rev">Rev</option>
                                                            <option value="hon">Hon</option>
        
                                                        </select>
        
                                                        <span class="error1" style="display: none;">
                                                            <i class="error-log fa fa-exclamation-triangle"></i>
                                                        </span>
                                                    </div>
        
        
                                                    <div class="form-group form-inline">
                                                        <label for="firstName">First Name <span>*</span></label>
                                                        <input type="text" class="form-control" name='firstName' value="<?php echo $firstName;?>" id="firstName" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="middleName">Middle Name</label>
                                                        <input type="text" class="form-control" name="middleName" value="<?php echo $MiddleName;?>" id="middleName" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="lastName">Last Name <span>*</span></label>
                                                        <input type="text" class="form-control" name="lastName" value="<?php echo $lastname;?>" id="lastName" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="maidenName">Maiden name </label>
                                                        <input type="text" class="form-control" id="maidenName" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="genderId">Gender <span>*</span></label>
                                                        <select name="genderId" class="form-control" value="<?php echo $GenderId;?>" id="gender" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="dateOfBirth">Date of Birth <span>*</span></label>
                                                        <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="dateOfBirth">Age</label>
                                                        <input type="text" class="form-control"  id="age" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="idType">Identity Type <span>*</span></label>
        
                                                        <select name="identityType" class="form-control" id="idType" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="ID">ID Document</option>
                                                            <option value="passport">Passport</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="identityNumber">Identity Number</label>
                                                        <input type="text" class="form-control" name="idNumber" value="<?php echo $IdNumber;?>" id="identityNumber" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="maritialStatus" >Maritial Status <span>*</span></label>
        
                                                        <select name="maritalStatus" value="<?php echo $MaritalStatus;?>" class="form-control" id="maritalstatus" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="single">Single</option>
                                                            <option value="married">Married</option>
                                                            <option value="devorced">Devorced</option>
                                                            <option value="windowed">Widowed</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="Ethnicity">Ethnicity <span>*</span></label>
        
                                                        <select name="ethnicity" value="<?php echo $Ethnicity;?>" class="form-control" id="ethnicity" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="black">Black</option>
                                                            <option value="white">White</option>
                                                            <option value="coloured">Coloured</option>
                                                            <option value="indian">Indian</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="nationality">Nationality <span>*</span></label>
        
                                                        <select name="nationality" value="<?php echo $Country;?>" class="form-control" id="nationality" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="namibia">Namibia</option>
                                                            <option value="angola">Angola</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="religion">Religion <span>*</span></label>
        
                                                        <select name="religion" class="form-control" id="religion" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="christianity">Christianity</option>
                                                            <option value="islam">Islam</option>
                                                            <option value="buddhism">Buddhism</option>
                                                            <option value="judaism">Judaism</option>
                                                            <option value="atheism">Atheism</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-12"></div>
                                                <!-- End Total Number of Constituents in Your Database Field -->
                                                <input type="button" data-page="1" name="next" class="next action-button" value="Save & Continue" />
        
                                            </fieldset>
        
        
                                            <!-- Contact Information -->
                                            <fieldset>
                                                <h2 class="fs-title">Contact Information</h2>
                                                <div class="col-lg-6">
                                                    <div class="form-group form-inline">
                                                        <label for="occupation">Home Telephone</label>
                                                        <input type="text" name="homeTel" value="<?php echo $HomeTel;?>" class="form-control" id="home-telephone" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="occupation">Work Telephone</label>
                                                        <input type="text" name="workTel" value="<?php echo $WorkTel;?>" class="form-control" id="work_telephone" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="cellNumber">Cell Number <span>*</span></label>
                                                        <input type="text"  class="form-control" id="cell-number" placeholder="">
                                                    </div>
                                                    <div class="form-group form-inline">
                                                        <label for="email">Email <span>*</span></label>
                                                        <input type="email" value="<?php echo $Email;?>" class="form-control" id="email" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="PreferredContact">Preffered Contact Method</label>
                                                        <select name="PreferredContact" class="form-control" id="contact-methods" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="male">Phone</option>
                                                            <option value="female">Email</option>
                                                            <option value="female">Post</option>
        
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="PreferredContactHours">Preferred Contact Hours</label>
                                                        <select name="PreferredContactHours" class="form-control" id="contact-methods" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="anytime">Anytime</option>
                                                            <option value="workinghours">Working Hours</option>
                                                            <option value="afterhours">After Hours</option>
        
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                          <label for="busAddress">Building/House <span>*</span></label>
                                                             <input type="text" class="form-control" id="building-house" name="busAddress"  value="<?php echo $BusAddress;?>"  placeholder="">
                                                         </div>

                                                    <div class="form-group form-inline">
                                                        <label for="resAddress1">Street Name <span>*</span></label>
                                                         <input type="text" class="form-control" name="resAddress1" id="street-name"  value="<?php echo $ResAddress1;?>"  placeholder="">
                                                     </div>

                                                      <div class="form-group form-inline">
                                                           <label for="resSurbub">Suburb/Town <span>*</span></label>
                                                               <input type="text" class="form-control"name="resSurbub" id="resSurbub"  value="<?php echo $ResSurbub;?>"  placeholder="">
                                                        </div>
                                                    <div class="form-group form-inline">
                                                         <label for="country">Country <span>*</span></label>
                                                        <input type="text" class="form-control" name="country" id="country"  value="<?php echo $Country;?>"  placeholder="">
                                                     </div>
                                                    <div class="form-group form-inline">
                                                        <label for="resPostCode">Postal Code <span>*</span></label>
                                                       <input type="text" class="form-control" name="resPostCode" id="resPostCode"  value="<?php echo $ResPostCode;?>"  placeholder="">

                                                   </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="Country">Country <span>*</span></label>
                                                        <input type="text" class="form-control" id="country"  value="<?php echo $Country;?>" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="occupation">Postal Address:</label>
                                                    </div>
        
        
                                                    <div class="form-group form-inline">
                                                        <input type="radio" name="sameaddress" value="" id="same-address"> Same as
                                                        Residential Address
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="postalBox">Postal Box <span>*</span></label>
                                                        <input type="text" class="form-control" id="postal-box" placeholder="">
        
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="postalCode">Postal Code <span>*</span></label>
                                                        <input type="text" class="form-control" id="postal-code" placeholder="">
        
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-6">
        
        
                                                </div>
                                                <div class="col-lg-12">
        
                                                </div>
                                                <!-- End Calc of Total Number of Donors Fields -->
                                                <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
                                                <input type="button" data-page="2" name="next" class="next action-button" value="Save & Continue" />
        
                                            </fieldset>
        
        
                                            <!-- Practice Information -->
                                            <fieldset>
                                                <h2 class="fs-title">Practice Information</h2>
                                                <h3 class="fs-subtitle"></h3>
        
                                                <div class="col-lg-6">
        
                                                     <div class="form-group form-inline">
                                                        <label for="hpcnaNum">HPCNA Registration Number <span>*</span></label>
                                                        <input type="text" name="hpcnaRegistrationNumber" class="form-control" id="hpcnaNum" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="practiceNumber">Practice Number<span>*</span></label>
                                                        <input type="text" name="practiceNumber" class="form-control" id="practiceNumber" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="practiceType">Practice Type <span>*</span></label>
                                                        <select name="practiceType" class="form-control" id="practiceType" placeholder="">
                                                            <option>--Select option--</option>
                                                            <option value="privatePraticeRooms">Private Pratice Rooms</option>
                                                            <option value="clinic">Clinic</option>
                                                            <option value="hospital">Hospital</option>
                                                            <option value="dayCareHospital">Day Care Hospital</option>
                                                            <option value="maternityClinic">Maternity Clinic</option>
                                                            <option value="laboratory">Laboratory</option>
                                                            <option value="radiology">Radiology</option>
                                                            <option value="bloodBank">Blood Bank</option>
                                                            <option value="dialysisCentre">Dialysis Centre</option>
                                                            <option value="diabetesCentre">Diabetes Centre</option>
                                                            <option value="hospice">Hospice</option>
                                                            <option value="rehabilitationCentre">Rehabilitation Centre</option>
                                                            <option value="nursingHome">Nursing Home</option>
                                                            <option value="mentalHealthCentre">Mental Health Centre</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="telephone">Telephone <span>*</span></label>
                                                        <input type="text" name="telephone" class="form-control" id="telephone" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="numOfYrs">Number of Years in Practice <span>*</span></label>
                                                        <input type="number" name="numOfYrs" class="form-control" id="numOfYrs" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="emergencyNumber">Emergency Number<span>*</span></label>
                                                        <input type="number" name="emergencyNumber" class="form-control" id="emergencyNumber" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="nokemail">Email <span>*</span></label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="websiteAddress">Website Address <span>*</span></label>
                                                        <input type="text" name="websiteAddress" class="form-control" id="websiteAddress" placeholder="">
                                                    </div>
        
        
        
        
        
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group form-inline">
                                                        <label for="">Residential Address:</label>
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="buildingHouse">Building/House <span>*</span></label>
                                                        <input type="text" nam="buildingHouse" class="form-control" id="buildinghouse" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="streetname">Street Name <span>*</span></label>
                                                        <input type="text" name="streetName" class="form-control" id="streetname" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="surburbTown">Suburb/Town <span>*</span></label>
                                                        <input type="text" name="surburbTown" class="form-control" id="surburb-town" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="postalCode">Postal Code <span>*</span></label>
                                                        <input type="text" name="postalCode" class="form-control" id="postal-code" placeholder="">
        
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="country">Country <span>*</span></label>
                                                        <input type="text" name="country" class="form-control" id="country" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <input type="radio" name="sameaddress" value="" id="same-address"> Same as
                                                        Residential Address
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="postalBox">Postal Box <span>*</span></label>
                                                        <input type="text" name="postalBox" class="form-control" id="postal-box" placeholder="">
        
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="busPostCode">Postal Code <span>*</span></label>
                                                        <input type="text" class="form-control" id="postal-code" name="busPostCode" placeholder="">
        
                                                    </div>
                                                </div>
                                                <div class="col-lg-12"></div>
                                                <!-- End Next of kin Field -->
                                                <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
                                                <input type="button" data-page="3" name="next" class="next action-button" value="Save & Continue" />
        
                                            </fieldset>
        
        
                                            <!-- Qualification  Information -->
                                            <fieldset>
                                                <h2 class="fs-title">Qualification Information</h2>
                                                <h3 class="fs-subtitle"></h3>
                                                <div class="col-lg-6">
        
                                                    <div class="form-group form-inline">
                                                        <label for="generalPractioner">General Practioner <span>*</span></label>
                                                        <input type="text" name="generalPractioner" class="form-control" id="generalPractioner" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="speciality">Speciality <span>*</span></label>
                                                        <input type="text" name="speciality" class="form-control" id="Speciality" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="Name of Degree">Name of Degree <span>*</span></label>
                                                        <input type="text" name="NameOfDegree" class="form-control" id="NameOfDegree" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="institution">Institution <span>*</span></label>
                                                        <input type="text" name="institution" class="form-control" id="institution" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="yearObtained">Year Obtained <span>*</span></label>
                                                        <input type="text" name="yearObtained" class="form-control" id="yearObtained" placeholder="">
                                                    </div>
                                                    <div class="form-group form-inline">
                                                        <label for="additionalPost">Additional Post Graduate Qualification (1) </label>
                                                        <input type="text" name="additionalPost" class="form-control" id="additionalPost" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="institution">Institution (1) <span>*</span></label>
                                                        <input type="text" name="institution" class="form-control" id="institution" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="yearObtained">Year Obtained (1) <span>*</span></label>
                                                        <input type="text" name="yearObtained" class="form-control" id="yearObtained" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="additionalPost">Additional Post Graduate Qualification (2) </label>
                                                        <input type="text" name="additionalPost" class="form-control" id="additionalPost" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="institution">Institution (2) <span>*</span></label>
                                                        <input type="text" name="institution" class="form-control" id="institution" placeholder="">
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="yearObtained">Year Obtained (2) <span>*</span></label>
                                                        <input type="text" name="yearObtained" class="form-control" id="yearObtained" placeholder="">
                                                    </div>
        
        
        
        
                                                </div>
        
                                                <div class="col-lg-6">
        
                                                </div>
        
                                                <div class="clearfix"></div>
        
                                                <!-- End Average Gift Size Percent Change Field 2 -->
                                                <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
                                                <input type="button" data-page="4" name="next" class="next action-button" value="Save & Continue" />
        
                                            </fieldset>
        
        
                                            <fieldset>
                                                <h2 class="fs-title">DECLARATION</h2>
                                                <h3 class="fs-subtitle"></h3>
        
                                                <div class="col-sm-6">
                                                        <ol style="padding-bottom: 15px;">
                                                            <li>The signatory of this form hereby states that he/ she is the Legally Authorised agent of.........,.	(company) and is therefore
                       Authorised to bind and hold the company to this agreement.
                       OR</li>
                                                            <li>The Signatory of this form shall be personally liable to settle the account of the Hospital on presentation thereof, notwithstanding possible membership of a Medical Aid Fund.</li>
                                                            <li>The signatory authorises the Hospital to submit its account to the Medical Aid Scheme of the patient or signatory, if the Hospital elects to do so.</li>
                                                            <li>Any account that is not paid when due, shall bear interest calculated at the rate of 2% per month; a part of a month to be regarded as a full month.</li>
                                                            <li>The legal relations between the debtor/s and the hospital, arising directly or indirectly from the admission of the patient to the hospital or In respect of any treatment administered to the patient in the hospital, shall be determined exclusively In accordance
                       with the laws of the Republic of Namibia and furthermore any competent Magistrate�s court in the Republic of Namibia shall have jurisdiction in all matters so arising, notwithstanding the amount of the cause of action.
                       </li>
                                                           <li>Any person who signs this Admission Form,w hether as a patient, or on behalf of the Being settled for any reason and being referred to attorneys for collection, to be jointly and severally liable for the payment of all the costs on an attorney and own client scale, all collection commission and all tracing costs. All outstanding amounts will be recovered in the following order: attorney�s fees, interest and capital.</li>
                       
                                                           <li>The signatory undertakes to pay the Hospital�s legal costs and collection commission as per approved scales of Agreement.</li>
                       
                                                           <li>The Hospital is hereby authorised to submit the patient for screening for diseases that are determined by the Hospital and to submit such patient for immunisation and treatment of such diseases.</li>
                                                        </ol>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <ol style="padding-bottom: 15px; word-break: break-all;">
                                                            <li>All telephone calls made shall be debited to the patients account and shall be payable on discharge.</li>
                       
                                                            <li>The Hospital shall not be held responsible for the loss of any personal belongings, which are lost or left behind on the Hospital premises.</li>
                                                            
                                                            <li>PRIVATE PATIENTS - Deposits must be paid on admission and the Balance on discharge.</li>
                       
                                                            <li>I acknowledge and agree th6t any medical practitioner or any other medical professional, who Is not an employee or agent of the Hospital, who treats the patient, is an independent practitioner and the
                       hospital shall not in any way be responsible or liable for any acts or omissions or breach of contract of such medical practitioner or medical professional.</li>
                       
                                                            <li>The Hospital, its employees and agents shall not be liable for, and I hereby indemnify the hospital, its employees and agents from all liability, for any loss, injury and/or dama8e of whatsoever nature suffered by whomsoever, including but not limited to, loss or damage (direct,consequential or indirect), any Injury (Including fatal) sustained by and /or harm caused to the patient or any disease (including terminal) contracted by the patient, whatever the cause may be whilst hospitalised, receiving treatment or any other services while present at the Hospital, whether arising either directly or indirectly out of any act or omission, delict or breach of contract by the Hospital, Its employees or agents</li>
                       
                                                           <li>Neither the Hospital, its employees or agents shall be liable for any direct or consequential loss or damage suffered by any person whomsoever and howsoever
                           arising.
                       </li>
                       
                       <li>Disclosure of Medical Information: The Management of the Hospital and any medical practitioner who treats the patient are hereby authorised to disclose to the medical aid/ medical benefit scheme, or the Compensation Commissioner or insurer to whom a claim is submitted in relation to amounts payable to the hospital full details as to the nature and extent of the Illness or condition of and any treatment rendered to the patient</li>
                                                        </ol>
                       
                                                    </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group form-inline">
                                                        <input type="radio" name="sameaddress" value="" id="same-address"> Yes, I
                                                        accept the terms and conditions
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <input type="radio" name="sameaddress" value="" id="same-address">No, I don
                                                        t accept the terms and conditions
                                                    </div>
        
                                                    <div class="form-group form-inline">
                                                        <label for="siganture">Signature </label>
                                                        <input type="text" class="form-control" id="signature" placeholder="">
                                                    </div>
        
        
                                                    <div class="form-group form-inline">
                                                        <label for="date">Signature </label>
                                                        <input type="date" class="form-control" id="date" placeholder="">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-6"></div>
                                                <div class="clearfix"></div>
        
                                                <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
                                                <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
        
                                            </fieldset>
                                    </div>
                                </div>
        
                            </div>
        
        
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 � Medipark
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

        <!-- Modal -->
        <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
              <div class="modal-header">               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <h4 class="custom-modal-title">Edit Patient</h4>
            <div class="custom-modal-text text-left">
           

<!-- Modal -info -->
    <form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
      <ul id="progressbar">
        <li class="active">User Information</li>
        <li>Work Information</li>
        <li>Next of kin </li>
        <li>Pre-Bookings</li>
        <li>Bed & Ward occupancy</li>
        
      </ul>
    
    
    
      <!-- USER INFORMATION FIELD SET --> 
      <fieldset>
        <h2 class="fs-title">Basic Information</h2>
        <h3 class="fs-subtitle"></h3>
        <!-- Begin What's Your First Name Field -->
            <div class="form-group form-inline">
            
                <label for="title">Title</label> 
                <select name="title" class="form-control" id="title" placeholder="">
                    <option value="title">Title</option>
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="miss">Miss</option>
                    
            </select> 
    
                <span class="error1" style="display: none;">
                  <i class="error-log fa fa-exclamation-triangle"></i>
              </span>
            </div>
        <!-- End What's Your First Name Field -->
    
        <div class="form-group form-inline">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
        </div>
      
        
        <div class="form-group form-inline">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
        </div>

        <div class="form-group form-inline">
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" class="form-control" id="dateOfBirth" placeholder="Enter last name">
        </div>
        
        <div class="form-group form-inline">
            <label for="genderId">Gender</label>                                                          
                <select name="genderId" class="form-control" id="gender" placeholder="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                                                               
            </select>
                    
        </div>

        
        <div class="form-group form-inline">
            <label for="middleName">Middle Name</label>
            <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
</div>

<div class="form-group form-inline">
        <label for="initials">Initials</label>
        <input type="text" class="form-control" id="initials" placeholder="Initials">
</div>
    
        <!-- End Total Number of Constituents in Your Database Field -->
        <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
        
      </fieldset>
    
    
    
      <!-- ACQUISITION FIELD SET -->  
      <fieldset>
        <h2 class="fs-title">Work Information</h2>
      
        <div class="form-group form-inline">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" placeholder="Occupation">
    </div>

    <div class="form-group form-inline">
        <label for="creatorId">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>

<div class="form-group form-inline">
            <label for="busAddress">Business Address</label>
            <input type="text" class="form-control" id="busAddress" placeholder="Business Address">
</div>


                            <div class="form-group form-inline">
                                    <label for="busPostCode">Business Postal Code</label>
                                    <input type="text" class="form-control" id="busPostCode" placeholder="Business Postal Code">
                            </div>
        
                            <div class="form-group form-inline">
                                    <label for="busName">Business Name</label>
                                    <input type="text" class="form-control" id="busName" placeholder="Business Name">
                            </div>
        
            <!-- End Calc of Total Number of Donors Fields -->
        <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
        <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
        
      </fieldset>
    
    
    
      <!-- Cultivation FIELD SET -->  
      <fieldset>
        <h2 class="fs-title">Next of kin</h2>
        <h3 class="fs-subtitle"></h3>
        <div class="form-group form-inline">
            
            <label for="title">Title</label> 
            <select name="title" class="form-control" id="title" placeholder="">
                <option value="title">Title</option>
                <option value="mr">Mr</option>
                <option value="mrs">Mrs</option>
                <option value="miss">Miss</option>
                
        </select> 

            <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->

    <div class="form-group form-inline">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
    </div>
  
    
    <div class="form-group form-inline">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
    </div>

    <div class="form-group form-inline">
        <label for="dateOfBirth">Contact number</label>
        <input type="number" class="form-control" id="dateOfBirth" placeholder="Enter number">
    </div>
    
    <div class="form-group form-inline">
        <label for="genderId">Gender</label>                                                          
            <select name="genderId" class="form-control" id="gender" placeholder="">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                                                           
        </select>
                
    </div>
            
    
    
        
            <!-- End Average Gift Size Perchent Change Field -->
        <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
        <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
       
      </fieldset>
    
    
    
      <!-- Cultivation2 FIELD SET --> 
      <fieldset>
        <h2 class="fs-title">Pre Pre-Bookings</h2>
        <h3 class="fs-subtitle"></h3>
       
          
            <!-- End Average Gift Size Percent Change Field 2 -->
        <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
        <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
        
      </fieldset>
    
    
    
      <!-- RETENTION FIELD SET -->  
      <fieldset>
        <h2 class="fs-title">Bed & Ward Occupancy</h2>
        <h3 class="fs-subtitle"></h3>
         
           
    
            <!-- End Retention Rate Percent -->
    
            <!-- End Final Calc -->
        <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
        <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
        
    </fieldset>
    
      <fieldset>
        <h2 class="fs-title">It's on the way!</h2>
        <h3 class="fs-subtitle">Thank you for trying out our marketing grader, please go check your email for your fundraising report card and some helpful tips to improve it!</h3>
        <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
      </fieldset>
            </div>
            </div>
        </div>


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
       <script src="assets/js/edit-staff.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    <!-- Modal-Effect -->
        <script src="../plugins/custombox/js/custombox.min.js"></script>
        <script src="../plugins/custombox/js/legacy.min.js"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
        <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>

    </body>
</html>