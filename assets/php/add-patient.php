<?php
 if (isset($_POST['title'],$_POST['firstName'], $_POST['middleName'], $_POST['lastName'],  $_POST['genderId'],  $_POST['dateOfBirth'], $_POST['age'], $_POST['idType'], $_POST['maritialStatus'], $_POST['ethnicity'], $_POST['religion'], $_POST['homeTel'], $_POST['workTel'], $_POST['prefferedContact'], $_POST['buildingHome'], $_POST['streetName'], $_POST['postalBox'], $_POST['postalCode'], $_POST['cellNumber'], $_POST['email'], $_POST['contactHours'], $_POST['nokName'], $_POST['nokSurname'], $_POST['nokContact'], $_POST['nokBuildingHome'], $_POST['nokStreetName'],  $_POST['nokCountry'],  $_POST['nokStreetName'],  $_POST['nokSurburbTown'],  $_POST['nokPostalCode'],  $_POST['nokEmail'] , $_POST['nokStreetName'], $_POST['nokEmail'], $_POST['nokRelationship'],$_POST['paymentOptions'] ,$_POST['medicalAidSchemeOption'], $_POST['medicalAidScheme'] , $_POST['medicalAidSchemeNumber'] , $_POST['memberName'] , $_POST['memberSurname'] , $_POST['memberId'] , $_POST['patientCode'], $_POST['userprofile_picture'], $_POST['accTitle'], $_POST['accName'], $_POST['accSurname'], $_POST['accIdnumber'], $_POST['accBuildingHome'], $_POST['accStreetName'], $_POST['accCountry'], $_POST['accSuburb'], $_POST['accPostalCode'], $_POST['accCountry']))
 
 {
    $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
    die($output);
}
?>


