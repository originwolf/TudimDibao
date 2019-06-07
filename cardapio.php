<?php

	$host = "localhost";
	$db = "tudimdibao";
	$user = "root";
	$pass = "";

	$con = mysqli_connect($host, $user, $pass, $db);

	$query = sprintf("SELECT * FROM cardapio");

	$query1 = sprintf("SELECT segunda FROM cardapio");
	$query2 = sprintf("SELECT terca FROM cardapio");
	$query3 = sprintf("SELECT quarta FROM cardapio");
	$query4 = sprintf("SELECT quinta FROM cardapio");
	$query5 = sprintf("SELECT sexta FROM cardapio");
	$query6 = sprintf("SELECT sabado FROM cardapio");

	$dados = mysqli_query($con, $query) or die(mysqli_error($con));

	$dados1 = mysqli_query($con, $query1) or die(mysqli_error($con));
	$dados2 = mysqli_query($con, $query2) or die(mysqli_error($con));
	$dados3 = mysqli_query($con, $query3) or die(mysqli_error($con));
	$dados4 = mysqli_query($con, $query4) or die(mysqli_error($con));
	$dados5 = mysqli_query($con, $query5) or die(mysqli_error($con));
	$dados6 = mysqli_query($con, $query6) or die(mysqli_error($con));

	$linha = mysqli_fetch_assoc($dados);

	$linha1 = mysqli_fetch_assoc($dados1);
	$linha2 = mysqli_fetch_assoc($dados2);
	$linha3 = mysqli_fetch_assoc($dados3);
	$linha4 = mysqli_fetch_assoc($dados4);
	$linha5 = mysqli_fetch_assoc($dados5);
	$linha6 = mysqli_fetch_assoc($dados6);

	$total = mysqli_num_rows($dados);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cardapio</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>

		@font-face{
			font-family: ubuntu;
			src: url("../fonts/Ubuntu.ttf") format("truetype");
		}

		body{
			font-family: ubuntu, arial, sans-serif;
		}

		table {
			border: 1px solid black;
			background-color: white;
			width: 38rem;
		}

		table td,
		table th {
			text-align: left;
		}
		
	</style>
</head>
<body>

	<?php

		//se o número de resultados for maior que zero, mostra os dados
		if($total > 0) {

			//inicia o loop que vai mostrar todos os dados
			do {
	?>
				<table class="table table-bordered table-hover table-sm">
					<thead class="thead-dark">

						<tr>
							<th scope="col">DIA DA SEMANA</th>
							<th scope="col">CARDÁPIO</th>
						</tr>

					</thead>

					<tbody class="table">

						<tr>
							<td><p>Segunda-feira: </p></td>
							<td><?=$linha['segunda']?></td>
						</tr>
						<tr>
							<td><p>Terça-feira: </p></td>
							<td><?=$linha['terca']?></td>
						</tr>
						<tr>
							<td><p>Quarta-feira: </p></td>
							<td><?=$linha['quarta']?></td>
						</tr>
						<tr>
							<td><p>Quinta-feira: </p></td>
							<td><?=$linha['quinta']?></td>
						</tr>
						<tr>
							<td><p>Sexta-feira: </p></td>
							<td><?=$linha['sexta']?></td>
						</tr>
						<tr>
							<td><p>Sábado: </p></td>
							<td><?=$linha['sabado']?></td>
						</tr>
						
					</tbody>
					
				</table>
	<?php	

		//finaliza o loop que vai mostrar os dados

			}while($linha = mysqli_fetch_assoc($dados));
		}

	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>