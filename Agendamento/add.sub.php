<?php 
  include_once("configDB.php");
  $con = mysqli_connect ($hostname, $user, $pass);
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, $database))
 {
	 echo 'database not selected';
 }

 $Subject_Code = $_POST['subcode'];
 $Subject_Description = $_POST['subdescription'];
 
 $sql = "INSERT INTO subject (Subject_Code, Subject_Description) VALUES ('$Subject_Code', '$Subject_Description')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Subject Added!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>
