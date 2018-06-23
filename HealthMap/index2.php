<?php
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	include('conexao.php');

	$result = mysql_query ("select * from usuario where login='$login' and senha='$senha'");

	if(mysql_num_rows($result) > 0){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:dashboard.php');
	}
	else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:dashboard.php');
	}
?>