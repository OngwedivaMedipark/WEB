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
  
       /*   <tr>
            <td width="30%"><label>First Name </label></td>
            <td width="30%">'.$row["FirstName"].'</td>
          </tr>

*/
  $output .='
  <div class="col-lg-12">
  <div class="add-patient-container">
         <h4 class="custom-modal-title">Add New Patient</h4>
        <div class="custom-modal-text text-left">';     
      while($row = mysqli_fetch_array($query))
      {
        $output .='
       
      
<form class="add-patient" action="assets/php/manage-patient.php" method="post" id="insert-form">
        <ul id="progressbar">
          <li class="active">Personal  Information</li>
          <li>Contact Information</li>
         <li>Next of kin </li>
          <li>Payment Information</li>
          <li>Person Responsible for Account</li> 
          <li>Terms & Conditions</li>                                      
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
      
        <!-- Next of kin field -->  
       <fieldset>
          <h2 class="fs-title">Next of kin</h2>
          <h3 class="fs-subtitle"></h3>
    
      <div class="col-lg-6">
  
      <div class="form-group form-inline">
          <label for="nokName">Name <span>*</span></label>
          <input type="text" class="form-control" id="nokName" name="nokName" value="'.$row["NokName"].'" placeholder="">
      </div>

      <div class="form-group form-inline">
            <label for="nokSurname">Surname <span>*</span></label>
            <input type="text" class="form-control" id="nokSurname" name="nokSurname" value="'.$row["NokSurname"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="nokContact">Contact Number <span>*</span></label>
                <input type="text" class="form-control" id="nokContact" name="nokContact" value="'.$row["NokContact"].'" placeholder="">
        </div>
    
        <div class="form-group form-inline">
                <label for="">Residential Address:</label>
        </div>

        <div class="form-group form-inline">
                <label for="nokBuildingHome">Building/House <span>*</span></label>
                <input type="text" class="form-control" id="nokbuilding-house" name="nokBuildingHome" value="'.$row["NokBuildingHouse"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="nokStreetName">Street Name <span>*</span></label>
                <input type="text" class="form-control" id="nok-street-name" name="nokStreetName" value="'.$row["NokStreetName"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="nokCountry">Country <span>*</span></label>
                <input type="text" class="form-control" id="nok-country" name="nokCountry" value="'.$row["NokCountry"].'" placeholder="">
        </div>

        <div class="form-group form-inline">
                <label for="nokSurburbTown">Suburb/Town <span>*</span></label>
                <input type="text" class="form-control" id="nok-surburb-town" name="nokSurburbTown" value="'.$row["NokSuburb"].'" placeholder="">
        </div>
        <div class="form-group form-inline">
                <label for="nokPostalCode">Postal Code <span>*</span></label>
                <input type="text" class="form-control" id="nok-postal-code" name="nokPostalCode" value="'.$row["NokPostalCode"].'" placeholder="">
               
         </div>   
        </div> 
        <div class="col-lg-6">
                <div class="form-group form-inline">
                        <label for="nokEmail">Email <span>*</span></label>
                        <input type="email" class="form-control" id="nok-email" value="'.$row["NokEmail"].'" name="nokEmail" placeholder="">                                               
                 </div>

                 <div class="form-group form-inline">
                        <label for="nokRelationship">Relationship</label>                                                     
                        <select name="nokRelationship" class="form-control" id="nok-ralationship" placeholder="">
                        <option>--Select option--</option>
                        <option value="mother">Mother</option>
                        <option value="father">Father</option>                                       
                        <option value="son">Son</option>
                        <option value="daughter">Daughter</option>
                        <option value="grandparent">Grandparent</option>
                        <option value="cousin">Cousin</option>
                        <option value="aunt">Aunt</option>
                        <option value="uncle">Uncle</option>
                        <option value="inlaws">In-laws</option>
                        <option value="brother">Brother</option>
                        <option value="sister">Sister</option>
                        <option value="relative">Relative</option>
                        <option value="other">Other</option>
                                                            
                        </select>
                </div>
        </div>
        <div class="col-lg-12"></div>
       
          <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
          <input type="button" data-page="3" name="next" class="next action-button" value="Save & Continue" />
        
        </fieldset>
      
      
      
        <!-- Payment Information --> 
      <fieldset>
          <h2 class="fs-title">Payment Information</h2>
          <h3 class="fs-subtitle"></h3>
            <div class="col-lg-6">
                
                    <div class="form-group form-inline">
                            <label for="paymentOptions">Payment Option <span>*</span></label>                                                     
                            <select name="paymentOptions" class="form-control" id="medicalaidoption" placeholder="">
                                <option>--Select option--</option>
                                <option value="medicalaid">Medial Aid</option>
                                <option value="cash">Cash</option>                                       
                                <option value="creditcard">Credit Card</option>
                                <option value="mva">MVA</option>
                                <option value="compnayorders">Company Orders</option>
                            </select>
                    </div>
                    <div class="form-group form-inline">
                            <label for="medicalAidScheme">Medical Aid Scheme <span>*</span></label>
                            <input type="text" class="form-control" name="medicalAidScheme" value="'.$row["MedicalAidScheme"].'" id="medical-aid-scheme" placeholder="">
                    </div>

                    <div class="form-group form-inline">
                            <label for="medicalAidSchemeOption">Medical Aid Scheme Option <span>*</span></label>
                            <input name="medicalAidSchemeOption" value="'.$row["MedicalAidSchemeOption"].'" type="text" class="form-control" id="medical-aid-scheme-option" placeholder="">
                    </div>

                    <div class="form-group form-inline">
                            <label for="medicalAidSchemeNumber">Medical Aid Scheme Number <span>*</span></label>
                            <input type="number" class="form-control" value="'.$row["MedicalAidSchemeNumber"].'" name="medicalAidSchemeNumber" id="medical-aid-scheme-number" placeholder="">
                    </div>

                                                                 
                    <div class="form-group form-inline">
                            <label for="">Main Member Details</label>
                            
                    </div>

                    
                    <div class="form-group form-inline">
                            <label for="memberName">Member Name <span>*</span></label>
                            <input type="text" class="form-control" id="member-name" value="'.$row["MemberName"].'" name="memberName" placeholder="">
                    </div>

                    <div class="form-group form-inline">
                            <label for="memberSurname">Member Surname <span>*</span></label>
                            <input type="text" class="form-control" value="'.$row["MemberSurname"].'" id="member-surname" name="memberSurname" placeholder="">
                    </div>

                    <div class="form-group form-inline">
                            <label for="memberId">Member ID Number <span>*</span></label>
                            <input type="text" class="form-control" name="memberId" value="'.$row["MemberId"].'" id="member-id-number" placeholder="">
                    </div>

                    <div class="form-group form-inline">
                            <label for="">Dependant Information</label>
                    </div>

                    <div class="form-group form-inline">
                            <label for="Patientcode">Patient Dependant Code <span>*</span></label>                                                     
                            <select name="patientCode" class="form-control" id="Patient-code" placeholder="">
                                <option>--Select option--</option>
                                <option value="00">00</option>
                                <option value="01">01</option>                                       
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                            </select>
                    </div>

            </div>

            <div class="col-lg-6">
                    <div class="uploader" onclick="$(#filePhoto).click()">Scan & Upload Medical Aid</div>
                    <input type="file" name="userprofile_picture"  id="filePhoto" style="display:block;width:255px;"  />
            </div>
         
            <div class="clearfix"></div>
            
            
          <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
          <input type="button" data-page="4" name="next" class="next action-button" value="Save & Continue" />
          
        </fieldset>
      
      
      
        <!-- person responsible -->  
      <fieldset>
          <h2 class="fs-title">PERSON RESPONSIBLE FOR ACCOUNT</h2>
          <h3 class="fs-subtitle"></h3>
          <div class="col-lg-6">
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
        <input type="text" class="form-control" name="accName" id="accName" placeholder="">
    </div>

    <div class="form-group form-inline">
        <label for="accSurname">Surname <span>*</span></label>
        <input type="text" class="form-control" id="accSurname" name="accSurname" placeholder="">
    </div>

    <div class="form-group form-inline">
        <label for="accIdnumber">ID Number <span>*</span></label>
        <input type="text" class="form-control" id="accIdnumber" name="accIdnumber" placeholder="">
    </div>

    <div class="form-group form-inline">
        <label for="">Billing Address </label>                                   
    </div>

    <div class="form-group form-inline">
        <label for="accBuildingHome">Building/House <span>*</span></label>
        <input type="text" class="form-control" id="acc-building-house" name="accBuildingHome" placeholder="">
</div>

<div class="form-group form-inline">
        <label for="accStreetName">Street Name <span>*</span></label>
        <input type="text" class="form-control" id="acc-street-name" placeholder="">
</div>

<div class="form-group form-inline">
        <label for="accCountry">Country <span>*</span></label>
        <input type="text" class="form-control" id="acc-street-name" placeholder="" name="accCountry">
</div>

<div class="form-group form-inline">
        <label for="accSuburb">Suburb/Town <span>*</span></label>
        <input type="text" class="form-control" id="acc-street-name" name="accSuburb" placeholder="">
</div>
<div class="form-group form-inline">
        <label for="accPostalCode">Postal Code <span>*</span></label>
        <input type="text" name="accPostalCode" class="form-control" id="acc-postal-code" placeholder="">
       
 </div>

<div class="form-group form-inline">
        <label for="accCountry">Country <span>*</span></label>
        <input type="text" class="form-control" id="acc-country" name="accCountry" placeholder="">
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
    <input type="text" class="form-control" id="employer-address" placeholder="">
</div>

<div class="form-group form-inline">
    <label for="occupation">Occupation <span>*</span></label>
    <input type="text" class="form-control" id="occupation" placeholder="">
</div>

<div class="form-group form-inline">
    <label for="accEmployerContact">Employer Contact<span>*</span></label>
    <input type="text" class="form-control" id="employer-contact" placeholder="">
</div>

    </div>

    <div class="col-lg-6">
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
                        <input type="text" class="form-control" id="acc-contact-number" placeholder="">
                    </div>

                    <div class="form-group form-inline">
                            <label for="accEmail">Email Address <span>*</span></label>
                            <input type="text" name="accEmail" class="form-control" id="acc-email" placeholder="">
                        </div>

                        <div class="form-group form-inline">                                          
                                <label for="accStatement">Statement & letters sent via <span>*</span> </label> 
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
      <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
      <input type="button" data-page="5" name="next" class="next action-button" value="Save & Continue" />
    
      </fieldset>
      
        <fieldset>
          <h2 class="fs-title">Terms & Conditions</h2>
          <h3 class="fs-subtitle"></h3>

          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryndard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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

                    <div class="col-lg-6"></div>
                    <div class="clearfix"></div>
        
          <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
          <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
          
        </fieldset>
</form>
              </div>
              </div>
            

</div>


</div>         
</div>

</div>
 
        ';
      }
      $output .= "</table></div>";
      echo $output;
}
?>