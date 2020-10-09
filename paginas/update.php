<?php
session_start();
require_once('teste_conexao.php');

$idUsuario = filter_input(INPUT_POST, 'idUsuario',FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);
$permissao = filter_input(INPUT_POST, 'permissao',FILTER_SANITIZE_STRING);

$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', cpf = $cpf, email='$email',senha='$senha',permissao='$permissao' where idUsuario = ".$_SESSION['idUsuario']."";

$update = mysqli_query($conn, $sql);

if($update){
	$_SESSION['mensagem'] = "<span style='color: green'>USUARIO EDITADO COM SUCESSSO - ID:".$_SESSION['idUsuario']." </span>";
	$_SESSION['us_permissao'] = $permissao;
	$_SESSION['us_nome'] = $nome;
	header('Location: ge_usuarios.php');
}else{
	$_SESSION['mensagem'] = "<span style='color:red'>USUARIO NÃO EDITADO COM SUCESSO</span>";
	header('Location: ge_usuarios.php');
}

unset($_SESSION['idUsuario']);

mysqli_close($conn);
?>