<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "header.php";
include_once("header.php");
include_once("navbarAdmin.php");
?>
<html>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: white;
		}

		</body>
	</style>
</head>

<body>

	<br>
	<div class="container">
		<div class="row" align="center">
			<div class="col-lg-6">
				<div class="jumbotron">
				
					<form class="form-horizontal" method="post" action="add.AulaPresencial.php">
						<fieldset>

							<!-- Form Name -->
							<legend>Adicionar Aula Presencial</legend>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="room">Data</label>
								<div class="col-md-5">
									<input id="room" name="room" type="text" placeholder="" class="form-control input-md" required="">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="starttime">Início</label>
								<div class="col-md-5">
									<input id="starttime" name="starttime" type="text" placeholder="" class="form-control input-md" required="">

								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="endtime">Término</label>
								<div class="col-md-5">
									<input id="endtime" name="endtime" type="text" placeholder="" class="form-control input-md" required="">

								</div>
							</div>

							<!-- Button -->
							<div class="form-group" align="right">
								<label class="col-md-4 control-label" for="submit"></label>
								<div class="col-md-5">
									<button id="submit" name="submit" class="btn btn-primary">Adicionar Aula Presencial</button>
								</div>
							</div>

						</fieldset>
					</form>
				</div>
			</div>

		</div>
		<script>
		let isOnline = document.querySelector('mode').checked;
		if (isOnline == true){
			alert("Checked");
		}else{
			alert("unChecked");
		}
		</script>


			<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "footer.php";
			include_once("footer.php");
			include_once("navbarAdmin.php");
			?>