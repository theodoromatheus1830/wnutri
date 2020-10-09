<?php
session_start();

require_once("php_conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$email2 = filter_input(INPUT_POST, 'email2',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);
$senha2 = filter_input(INPUT_POST, 'senha2',FILTER_SANITIZE_STRING);
$permissao = filter_input(INPUT_POST, 'permissao',FILTER_SANITIZE_STRING);

if($permissao == ''){$permissao='usuario';}

$sql = "INSERT INTO usuarios (nome,sobrenome,cpf,email,senha,permissao) VALUES ('$nome', '$sobrenome','$cpf', '$email', '$senha', '$permissao')";
$result = mysqli_query($conn, $sql);

//Se verdadeiro -> usuario cadastrado e se falso não cadastrado
if(mysqli_insert_id($conn)){
	$_SESSION['mensagem'] = "<span style='color: green'>USUARIO CADASTRADO COM SUCESSSO - ID: ".mysqli_insert_id($conn)." </span>";
	if($permissao == 'administrador'){
		header('Location: ge_usuarios.php');
	}
	else{
		if(!isset($_SESSION['us_permissao'])||!isset($_SESSION['us_nome'])){
		$_SESSION['us_permissao'] = $permissao;
		$_SESSION['us_nome'] = $nome;
		header('Location: index.php');
		}else{header('Location: index.php');}
	}
}else{
	$_SESSION['mensagem'] = "<span style='color:red'>USUARIO NÃO CADASTRADO COM SUCESSO</span>";
	if($permissao == 'administrador'){
		header('Location: ge_usuarios.php');
	}
	else{
		header('Location: index.php');
	}
}
mysqli_close($conn);
?>