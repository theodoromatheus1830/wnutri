<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head> 
<body> 
	<header>
		<div id="topo">
			<span class="float-right m-2"><a href="area_logada.php" class="mr-4" style="color:white;">Área Logada</a></span>
		</div>
	</header>
	<?php require_once("head.html");
		 require_once("verifica_permissao.php");
		 include("session_start.php");?>
	<section>
		<form class="container mt-5"  method="post" action="insert_blog.php">
			<div class="form-group">
				<label for="exampleFormControlInput1">Titulo da Postagem</label>
				<input class="form-control" name="titulo_bg" type="text" placeholder="Titulo da Postagem">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Digite sua Postagem</label>
				<textarea class="form-control" name="texto_bg" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Ensira uma imagem para sua postagem</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1">
			</div>
			<button type="submit" name="salvar" class="btn btn-primary">Enviar</button>
		</form>
	</section>
	<footer class="container-fluid bg-secondary float-left" style="position: absolute; bottom: 0;">
            <div>
                <span class="text-light lead px-3 ">Matheus Alves - Copyright © 2019 - Todos os direitos reservados.</span>
            </div>
	</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body> 
</html>