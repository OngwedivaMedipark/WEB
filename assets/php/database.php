<?php
// used to connect to the database

$db_host = "35.229.89.118";
$db_user = "admin";
$db_pass = "sp!cymacfe@st";
$db_name = "omeyah";
  
try {
    $con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>