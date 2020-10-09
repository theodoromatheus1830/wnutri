<?php
session_start();

require_once("teste_conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto',FILTER_SANITIZE_STRING);

$sql = "INSERT INTO contato (nome, email, texto) VALUES ('$nome', '$email', '$texto')";
$result = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
	$_SESSION['mensagem'] = "<span style='color: white'> MENSAGEM ENVIADA COM SUCESSO - ID: ".mysqli_insert_id($conn)." </span>";
	header('Location: contato.php');
}else{
	$_SESSION['mensagem'] = "<span style='color:red'> MENSAGEM NÃO ENVIADA COM SUCESSO</span>";
	header('Location: contato.php');
}

?>