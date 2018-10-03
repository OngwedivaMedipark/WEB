<?php
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
    <div class="table-responsive">
      <table class="table table-border">';     
      while($row = mysqli_fetch_array($query))
      {
        $output .='

          <tr>
            <td width="30%"><label>First Name </label></td>
            <td width="30%">'.$row["FirstName"].'</td>
          </tr>
          

          <tr>
            <td width="30%"><label>Last Name </label></td>
            <td width="30%">'.$row["LastName"].'</td>
          </tr>';
      }
      $output .= "</table></div>";
      echo $output;
}
?>