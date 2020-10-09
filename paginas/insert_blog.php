<?php
session_start();

require_once("teste_conexao.php");

$titulo_bg = filter_input(INPUT_POST, 'titulo_bg',FILTER_SANITIZE_STRING);
$texto_bg = filter_input(INPUT_POST, 'texto_bg',FILTER_SANITIZE_STRING);

$sql = "INSERT INTO blog (titulo_bg, texto_bg) VALUES ('$titulo_bg', '$texto_bg')";
$result = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
	$_SESSION['mensagem'] = "<span style='color: green'>USUARIO CADASTRADO COM SUCESSSO - ID: ".mysqli_insert_id($conn)." </span>";
	header('Location: blog.php');
}else{
	$_SESSION['mensagem'] = "<span style='color:red'>USUARIO NÃO CADASTRADO COM SUCESSO</span>";
	header('Location: blog.php');
}

?>