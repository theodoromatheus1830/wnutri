<?php
session_start();

require_once("teste_conexao.php");

$titulo_bg = filter_input(INPUT_POST, 'titulo_bg',FILTER_SANITIZE_STRING);
$texto_bg = filter_input(INPUT_POST, 'texto_bg',FILTER_SANITIZE_STRING);

$sql = "UPDATE blog SET titulo_bg = '$titulo_bg', texto_bg = '$texto_bg' where IdBlog = ".$_SESSION['IdBlog']."";
$result = mysqli_query($conn, $sql);

var_dump($sql);

if(mysqli_insert_id($conn)){
	$_SESSION['mensagem'] = "<span style='color: green'>POSTAGEM EDITADA COM SUCESSSO - ID: ".$_SESSION['IdBlog']." </span>";
	header('Location: blog.php');
}else{
	$_SESSION['mensagem'] = "<span style='color:red'>POSTAGEM NÃO EDITADA COM SUCESSO</span>";
	header('Location: blog.php');
}

?>