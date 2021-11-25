<?php
session_start();
include_once("configDB.php");
  $username = $_POST['username'];
  $password = $_POST['password'];
 

  if ($username&&$password)
  {
	$connect = mysqli_connect($hostname, $user, $pass)or die("couldn't connect to the database!");
	mysqli_select_db($connect,$database) or die ("couldn't find database!");
	 
	 $query = mysqli_query($connect,"SELECT * FROM admin WHERE username='$username'");
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
			  echo '<script type="text/javascript">
                
                         location="selectorAdmin.php";
                           </script>';
			 $_SESSION['username'] = $username;
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="index.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("This user doesnt exist!");
                         location="index.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter a username and password!");
                         location="index.php";
                           </script>');
  
	  	 
?>