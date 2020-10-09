<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/cadastro_img.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head> 
<body> 
	<header>
		<div id="topo"></div>
	</header>
	<?php require_once("head.html");
	require_once("verifica_permissao.php");
	include("session_start.php");?>
	<main>
		<div style="height: 250px">
			<div id="texto">
				<h1 class="container text-center">GERENCIADOR</h1>
			</div>
		</div>
	<div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../img/usuarios2.jpg" alt="Imagem de capa do card">
			  <div class="card-body">
				<h5 class="card-title">Usuários</h5>
				<p class="card-text">Adicione, remova e edite úsuarios no seu site.</p>
				<a href="ge_usuarios.php" class="btn btn-primary">Gerenciar</a>
			  </div>
			</div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../img/galeria2.jpg" alt="Imagem de capa do card">
			  <div class="card-body">
				<h5 class="card-title">Galeria</h5>
				<p class="card-text">Adicione, remova e edite imagens da sua galeria.</p>
				<a href="ge_img.php" class="btn btn-primary">Gerenciar</a>
			  </div>
			</div>
          </div>
          <div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="../img/informacoes2.jpg" alt="Imagem de capa do card">
			  <div class="card-body">
				<h5 class="card-title">Blog</h5>
				<p class="card-text">Adicione, remova e edite novas postagens no seu blog.</p>
				<a href="ge_blog.php" class="btn btn-primary">Gerenciar</a>
			  </div>
			</div>
          </div>
        </div>
    </div>
		<footer class="container-fluid bg-secondary float-left" style = " bottom: 0;
        position: fixed;">
            <div>
                <span class="text-light lead px-3 ">Matheus Alves - Copyright © 2019 - Todos os direitos reservados.</span>
            </div>
		</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body> 
</html>