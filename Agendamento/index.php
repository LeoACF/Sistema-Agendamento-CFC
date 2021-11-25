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

			<legend>Validação para Administradores</legend>

		
			<div class="form-group">
			
			  <label  class="col-md-4 control-label" for="token">Token</label>
			  <div class="col-md-5">
				<input id="token" name="token" type="password" placeholder="Somente para Administradores" class="form-control input-md" required="">
			
				
			  </div>
			</div>

			
			<div id="btn-apache_get_modules" class="form-group" style="display:none;"align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Entrar">
	
			  </div>
			</div>

			<button type="button" id="validar" class="btn btn-primary pull-right" onclick="validate()">Validar</button>
			<button type="button" id="pular" class="btn btn-primary" onclick="aluno()"">Alunos</button>
			
			

			</fieldset>
		</form>
		</div>
	


		</div>
	</div>
</body>
</html>
<script>
			function validate() {
				let token = document.getElementById("token").value;
		
				if (token === "874535") {
					window.location.replace("250-950_778-84.php");
				} else {
					alert('Você não tem essa permissão. Clique no botão "Alunos".');
					die;
				}
				document.getElementById('btn-login').style.display='inline';
			};

			function aluno() {
				window.location.replace("loginAluno.php");
			};
</script>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
