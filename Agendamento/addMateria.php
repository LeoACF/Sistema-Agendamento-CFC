<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbarAdmin.php");
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
 
 <br><div class="container"> 
  <div class="row" align="center">
    <div class="col-lg-6">
		<div class="jumbotron">
                
				<form class="form-horizontal" method= "POST" action="add.Materia.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Adicionar Matérias</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="subcode">Código da Matéria</label>  
				  <div class="col-md-5">
				  <input id="subcode" name="subcode" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="subdescription">Matéria</label>  
				  <div class="col-md-5">
				  <input id="subdescription" name="subdescription" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<input type="submit" id="submit" name="submit" class="btn btn-primary" value="Adicionar Matéria"></input>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
    </div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbarAdmin.php");
?>