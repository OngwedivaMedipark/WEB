<?php
    include_once('assets/php/database.php');
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysql_query("SELECT * FROM Person WHERE id='$id'");
		$row= mysql_fetch_array($res);
	}
 
	if( isset($_POST['newPatient']) )
	{
        $newName = $_POST['newPatient'];
        $personId = $_POST["personId"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $idNumber  =$_POST["idNumber "];
        
		$id  	 = $_POST['id'];
		$sql     = "UPDATE Person SET name='$newPatient' WHERE id='$id'";
		$res 	 = mysql_query($sql) 
        or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
 
?>
  