<?php 
 include_once("configDB.php");
 // This file adds Room (which I think is Date), Start Time and End Time for Presencial Classes
 

 $con = mysqli_connect ($hostname, $user, $pass);
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, $database))
 {
	 echo 'database not selected';
 }

 $Room = $_POST['room'];

 $sql = "INSERT INTO rooms (Room) VALUES ('$Room')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Room Reserved!");
                           </script>';
 }
 
 $Start_Time = $_POST['starttime'];
 $End_Time = $_POST['endtime'];
 
 $sql1 = "INSERT INTO timer (Start_Time, End_Time) VALUES ('$Start_Time', '$End_Time')";

 if (!mysqli_query ($con, $sql1))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Time Added!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>


