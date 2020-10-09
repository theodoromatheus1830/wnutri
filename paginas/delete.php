<?php
session_start();
require_once('teste_conexao.php');

$idUsuario = filter_input(INPUT_GET, 'idUsuario',FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM usuarios where idUsuario = ".$idUsuario."";

$delete = mysqli_query($conn, $sql);

if($delete){
	$_SESSION['mensagem'] = "<span style='color: green'>USUARIO DELETADO COM SUCESSSO - ID:".$idUsuario." </span>";
	header('Location: ge_usuarios.php');
}else{
	$_SESSION['mensagem'] = "<span style='color:red'>USUARIO NÃO DELETADO COM SUCESSO</span>";
	header('Location: ge_usuarios.php');
}

mysqli_close($conn);
?>
