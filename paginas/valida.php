<?php
session_start();

require_once("teste_conexao.php");

$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);

$select = "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `senha`= '$senha'";
$sql = mysqli_query($conn, $select);
$result = mysqli_fetch_array($sql);

if(mysqli_num_rows($sql) == 1){
	mysqli_fetch_array($result);
	$_SESSION['us_permissao'] = $result['permissao'];
	$_SESSION['us_nome'] = $result['nome'];
	header('Location: index.php');
}
else{
  unset ($_SESSION['us_permissao']);
  unset ($_SESSION['us_nome']);
  header('location:index.php');
   
}
