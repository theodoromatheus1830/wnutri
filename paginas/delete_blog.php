<?php
session_start();
require_once('teste_conexao.php');

$IdBlog = filter_input(INPUT_GET, 'IdBlog',FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM blog where IdBlog = ".$IdBlog."";

$delete = mysqli_query($conn, $sql);

if($delete){
	$_SESSION['mensagem'] = "<span style='color: green'>USUARIO DELETADO COM SUCESSSO - ID:".$IdBlog." </span>";
	header('Location: blog.php');
}else{
	$_SESSION['mensagem'] = "<span style='color:red'>USUARIO NÃO DELETADO COM SUCESSO</span>";
	header('Location: blog.php');
}

mysqli_close($conn);
?>
