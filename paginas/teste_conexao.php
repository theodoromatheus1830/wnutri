<?php
	$serv = "localhost";
	$user = "root";
	$password = "";
	$db = "wnutri";
	
	$conn = mysqli_connect($serv, $user, $password, $db);
	
	if(!$conn){
		die("Falha na conexão: ". mysqli_connect_error());
	}
?>