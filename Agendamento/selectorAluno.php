<?php

include_once("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>


    <!-- Button -->
    <div class="form-group" align="center">
        <label class="control-label" for="submit"></label>
        <button onclick="window.location.replace('homePresencial.php')" id="submit" name="submit" class="btn btn-lg btn-primary">Agendar Aula Presencial</button>
        <button onclick="window.location.replace('homeEAD.php')" id="submit" name="submit" class="btn btn-lg btn-primary">Agendar Aula Online</button>
    </div>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="styletwo.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <script src="css/bootstrap-theme.min.css"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>