<?php 
		
	session_start();
	if((!isset ($_SESSION['login']) == true) && (!isset ($_SESSION['senha']) == true)){
		unset($_SESSION['login']);
	  	unset($_SESSION['senha']);
	  	header('location:login.html');
	}
	 
	$logado = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>TudimDibao - Formulario</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body class="bodyForm">

	<div class="container-fluid formInput">

		<div class="col-6 formuInput py-3 my-5">

			<form method="POST" action="input.php">

				<div class="form-group">

					<label for="exampleInputEmail1">Segunda-Feira</label>
					<input type="text" class="form-control" placeholder="Segunda-feira" name="segunda" required>

				</div>

				<div class="form-group">

					<label for="exampleInputEmail1">Terça-Feira</label>
					<input type="text" class="form-control" placeholder="Terça-feira" name="terca" required>

				</div>

				<div class="form-group">

					<label for="exampleInputEmail1">Quarta-Feira</label>
					<input type="text" class="form-control" placeholder="Quarta-feira" name="quarta" required>

				</div>

				<div class="form-group">

					<label for="exampleInputEmail1">Quinta-Feira</label>
					<input type="text" class="form-control" placeholder="Quinta-feira" name="quinta" required>

				</div>

				<div class="form-group">

					<label for="exampleInputEmail1">Sexta-Feira</label>
					<input type="text" class="form-control" placeholder="Sexta-feira" name="sexta" required>

				</div>

				<div class="form-group">

					<label for="exampleInputEmail1">Sábado</label>
					<input type="text" class="form-control" placeholder="Sábado" name="sabado" required>

				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>
			
		</div>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>