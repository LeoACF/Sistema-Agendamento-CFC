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

 $dateEAD = $_POST['roomEAD'];

 $sql = "INSERT INTO dateEAD (dateEAD) VALUES ('$dateEAD')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("Nova Data Adicionada!");
                           </script>';
 }
 
 $Start_Time = $_POST['starttimeEAD'];
 $End_Time = $_POST['endtimeEAD'];
 
 $sql1 = "INSERT INTO timerEAD (Start_TimeEAD, End_TimeEAD) VALUES ('$Start_Time', '$End_Time')";

 if (!mysqli_query ($con, $sql1))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("Novo Horário Adicionado!");
                         location="homeAdmin.php";
                           </script>';
 }
 

?>


