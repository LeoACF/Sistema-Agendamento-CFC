<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
//    include_once("header.php");
   include_once("navbarAdmin.php");

?>

<html>
<head>
<style>

body {
	background-image: url();
	background-color: white;
}
</body>
</style>
</head>

<body>

	<div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="regisAdmin.php">
			<fieldset>

			<legend>Registrar Administrador Novo</legend>

			<br><div class="form-group">
			  <label class="col-md-4 control-label" for="username">Nome de Usuário</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Senha</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
			
			<div class="form-group"  align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Criar">
			  </div>
			</div>
			</fieldset>
		</form>
		
	</div>

</body>
</html>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>