<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
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
            <div align="center">
         
			<div align="center">
			<legend> Matérias Cadastradas</legend></fieldset>
			<br>
			<?php 
			  include_once("sublist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Módulos Cadastradas</legend></fieldset>
			<br>
			<?php 
              include_once("listaModulos.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Datas Cadastradas (Aulas Presenciais)</legend></fieldset>
			<br>
			<?php
				 include_once("roomlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Horários Cadastradas (Aulas Presenciais)</legend></fieldset>
			<br>
			<?php
				 include_once("timelist.php");
			?>

<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Datas Cadastradas (Aulas Online)</legend></fieldset>
			<br>
			<?php
				 include_once("roomlistEAD.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Horários Cadastrados (Aulas Online)</legend></fieldset>
			<br>
			<?php
				 include_once("timelistEAD.php");
			?>
			

<?php
   include_once("footer.php");
//    include_once("navbar.php");
?>	