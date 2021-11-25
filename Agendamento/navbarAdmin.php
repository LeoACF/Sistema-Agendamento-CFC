<?php 
 include_once("header.php");
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheets" href="css/calendar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="selectorAdmin.php"><!--BUPC --> Área do Administrador</a>
    </div>
    <div>
	
	
    <ul class="nav navbar-nav">
        <li><a href="selectorAdmin.php"><span class="glyphicon glyphicon-home"></span> Início </a></li>
        <li><a href="addMateria.php"><span class="glyphicon glyphicon-plus-sign"></span> Matéria</a></li>
        <!-- <li><a href="addMateria.php"><span class="glyphicon glyphicon-plus-sign"></span> Matéria</a></li>  -->
        <li><a href="addModulo.php"><span class="glyphicon glyphicon-plus-sign"></span> Módulo</a></li>
		<li><a href="addAulaPresencial.php"><span class="glyphicon glyphicon-asterisk"></span> Aula Presencial</a></li>
		<li><a href="addAulaOnline.php"><span class="glyphicon glyphicon-time"></span>  Aula Online</a></li>
        <li><a href="listAdmin.php"><span class="glyphicon glyphicon-list"></span> Todos</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-calendar"></span> Registrar Aluno </a></li>
        <li><a href="registerAdmin.php"><span class="glyphicon glyphicon-calendar"></span> Registrar Adm </a></li>
		
    	</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
    </ul></div>
  </div>
</nav>

</body>
</html>





