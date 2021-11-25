<!-- <html>
<head>
<style>

body {
	margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}

</style>
</head> -->

<?php
  include_once("configDB.php");
// php select option value from database


// connect to mysql database

$connect = mysqli_connect($hostname, $user, $pass, $database);

// mysql select query
$query = "SELECT * FROM `course`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `faculty`";
$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbarAdmin.php");
   include_once("configDB.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>
<br><div class="container" >
	
  <div class="row" align="center">
    <div class="col-lg-6">
		<div class="jumbotron">
		
		<form class="form-horizontal" method= "post" action = "add.home.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Agendar</legend>
        

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="faculty">Modalidade</label> 
			<div class="col-md-5">
		<select id="faculty" name="faculty" class="form-control">
        <option value="EAD">EAD</option>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="Course">Módulo</label> 
			<div class="col-md-5">
		<select  id="course" name="course"  class="form-control">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>

            <?php endwhile;?>

        </select>
        
        

		</div>		
    </div>
    </body>
</head>
</html>

<?php

// php select option value from database


// connect to mysql database

$connect = mysqli_connect($hostname, $user, $pass, $database);

// mysql select query
$query = "SELECT * FROM `date`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `subject`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>


<html>
<head>
</head>
<body>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="subject">Matéria</label> 
			<div class="col-md-5">
		<select  id="subject" name="subject"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[2];?></option>

            <?php endwhile;?>

        </select> 
		<?php

// php select option value from database


// connect to mysql database

$connect = mysqli_connect($hostname, $user, $pass, $database);

// mysql select query
$query = "SELECT * FROM `date`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `date`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="room">Data</label> 
			<div class="col-md-5">
		<select  id="room" name="room"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
	
        



<?php

// php select option value from database

// connect to mysql database

$connect = mysqli_connect($hostname, $user, $pass, $database);

// mysql select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		
		
        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="start_time">Horário de Início</label> 
			<div class="col-md-5">
		<select  id="start_time" name="start_time" class="form-control">
		  <?php echo $options;?>
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
		</div>		
    </div>
    </body>
</head>

</html>
        

<?php

// php select option value from database

// connect to mysql database

$connect = mysqli_connect($hostname, $user, $pass, $database);

// mysql select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>





        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="end_time">Horário de Termino</label> 
			<div class="col-md-5">
		<select  id="end_time" name="end_time" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>

            <?php endwhile;?>

        </select>
		<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="insert" class="btn btn-primary"> Confirmar </button>
				  </div>
				</div>
        
        
</fieldset>
			</form>
			
		</div>		
    </div>
    </body>
	
	
</head>

</html>





