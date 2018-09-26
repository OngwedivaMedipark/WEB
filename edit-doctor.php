<?php

error_reporting(0);
ini_set('display_errors', 0);


if(isset($_POST["personId"]))
{
  $output='';  
  $db_host = "35.229.89.118";
  $db_user = "admin";
  $db_pass = "sp!cymacfe@st";
  $db_name = "omeyah";
  
  $personId = $_POST["personId"]; 
  
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
      die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
  }                           
 
  $sql = "SELECT * FROM omeyah.Person WHERE PersonId = '$personId'";
  

  $query = mysqli_query($conn, $sql);

  $output .='
  <div class="col-lg-12">
  <div class="add-doctor-container">
         <h4 class="custom-modal-title">Add New Staff Member</h4>
        <div class="custom-modal-text text-left">';     
      while($row = mysqli_fetch_array($query))
      {
        $output .='
        <form class="add-doctor" action="assets/php/manage-doctor.php" method="post" id="insert-form">
        <ul id="progressbar">
          <li class="active">PERSONAL INFORMATION</li>
          <li>CONTACT INFORMATION</li>
         <li>PRACTICE INFORMATION </li>
          <li>QUALIFICATION INFORMATION</li>
          <li>DECLARATION</li> 
                                          
        </ul>        

        
        <!-- USER INFORMATION FIELD SET --> 
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
              <input type="text" name="firstName" class="form-control" id="firstName" value="'.$row["FirstName"].'" placeholder="">
          </div>
                                   
          
          <div class="form-group form-inline">
              <label for="lastName">Last Name <span>*</span></label>
              <input type="text" name="lastName" class="form-control" id="lastName" value="'.$row["LastName"].'" placeholder="">
          </div>

          <div class="form-group form-inline">
                <label for="genderId">Gender <span>*</span></label>                                                          
                <input type="text" name="genderId" class="form-control" id="genderId" value="'.$row["GenderId"].'"  placeholder="">
            </div>
  
          <div class="form-group form-inline">
              <label for="dateOfBirth">Date of Birth <span>*</span></label>
              <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" value ="'.$row["DateOfBirth"].'" placeholder="">
          </div>

          <div class="form-group form-inline">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" value="'.$row["DateOfBirth"].'" disabled>
           </div>

           <div class="form-group form-inline">
                <label for="identityType">Identity Type <span>*</span></label>
                     
                <select name="identityType" class="form-control" id="identityType" placeholder="">
                        <option>--Select option--</option>
                        <option value="male">ID Document</option>
                        <option value="female">Passport</option>                                                                  
                </select>
           </div>

           <div class="form-group form-inline">
            <label for="idNumber">Identity Number <span>*</span></label>                                             
            <input type="text" name="idNumber" class="form-control" id="idNumber" value="'.$row["IdNumber"].'" placeholder="">                                                   
            </select>
       </div>

           <div class="form-group form-inline">
                <label for="maritialStatus">Maritial Status <span>*</span></label>
                     
                <select name="maritalStatus" class="form-control" id="maritalstatus" placeholder="">
                        <option>--Select option--</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>                                       
                        <option value="devorced">Devorced</option>
                        <option value="widowed">Widowed</option>                             
                </select>
           </div>

           <div class="form-group form-inline">
                <label for="ethnicity">Ethnicity <span>*</span></label>
                     
                <select name="ethnicity" class="form-control" id="ethnicity" placeholder="">
                        <option>--Select option--</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>                                      
                        <option value="coloured">Coloured</option>
                        <option value="indian">Indian</option>                             
                </select>
           </div>

           <div class="form-group form-inline">
                <label for="religion">Religion <span>*</span></label>
                     
                <select name="religion" class="form-control" id="religion" placeholder="">
                        <option>--Select option--</option>
                        <option value="male">Christianity</option>
                        <option value="Islam">Islam</option>  
                         <option value="female">Buddhism</option>
                        <option value="Judaism">Judaism</option>  
                        <option value="Atheism">Atheism</option>  
                        <option value="Other">Other</option>                             
                </select>
           </div>
           </div>
          <div class="col-lg-4">
                <div class="uploader" onclick="$(#filePhoto).click()">Add Picture</div>
                <input type="file" name="userprofile_picture"  id="filePhoto" style="display:block;width:255px;"  />
               <div>
                   <p>Scan and upload</p>
                   <input type="file" name="userprofile_picture"  id="filePhoto" style="display:block;width:255px;"  />
                   <input type="file" name="userprofile_picture"  id="filePhoto" style="display:block;width:255px;"  />
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
              <label for="homeTel">Home Telephone</label>
              <input type="text" class="form-control" id="homeTel" value="'.$row["HomeTel"].'" placeholder="">
          </div>

          <div class="form-group form-inline">
                <label for="workTel">Work Telephone</label>
                <input type="text" class="form-control" id="workTel" value="'.$row["WorkTel"].'" placeholder="">
          </div>

        <div class="form-group form-inline">
                <label for="prefferedContact">Preffered Contact Method</label>                                                     
                <select name="prefferedContact" class="form-control" id="prefferedContact" placeholder="">
                <option>--Select option--</option>
                <option value="male">Phone</option>
                <option value="female">Email</option>                                       
                <option value="female">Post</option>
                                                    
                </select>
        </div>

        <div class="form-group form-inline">
                <label for="occupation">Residential Address:</label>
        </div>

        <div class="form-group form-inline">
                <label for="busAddress">Building/House <span>*</span></label>
                <input type="text" class="form-control" id="building-house" name="busAddress" value="'.$row["BusAddress"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="resAddress1">Street Name <span>*</span></label>
                <input type="text" class="form-control" name="resAddress1" id="street-name" value="'.$row["ResAddress1"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="country">Country <span>*</span></label>
                <input type="text" class="form-control" name="country" id="country" value="'.$row["Country"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="resSurbub">Suburb/Town <span>*</span></label>
                <input type="text" class="form-control"name="resSurbub" id="resSurbub" value="'.$row["ResSurbub"].'" placeholder="">
        </div>
        <div class="form-group form-inline">
                <label for="resPostCode">Postal Code <span>*</span></label>
                <input type="text" class="form-control" name="resPostCode" id="resPostCode" value="'.$row["ResPostCode"].'" placeholder="">
               
         </div>

        <div class="form-group form-inline">
                <label for="occupation">Postal Address:</label>
        </div>
        
  <!---->
      <div class="form-group form-inline">
            <input type="radio" name="sameaddress" value="" id="same-address"> Same as Residential Address
        </div>

    <div class="form-group form-inline">
            <label for="postalBox">Postal Box <span>*</span></label>
            <input type="text" name="postalBox" class="form-control" id="postal-box"  value="'.$row["BusAddress"].'" placeholder="">
            
     </div>

    <div class="form-group form-inline">
            <label for="busPostCode">Postal Code <span>*</span></label>
            <input type="text" class="form-control" id="postal-code" name="busPostCode" value="'.$row["BusPostCode"].'" placeholder="">
           
     </div>
     </div>

    <div class="col-lg-6"> 
            <div class="form-group form-inline">
                    <label for="cellNumber">Cell Number <span>*</span></label>
                    <input type="text" class="form-control" id="cell-number" name="cellNumber" value="'.$row["CellNumber"].'" placeholder="">                                               
             </div>
             <div class="form-group form-inline">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" class="form-control" name="email" value="'.$row["Email"].'" id="email" placeholder="">                                               
             </div>
             <div class="form-group form-inline">
                    <label for="contactHours">Preferred Contact Hours</label>                                                     
                    <select name="contactHours" class="form-control" id="contact-methods" placeholder="">
                    <option>--Select option--</option>
                    <option value="anytime">Anytime</option>
                    <option value="workinghours">Working Hours</option>                                       
                    <option value="afterhours">After Hours</option>
                                                        
                    </select>
            </div>
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
                    <input type="text" name="hpcnaRegistrationNumber" class="form-control" id="hpcnaNum" value="'.$row["hpcnaRegistrationNumber"].'" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="practiceNumber">Practice Number<span>*</span></label>
                    <input type="text" name="practiceNumber" class="form-control" id="practiceNumber" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="practiceType">Practice Type <span>*</span></label>
                    <select name="practiceType" class="form-control" id="practiceType" value="'.$row["practiceType"].'" placeholder="">
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
                    <input type="text" name="telephone" class="form-control" id="telephone" value="'.$row["telephone"].'" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="yearsInPractice">Number of Years in Practice <span>*</span></label>
                    <input type="text" name="yearsInPractice" class="form-control" value="'.$row["yearsInPractice"].'" id="numOfYrs" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="emergencyNumber">Emergency Number<span>*</span></label>
                    <input type="text" name="emergencyNumber" class="form-control" id="emergencyNumber" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="nokemail">Email <span>*</span></label>
                    <input type="email" name="nokemail" class="form-control" id="email" placeholder="">
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
                    <input type="text" class="form-control" id="buildinghouse" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="streetname">Street Name <span>*</span></label>
                    <input type="text" class="form-control" id="streetname" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="surburbTown">Suburb/Town <span>*</span></label>
                    <input type="text" class="form-control" id="surburb-town" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="postalCode">Postal Code <span>*</span></label>
                    <input type="text" class="form-control" id="postal-code" placeholder="">

                </div>

                <div class="form-group form-inline">
                    <label for="country">Country <span>*</span></label>
                    <input type="text" class="form-control" id="country" placeholder="">
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
                    <input type="text" name="generalPractioner" class="form-control" id="generalPractioner" value="'.$row["generalPractioner"].'" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="speciality">Speciality <span>*</span></label>
                    <input type="text" name="speciality" class="form-control" id="Speciality" value="'.$row["speciality"].'" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="Name of Degree">Name of Degree <span>*</span></label>
                    <input type="text" name="NameOfDegree" class="form-control" id="NameOfDegree" value="'.$row["NameOfDegree"].'" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="institution">Institution <span>*</span></label>
                    <input type="text" name="institution" class="form-control" id="institution" value="'.$row["institution"].'" placeholder="">
                </div>

                <div class="form-group form-inline">
                    <label for="yearObtained">Year Obtained <span>*</span></label>
                    <input type="text" name="yearObtained" class="form-control" id="yearObtained" value="'.$row["yearObtained"].'" placeholder="">
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

        ';
?>
