<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
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

	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>Sistema de Agendamento </h3>
	  </div>
	</nav>
	
	<div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="login.php">
			<fieldset>

			<legend>Entrar</legend>

			
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

			
			<div class="form-group" align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Entrar">
			  </div>
			</div>

			</fieldset>
		</form>
		</div>
	


		</div>
	</div>
</body>
</html>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
