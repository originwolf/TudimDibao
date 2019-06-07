<?php

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$db = "tudimdibao";

	$con = mysqli_connect($servername, $user, $pass, $db) or die("Sem conexão com o servidor");

	if (isset($_POST["segunda"])) {

		$segunda = $_POST["segunda"];
		$terca = $_POST["terca"];
		$quarta = $_POST["quarta"];
		$quinta = $_POST["quinta"];
		$sexta = $_POST["sexta"];
		$sabado = $_POST["sabado"];

		$sql = "UPDATE cardapio 
		SET segunda = '$segunda', 
		terca = '$terca', 
		quarta = '$quarta', 
		quinta = '$quinta', 
		sexta = '$sexta', 
		sabado = '$sabado' 
		WHERE idCardapio=0";

		if (mysqli_query($con, $sql)) {
	    	echo "Atualizado com Sucesso!";
		} else {
	      	echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}

		mysqli_close($con);

	}
