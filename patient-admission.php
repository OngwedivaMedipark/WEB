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
 
  $sql  = //"SELECT * FROM omeyah.Person AS p WHERE PersonId = '$personId'";
		
		//= `
		//SELECT * FROM omeyah.Person AS p 
		//INNER JOIN omeyah.Patient as pat
		//ON p.PersonId = pat.PersonId
		//WHERE p.PersonId = '$personId' LIMIT 1;
		//`;

		//"
		//SELECT p.FirstName, p.LastName, p.DateOfBirth, p.IdNumber, p.PassportNumber, 
		//	   p.CauseOfDeath, p.DeathDate, p.CreatorId, p.MiddleName, p.Initials, 
		//	   p.ResAddress1, p.ResPostCode, p.Title, p.Occupation, p.Religion, p.Email,
		//	   p.BusAddress, p.BusPostCode, p.BusName, p.HomeTel, p.WorkTel,
		//	   p.ResSurbub, p.Country, p.GenderId, p.DeadTypeId, p.Ethnicity, p.IdentityType,
		//	   p.MaritalStatus, pat.PatientId, pat.ReferenceNumber, pat.Allergies,
	   
		//FROM omeyah.Person AS p 
		//INNER JOIN omeyah.Patient as pat
		//ON p.PersonId = pat.PersonId
		//WHERE pat.PersonId = '$personId'
		//LIMIT 1;
		//";

		"
		SELECT  FirstName,  LastName,  DateOfBirth,  IdNumber,  PassportNumber, 
	    CauseOfDeath,  DeathDate,  CreatorId,  MiddleName,  Initials, 
        ResAddress1,  ResPostCode,  Title,  Occupation,  Religion,  Email,
        BusAddress,  BusPostCode,  BusName,  HomeTel,  WorkTel,
        ResSurbub,  Country,  GenderId,  DeadTypeId,  Ethnicity,  IdentityType,
        MaritalStatus, PatientId, ReferenceNumber, Allergies
	   
		FROM omeyah.Person
		INNER JOIN omeyah.Patient
		ON Person.PersonId = Patient.PersonId
		WHERE Patient.PersonId = 1
		LIMIT 1;
		";
		

  $query = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($query))
      {
         $name = $row['FirstName'];
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
         $Occupation = $row['Occupation'];
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
         
		 //	Patient Information
		 $PatientId = $row['PatientId'];
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
                                <input type="text" placeholder="Search..." class="form-control">
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
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                               aria-expanded="true">
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
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right"></span> <span> Dashboard </span>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href="dashboard.php">Dashboard </a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="fa fa-user-md"></i><span>
                                    Doctors
                                </span> <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href="add-doctor.html">Add Doctor</a></li>
                                <li><a href="doctors.php">Manage Doctor</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="fa fa-stethoscope"></i><span>
                                    Nurse
                                </span> <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href="add-nurse.html">Add Nurse</a></li>
                                <li><a href="nurses.php">Manage Nurse</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="fa fa-user"></i><span>
                                    Patients
                                </span> <span class="menu-arrow active"></span>
                            </a>
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
                                <h4 class="page-title">Patients </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Medipark</a>
                                    </li>

                                    <li class="active">
                                        Patients
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="col-sm-12">
                        <div class="add-patient-container">
                            <h4 class="custom-modal-title">Admitting  <?php echo $name; ?> </h4>
                            <div class="custom-modal-text text-left">


                                <!-- Modal -info -->
                                <form class="add-patient" action="assets/php/add-patient.php" method="post" id="add-patient">
                                    <ul id="progressbar">
                                        <li class="active">Patient Personal Information</li>
                                        <li>Account</li>
                                        <li>Admission Details </li>
                                        <li>Vital Signs</li>
                                        <li>Diagnosis</li>
										<li>Attachments</li>
                                        <li>Terms & Conditions</li>
                                    </ul>

									<div class="row"><h2 class="fs-title">Admit a Patient</h2></div>
                                    <!-- USER INFORMATION FIELD SET -->
                                    <fieldset>                                        
                                        <h3 class="fs-subtitle"></h3>
                                        <!-- Begin What's Your First Name Field -->
                                        <div class="col-sm-8">
										<h2 class="fs-title ">Patient Personal Information</h2>
										    <div class="form-group form-inline">
                                                <label for="patientId">Patient ID <span>*</span></label>
                                                <input type="text" name="patientId" class="form-control" id="patientId" value= "<?php echo $PatientId;?>"
                                                       placeholder="">
                                            </div>
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
                                                <label for="initials">Initials <span>*</span></label>
                                                <input type="text" name="initials" class="form-control" id="initials" value="<?php echo $Initials;?>"
                                                       placeholder="">
                                            </div>

                                            <!-- End What's Your First Name Field -->

                                            <div class="form-group form-inline">
                                                <label for="firstName">First Name <span>*</span></label>
                                                <input type="text" name="firstName" class="form-control" id="firstName" value= "<?php echo $name;?>"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="lastName">Last Name <span>*</span></label>
                                                <input type="text" name="lastName" class="form-control" id="lastName"  value= "<?php echo $lastname;?>"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="genderId">Gender <span>*</span></label>
                                                <select type="text" name="genderId" class="form-control" id="genderId" placeholder="">												
													<option value= "<?php echo $GenderId;?>">
														<?php if($GenderId == "") : ?>
															Please select gender 
															<?php else : ?>
																<?php echo $GenderId;?>
														<?php endif; ?>
													</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
												</select>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="dateOfBirth">Date of Birth <span>*</span></label>
                                                <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="age">Age</label>
                                                <input type="text" name="age" class="form-control" id="age" placeholder="" readonly="readonly">
                                            </div>

											<div class="form-group form-inline">
                                                <label for="homeTel">Cell Number</label>
                                                <input type="text" name="homeTel" class="form-control" id="homeTel" placeholder="">
                                            </div>

											<div class="form-group form-inline">
                                                <label for="address">Address</label>
                                                <textarea type="text" name="address" class="form-control" id="address" placeholder="" col=8 row=5 value="<?php echo $ResAddress1 . ' ' . $ResSurbub . ' ' . $ResPostCode;?>"></textarea>
                                            </div>

                                        </div>
                                        <!--=======================================================================================================-->
                                        <!--==========Take/Upload Picture====================-->
                                        <!--=======================================================================================================-->
                                        <div class="col-sm-4">
											<div class="card-box">
												<img src="assets/images/users/dev.jpg" alt="user-img" class="img-circle user-img" width="100%" height="100%">
											</div> 
										</div>

                                        <div class="col-sm-12"></div>
                                        <!-- End Total Number of Constituents in Your Database Field -->
                                        <input type="button" data-page="1" name="next" class="next action-button" value="Save & Continue" />

                                    </fieldset>

                                    <!-- Contact Information -->
                                    <fieldset>
                                        <div class="col-sm-6">
                                        <h2 class="fs-title ">Payment Information</h2>
                                            <div class="form-group form-inline">
                                                <label for="paymentOptions">Payment Options <span>*</span></label>
                                                <select type="text" class="form-control" id="paymentOptions" name="paymentOptions" placeholder="">
													<option value="medicalAid">Medical Aid</option>
													<option value="cash">Cash</option>
													<option value="card">Card</option>													
												</select>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="medicalAidScheme">Medical Aid Scheme</label>
                                                <select type="text" class="form-control" id="medicalAidScheme" name="medicalAidScheme" placeholder="">
													<option value="discovery">Discovery</option>
													<option value="momentum">Momentum</option>
													<option value="medimed">Medimed</option>	
												</select>
                                            </div>

											<div class="form-group form-inline">
                                                <label for="medicalAidSchemeOption">Medical Aid Scheme Option</label>
                                                <select type="text" class="form-control" id="medicalAidSchemeOption" name="medicalAidSchemeOption" placeholder="">
													<option value="discovery">Discovery</option>
													<option value="momentum">Momentum</option>
													<option value="medimed">Medimed</option>	
												</select>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="medicalAidNumber">Medical Aid Number<span>*</span></label>
                                                <input type="text" class="form-control" name="medicalAidNumber" id="medicalAidNumber"
                                                       placeholder="">
                                            </div>

                                            <h2 class="fs-title ">Main Member Details</h2>

                                            <div class="form-group form-inline">
                                                <label for="memberName">Member Name<span>*</span></label>
                                                <input type="text" class="form-control" name="memberName" id="memberName"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="memberSurname">Member Surname<span>*</span></label>
                                                <input type="text" class="form-control" name="memberSurname" id="memberSurname"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="memberIDNumber">Member ID Number <span>*</span></label>
                                                <input type="text" class="form-control" name="memberIDNumber" id="memberIDNumber"
                                                       placeholder="">

                                            </div>
											<h2 class="fs-title ">Dependant Information</h2>
                                            <div class="form-group form-inline">
                                                <label for="dependantCode">Patient Dependant Code <span>*</span></label>
                                                <input type="number" class="form-control" name="dependantCode" id="dependantCode"
                                                       placeholder="">
											</div>
                                        </div>

                                        <div class="col-sm-6">
											<h2 class="fs-title ">Authorisation Details</h2>
                                            <div class="form-group form-inline">
                                                <label for="authorisationDate">Authorisation Date <span>*</span></label>
                                                <input type="date" name="authorisationDate" class="form-control" id="authorisationDate"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="authorisationNumber">Authorisation Number <span>*</span></label>
                                                <input type="text" class="form-control" name="authorisationNumber" id="authorisationNumber"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="authorisationDays">Authorisation Days <span>*</span></label>
                                                <input type="text" class="form-control" name="authorisationDays" id="authorisationDays"
                                                       placeholder="">
                                            </div>
											<div class="form-group form-inline">
                                                <label for="authorisationAmount">Authorisation Amount <span>*</span></label>
                                                <input type="text" class="form-control" name="authorisationAmount" id="authorisationAmount"
                                                       placeholder="">
                                            </div>
											<div class="form-group form-inline">
                                                <label for="authorisationStatus">Authorisation Status <span>*</span></label>
                                                <input type="text" class="form-control" name="authorisationStatus" id="authorisationStatus"
                                                       placeholder="">
                                            </div>
											<h2 class="fs-title ">Person Responsible For Payment</h2>
											<div class="form-group form-inline">
                                                <label for="responsibleName">Name <span>*</span></label>
                                                <input type="text" class="form-control" name="responsibleName" id="responsibleName"
                                                       placeholder="">
                                            </div>
											<div class="form-group form-inline">
                                                <label for="responsibleSurname">Surname <span>*</span></label>
                                                <input type="text" class="form-control" name="responsibleSurname" id="responsibleSurname"
                                                       placeholder="">
                                            </div>
											<div class="form-group form-inline">
                                                <label for="responsibleIDNumber">ID Number <span>*</span></label>
                                                <input type="text" class="form-control" name="responsibleIDNumber" id="responsibleIDNumber"
                                                       placeholder="">
                                            </div>
											<div class="form-group form-inline">
                                                <label for="responsibleEmailAddress">Email Address <span>*</span></label>
                                                <input type="text" class="form-control" name="responsibleEmailAddress" id="responsibleEmailAddress"
                                                       placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">

                                        </div>
                                        <!-- End Calc of Total Number of Donors Fields -->
                                        <input type="button" data-page="2" name="previous" class="previous action-button"
                                               value="Previous" />
                                        <input type="button" data-page="2" name="next" class="next action-button" value="Save & Continue" />

                                    </fieldset>

                                    <!-- Admission Details field -->
                                    <fieldset>
                                         <h2 class="fs-title ">Admission Details</h2>
                                        <h3 class="fs-subtitle"></h3>

                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group form-inline">
                                                <label for="admissionDate">Admission Date <span>*</span></label>
                                                <input type="date" name="admissionDate" class="form-control" id="admissionDate"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="admissionTime">Admission Time <span>*</span></label>
                                                <input type="text" class="form-control" id="admissionTime" name="admissionTime"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="nokContact">Admission Type <span>*</span></label>
                                                <select type="text" class="form-control" id="nokContact" name="nokContact" placeholder="">
													<option value="inhousePatient">Partient From In-House</option>
													<option value="externalPatient">Partient From External</option>
												</select>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="admissionSource">Source of Admission</label>
                                                <select type="text" class="form-control" id="admissionSource" name="admissionSource" placeholder="">
													<option value="inhousePatient">Partient From In-House</option>
													<option value="externalPatient">Partient From External</option>
												</select>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="admissionSourceDetails">Source of Admission Details</label>
                                                <textarea col=8 row=3 class="form-control" id="admissionSourceDetails" name="admissionSourceDetails"
                                                       placeholder=""></textarea>
                                            </div>

											<h2 class="fs-title ">Attending Doctor(s)</h2>

                                            <div class="form-group form-inline">
                                                <label for="referringDoctor">Referring Doctor <span>*</span></label>
                                                <select type="text" class="form-control doctorSearch" id="referringDoctor" name="referringDoctor" placeholder=""></select>
                                            </div>

											<div class="form-group form-inline">
                                                <label for="attendingDoctor1">Attending Doctor (1) <span>*</span></label>
                                                <select type="text" class="form-control doctorSearch" id="attendingDoctor1" name="attendingDoctor1" placeholder=""></select>
                                            </div>
											<div class="form-group form-inline">
                                                <label for="attendingDoctor2">Attending Doctor (2)</label>
                                                <select type="text" class="form-control doctorSearch" id="attendingDoctor2" name="attendingDoctor2" placeholder=""></select>
                                            </div>
											<div class="form-group form-inline">
                                                <label for="attendingDoctor3">Attending Doctor (3)</label>
                                                <select type="text" class="form-control doctorSearch" id="attendingDoctor3" name="attendingDoctor3" placeholder=""></select>
                                            </div>

											<div class="form-group form-inline">
                                                <label for="anaesthetist">Anaesthetist</label>
                                                <select type="text" class="form-control" id="anaesthetist" name="anaesthetist" placeholder=""></select>
                                            </div>

											<h2 class="fs-title ">Ward, Room, Bed</h2>
											
											<div class="form-group form-inline">
                                                <label for="billingCode">Billing Code</label>
                                                <select type="text" class="form-control" id="billingCode" name="billingCode" placeholder=""></select>
                                            </div>
											
											<div class="form-group form-inline">
                                                <label for="ward">Ward</label>
                                                <select type="text" class="form-control" id="ward" name="ward" placeholder=""></select>
                                            </div>
											
											<div class="form-group form-inline">
                                                <label for="room">Room</label>
                                                <select type="text" class="form-control" id="room" name="room" placeholder=""></select>
                                            </div>

											<div class="form-group form-inline">
                                                <label for="bed">Bed</label>
                                                <select type="text" class="form-control" id="bed" name="bed" placeholder=""></select>
                                            </div>

											<div class="form-group form-inline">
                                                <label for="wardRate">Ward Rate</label>
                                                <select type="text" class="form-control" id="wardRate" name="wardRate" placeholder=""></select>
                                            </div>

											<div class="form-group form-inline">
                                                <label for="wardAmount">Ward Amount <span>*</span></label>
                                                <input type="date" name="wardAmount" class="form-control" id="wardAmount"
                                                       placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class=" col-sm-12 col-sm-12 col-sm-12"></div>

                                        <input type="button" data-page="3" name="previous" class="previous action-button"
                                               value="Previous" />
                                        <input type="button" data-page="3" name="next" class="next action-button" value="Save & Continue" />

                                    </fieldset>



                                    <!-- Vital Signs -->
                                    <fieldset>
                                         <h2 class="fs-title ">Vital Signs</h2>
                                        <h3 class="fs-subtitle"></h3>
                                        <div class="col-lg-6 col-sm-6 col-sm-12">

                                            <div class="form-group form-inline">
                                                <label for="patientHeight">Height (cm)</label>
                                                <input type="text" name="patientHeight" class="form-control" id="patientHeight">
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="patientWeight">Weight (kg)</label>
                                                <input type="text" class="form-control" name="patientWeight" id="patientWeight"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="bodyTemperature">Body Temperature</label>
                                                <input type="text" class="form-control" name="bodyTemperature" id="bodyTemperature"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="bloodPressure">Blood Pressure</label>
                                                <input type="number" class="form-control" name="bloodPressure"
                                                       id="bloodPressure" placeholder="">
                                            </div>

                                        </div>

										 <div class="col-sm-6 col-sm-6 col-sm-12">
												<div class="form-group form-inline">
													<label for="pulseRate">Pulse Rate</label>
													<input type="text" name="pulseRate" class="form-control" id="pulseRate">
												</div>
												<div class="form-group form-inline">
													<label for="respiratoryRate">Respiratory Rate</label>
													<input type="text" class="form-control" name="respiratoryRate" id="respiratoryRate"
														   placeholder="">
												</div>

												<div class="form-group form-inline">
													<label for="glucoseLevel">Glucose Level</label>
													<input type="text" class="form-control" name="glucoseLevel" id="glucoseLevel"
														   placeholder="">
												</div>

												<div class="form-group form-inline">
													<label for="choresterol">Choresterol</label>
													<input type="number" class="form-control" name="choresterol"
														   id="choresterol" placeholder="">
												</div>
											</div>
                                        
										<!-- Medical Conditions -->
										<div class="col-lg-12 col-sm-12 col-sm-12">
										
											<h2 class="fs-title ">Medical Conditions</h2>

											<div class="col-sm-4 col-sm-4 col-sm-12">
												

												<div class="form-group form-inline">
													<input type="checkbox" name="allergies" class="form-control" id="allergies">
													<label for="arthritis">Arthritis</label>													
												</div>
												
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="arthritis"
                                                       id="arthritis" placeholder="">
													<label for="arthritis">Arthritis</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="asthma"
                                                       id="asthma" placeholder="">
													   <label for="asthma">Asthma</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="backPain"
                                                       id="backPain" placeholder="">
													   <label for="backPain">Back Pain</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="cancer"
                                                       id="cancer" placeholder="">
													   <label for="cancer">Cancer</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="copd"
                                                       id="copd" placeholder="">
													   <label for="copd">COPD</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="other"
                                                       id="other" placeholder="">
													   <label for="other">Other</label>
												</div>
											</div>

											<div class="col-sm-4 col-sm-4 col-sm-12">
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control checkbox" name="chronicPain"
                                                       id="chronicPain" placeholder="">
													   <label for="chronicPain">Chronic Pain</label>
												</div>
												
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="depression"
                                                       id="depression" placeholder="">
													   <label for="depression">Depression</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="diabetes"
                                                       id="diabetes" placeholder="">
													   <label for="diabetes">Diabetes</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="heartburn"
                                                       id="heartburn" placeholder="">
													   <label for="heartburn">Heartburn or Acid Reflux</label>
												</div>

												<div class="form-group form-inline">
													<input type="checkbox" class="form-control" name="heartDisease"
                                                       id="heartDisease" placeholder="">
													   <label for="heartDisease">Heart Disease</label>
												</div>

												<div class="form-group form-inline">
													<input type="checkbox" class="form-control" name="highBlodPressure"
                                                       id="highBlodPressure" placeholder="">
													<label for="highBlodPressure">High Blood Pressure</label>
												</div>
											</div>
                                           
										   <div class="col-sm-4 col-sm-4 col-sm-12">
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control checkbox" name="highChoresterol"
                                                       id="highChoresterol" placeholder="">
													   <label for="highChoresterol">High Choresterol</label>
												</div>
												
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="migraineHeadaches"
                                                       id="migraineHeadaches" placeholder="">
													   <label for="migraineHeadaches">Migraine Headaches</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="osteoporosis"
                                                       id="osteoporosis" placeholder="">
													   <label for="osteoporosis">Osteoporosis</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="sleepDisorder"
                                                       id="sleepDisorder" placeholder="">
													   <label for="sleepDisorder">Sleep Disorder</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="stroke"
                                                       id="stroke" placeholder="">
													   <label for="stroke">Stroke</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="thyroidDisease"
                                                       id="thyroidDisease" placeholder="">
													   <label for="thyroidDisease">Thyroid Disease</label>
												</div>
											</div>
										</div>


										<!--	Family History	-->
										<div class="col-lg-12 col-sm-12 col-sm-12">
										
											<h2 class="fs-title ">Family History</h2>

											<div class="col-sm-4 col-sm-4 col-sm-12">
												
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="familyAsthma"
                                                       id="familyAsthma" placeholder="">
													   <label for="familyAsthma">Asthma</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="familyCancer"
                                                       id="familyCancer" placeholder="">
													   <label for="familyCancer">Cancer</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="familyCopd"
                                                       id="familyCopd" placeholder="">
													   <label for="familyCopd">COPD</label>
												</div>
											</div>

											<div class="col-sm-4 col-sm-4 col-sm-12">
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="familyDiabetes"
                                                       id="familyDiabetes" placeholder="">
													   <label for="familyDiabetes">Diabetes</label>
												</div>

												<div class="form-group form-inline">
													<input type="checkbox" class="form-control" name="familyHeartDisease"
                                                       id="familyHeartDisease" placeholder="">
													   <label for="familyHeartDisease">Heart Disease</label>
												</div>
										
												<div class="form-group form-inline">
													<input type="checkbox" class="form-control" name="familyHighBlodPressure"
                                                       id="familyHighBlodPressure" placeholder="">
													<label for="familyHighBlodPressure">High Blood Pressure</label>
												</div>
												
											</div>
                                           
										   <div class="col-sm-4 col-sm-4 col-sm-12">
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control checkbox" name="familyHighChoresterol"
                                                       id="familyHighChoresterol" placeholder="">
													   <label for="familyHighChoresterol">High Choresterol</label>
												</div>
												
												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="familyOsteoporosis"
                                                       id="familyOsteoporosis" placeholder="">
													   <label for="familyOsteoporosis">Osteoporosis</label>
												</div>

												<div class="form-group form-inline">													
													<input type="checkbox" class="form-control" name="familyStroke"
                                                       id="familyStroke" placeholder="">
													   <label for="familyStroke">Stroke</label>
												</div>
											</div>
										</div>

                                        <div class="clearfix"></div>


                                        <input type="button" data-page="4" name="previous" class="previous action-button"
                                               value="Previous" />
                                        <input type="button" data-page="4" name="next" class="next action-button" value="Save & Continue" />

                                        <!--===============================iFRAME MODAL=================================-->
                                        <div class="modal fade" id="iframeModal" style="width:85%" tabindex="-1" role="dialog" aria-labelledby="iframeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="display:grid;height: 800px;width:100%;" role="document">
                                                <div class="modal-content" style="width:100%">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="iframeModalLabel">Medical Aid Verification</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="height:600px">
                                                        <iframe style="width:100%; height:100%;" src="http://www.methealth.com.na/edoc/PSEMAS/member_info_psemas_results.php"></iframe>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Proceed</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </fieldset>



                                    <!-- person responsible -->
                                    <fieldset>
                                         <h2 class="fs-title ">Diagnosis</h2>
                                        <h3 class="fs-subtitle"></h3>
                                        <div class="col-sm-6 col-md-6 col-sm-12">
                                            <div class="form-group form-inline">
                                                <label for="title">Title <span>*</span></label>
                                                <select name="accTitle" class="form-control" id="title" placeholder="">
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
                                                <label for="accName">Name <span>*</span></label>
                                                <input type="text" class="form-control" name="accName" id="accName"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accSurname">Surname <span>*</span></label>
                                                <input type="text" class="form-control" id="accSurname" name="accSurname"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accIdnumber">ID Number <span>*</span></label>
                                                <input type="text" class="form-control" id="accIdnumber" name="accIdnumber"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="">Billing Address </label>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accBuildingHome">Building/House <span>*</span></label>
                                                <input type="text" class="form-control" id="acc-building-house" name="accBuildingHome"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accStreetName">Street Name <span>*</span></label>
                                                <input type="text" class="form-control" id="acc-street-name"
                                                       placeholder="">
                                            </div>



                                            <div class="form-group form-inline">
                                                <label for="accSuburb">Suburb/Town <span>*</span></label>
                                                <input type="text" class="form-control" id="acc-street-name" name="accSuburb"
                                                       placeholder="">
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="accPostalCode">Postal Code <span>*</span></label>
                                                <input type="text" name="accPostalCode" class="form-control" id="acc-postal-code"
                                                       placeholder="">

                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accCountry">Country <span>*</span></label>
                                                <input type="text" class="form-control" id="acc-country" name="accCountry"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="">Employment Details</label>
                                            </div>


                                            <div class="form-group form-inline">
                                                <label for="accEmployer">Employer <span>*</span></label>
                                                <input type="text" class="form-control" id="employer" placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accEmployerAdd">Employer Address <span>*</span></label>
                                                <input type="text" class="form-control" id="employer-address"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="occupation">Occupation <span>*</span></label>
                                                <input type="text" class="form-control" id="occupation" placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accEmployerContact">Employer Contact<span>*</span></label>
                                                <input type="text" class="form-control" id="employer-contact"
                                                       placeholder="">
                                            </div>

                                        </div>

                                        <div class="col-sm-6 col-md-6 col-sm-12">
                                            <div class="form-group form-inline">
                                                <label for="copy">Copy from </label>
                                                <select name="copy" class="form-control" id="copy" placeholder="">
                                                    <option>--Select option--</option>
                                                    <option value="Patient">Patient</option>
                                                    <option value="Main Member">Main Member</option>


                                                </select>

                                                <span class="error1" style="display: none;">
                                                    <i class="error-log fa fa-exclamation-triangle"></i>
                                                </span>
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accContactNum">Contact Number <span>*</span></label>
                                                <input type="text" class="form-control" id="acc-contact-number"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accEmail">Email Address <span>*</span></label>
                                                <input type="text" name="accEmail" class="form-control" id="acc-email"
                                                       placeholder="">
                                            </div>

                                            <div class="form-group form-inline">
                                                <label for="accStatement">
                                                    Statement & letters sent via <span>*</span>
                                                </label>
                                                <select name="accStatement" class="form-control" id="title" placeholder="">
                                                    <option>--Select option--</option>
                                                    <option value="phone">Phone</option>
                                                    <option value="email">Email</option>
                                                    <option value="post">post</option>


                                                </select>

                                                <span class="error1" style="display: none;">
                                                    <i class="error-log fa fa-exclamation-triangle"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <input type="button" data-page="5" name="previous" class="previous action-button"
                                               value="Previous" />
                                        <input type="button" data-page="5" name="next" class="next action-button" value="Save & Continue" />


                                    </fieldset>

									<fieldset>
										 <h2 class="fs-title pull-left">Attachments</h2>

										 
                                        <div class="clearfix"></div>


                                        <input type="button" data-page="4" name="previous" class="previous action-button"
                                               value="Previous" />
                                        <input type="button" data-page="4" name="next" class="next action-button" value="Save & Continue" />
									</fieldset>

                                    <fieldset>
                                         <h2 class="fs-title pull-left">Terms & Conditions</h2>
                                        <h3 class="fs-subtitle"></h3>
                                        <div class="col-sm-6 col-md-6 col-sm-6">
                                            <ol style="padding-bottom: 15px;">
                                                <li>
                                                    The signatory of this form hereby states that he/ she is the
                                                    Legally Authorised agent of.........,. (company) and is therefore
                                                    Authorised to bind and hold the company to this agreement.
                                                    OR
                                                </li>
                                                <li>
                                                    The Signatory of this form shall be personally liable to settle the
                                                    account of the Hospital on presentation thereof, notwithstanding
                                                    possible membership of a Medical Aid Fund.
                                                </li>
                                                <li>
                                                    The signatory authorises the Hospital to submit its account to the
                                                    Medical Aid Scheme of the patient or signatory, if the Hospital
                                                    elects to do so.
                                                </li>
                                                <li>
                                                    Any account that is not paid when due, shall bear interest
                                                    calculated at the rate of 2% per month; a part of a month to be
                                                    regarded as a full month.
                                                </li>
                                                <li>
                                                    The legal relations between the debtor/s and the hospital, arising
                                                    directly or indirectly from the admission of the patient to the
                                                    hospital or In respect of any treatment administered to the patient
                                                    in the hospital, shall be determined exclusively In accordance
                                                    with the laws of the Republic of Namibia and furthermore any
                                                    competent Magistrate’s court in the Republic of Namibia shall have
                                                    jurisdiction in all matters so arising, notwithstanding the amount
                                                    of the cause of action.
                                                </li>
                                                <li>
                                                    Any person who signs this Admission Form,w hether as a patient, or
                                                    on behalf of the Being settled for any reason and being referred to
                                                    attorneys for collection, to be jointly and severally liable for
                                                    the payment of all the costs on an attorney and own client scale,
                                                    all collection commission and all tracing costs. All outstanding
                                                    amounts will be recovered in the following order: attorney’s fees,
                                                    interest and capital.
                                                </li>

                                                <li>
                                                    The signatory undertakes to pay the Hospital’s legal costs and
                                                    collection commission as per approved scales of Agreement.
                                                </li>

                                                <li>
                                                    The Hospital is hereby authorised to submit the patient for
                                                    screening for diseases that are determined by the Hospital and to
                                                    submit such patient for immunisation and treatment of such
                                                    diseases.
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-sm-6">
                                            <ol style="padding-bottom: 15px; word-break: break-all;">
                                                <li>
                                                    All telephone calls made shall be debited to the patients account
                                                    and shall be payable on discharge.
                                                </li>

                                                <li>
                                                    The Hospital shall not be held responsible for the loss of any
                                                    personal belongings, which are lost or left behind on the Hospital
                                                    premises.
                                                </li>

                                                <li>
                                                    PRIVATE PATIENTS - Deposits must be paid on admission and the
                                                    Balance on discharge.
                                                </li>

                                                <li>
                                                    I acknowledge and agree th6t any medical practitioner or any other
                                                    medical professional, who Is not an employee or agent of the
                                                    Hospital, who treats the patient, is an independent practitioner
                                                    and the
                                                    hospital shall not in any way be responsible or liable for any acts
                                                    or omissions or breach of contract of such medical practitioner or
                                                    medical professional.
                                                </li>

                                                <li>
                                                    The Hospital, its employees and agents shall not be liable for, and
                                                    I hereby indemnify the hospital, its employees and agents from all
                                                    liability, for any loss, injury and/or dama8e of whatsoever nature
                                                    suffered by whomsoever, including but not limited to, loss or
                                                    damage (direct,consequential or indirect), any Injury (Including
                                                    fatal) sustained by and /or harm caused to the patient or any
                                                    disease (including terminal) contracted by the patient, whatever
                                                    the cause may be whilst hospitalised, receiving treatment or any
                                                    other services while present at the Hospital, whether arising
                                                    either directly or indirectly out of any act or omission, delict or
                                                    breach of contract by the Hospital, Its employees or agents
                                                </li>

                                                <li>
                                                    Neither the Hospital, its employees or agents shall be liable for
                                                    any direct or consequential loss or damage suffered by any person
                                                    whomsoever and howsoever
                                                    arising.
                                                </li>

                                                <li>
                                                    Disclosure of Medical Information: The Management of the Hospital
                                                    and any medical practitioner who treats the patient are hereby
                                                    authorised to disclose to the medical aid/ medical benefit scheme,
                                                    or the Compensation Commissioner or insurer to whom a claim is
                                                    submitted in relation to amounts payable to the hospital full
                                                    details as to the nature and extent of the Illness or condition of
                                                    and any treatment rendered to the patient
                                                </li>
                                            </ol>

                                        </div>
                                        <!--<div class="col-lg-6">
                                        <div class="form-group form-inline">
                                              <input type="radio" name="sameaddress" value="" id="same-address"> Yes, I accept the terms and conditions
                                          </div>
                                          <div class="form-group form-inline">
                                                  <input type="radio" name="sameaddress" value="" id="same-address">No, I don t accept the terms and conditions
                                              </div>
                                              <div class="form-group form-inline">
                                                      <label for="siganture">Signature </label>
                                                      <input type="text" class="form-control" id="signature" placeholder="">
                                                  </div>

                                              <div class="form-group form-inline">
                                                      <label for="date">Signature </label>
                                                      <input type="date" class="form-control" id="date" placeholder="">
                                                  </div>
                                                  </div>-->

                                        <div class="col-sm-6 col-md-6 col-sm-12"></div>
                                        <div class="clearfix"></div>

                                        <input type="button" data-page="5" name="previous" class="previous action-button"
                                               value="Previous" />
                                        <input id="submit" class="hs-button primary large action-button next" type="submit"
                                               value="Submit">

                                    </fieldset>
                                </form>
                            </div>
                        </div>


                    </div>


                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2018 © Medipark
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
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">API Access</h5>
                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Auto Updates</h5>
                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Online Status</h5>
                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
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
    <script src="assets/js/add-patient-admission.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>
    <script src="assets/js/uploadPhoto.js"></script>

    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


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