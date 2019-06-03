<?php
	//definição de host, database, usuário e senha
	$host = "localhost";
	$db = "devmedia";
	$user = "root";
	$pass = "";
	// conexão com o banco de dados
	//$con = mysqli_connect("$host","$user","$pass") or trigger_error(mysql_error(),E_USER_ERROR);
	$con = mysqli_connect($host, $user, $pass, $db);
	//seleciona a base de dados em que vamos trabalhar
	//mysqli_select_db($db,$con);
	//cria a instrução sql que vai serlecionar os dados
	$query = sprintf("SELECT identificador, nome, telefone FROM cadastro");
	//executa a query
	$dados = mysqli_query($con, $query) or die(mysql_error());
	//transforma os dados em um array
	$linha = mysqli_fetch_assoc($dados);
	//calcula quantos dados retornaram
	$total = mysqli_num_rows($dados);
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Exemplo Conexão de DB</title>
</head>
<body>
	
	<?php

		//se o número de resultados for maior que zero, mostra os dados
		if($total > 0) {

			//inicia o loop que vai mostrar todos os dados
			do {
	?>
				<p><?=$linha['nome']?> / <?=$linha['telefone']?></p>
	<?php	

		//finaliza o loop que vai mostrar os dados

			}while($linha = mysqli_fetch_assoc($dados));
		}

	?>

</body>
</html>