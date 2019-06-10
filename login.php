<?php

	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$db = "tudimdibao";

	$con = mysqli_connect($servername, $user, $pass, $db) or die("Sem conexão com o servidor");

	$result =  sprintf("SELECT * FROM `usuarios` WHERE `loginUsuario` = '$login' AND `senhaUsuario`= '$senha'");

	$dados = mysqli_query($con, $result) or die(mysqli_error($con));
	
	$total = mysqli_num_rows($dados);
	
	if($total > 0 ){

		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:forms.php');

	}else{

		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:login.html');
	   
	}