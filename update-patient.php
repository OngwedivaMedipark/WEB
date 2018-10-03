<?php
$name = $_POST['firstName'];
$lastname = $_POST['lastName'];
   $dob = $_POST['dateOfBirth'];
   $IdNumber = $_POST['idNumber'];
   
   
   $MiddleName = $_POST['middleName'];
   
   $ResAddress1 = $_POST['resAddress1'];
   $ResPostCode = $_POST['resPostCode'];
   $Title = $_POST['title'];
   $Occupation = $_POST['occupation'];
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
  
  $personId = $_POST["personId"]; 
  
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$conn) {
      die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
  }                           
 
  $sql = "UPDATE omeyah.Person SET FirstName ='$name', LastName='$lastname', IdNumber='$IdNumber',ResAddress1 = '$ResAddress1',  ResPostCode = '$ResPostCode', Title = '$Title', Occupation = '$Occupation', Religion = '$Religion', Email = '$Email', BusAddress = '$BusAddress',  HomeTel = '$HomeTel', WorkTel = '$WorkTel', ResSurbub = '$ResSurbub', Country ='$Country',   IdentityType =' $IdentityType', MaritalStatus = '$MaritalStatus'   WHERE PersonId = '$personId'";
  

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>


