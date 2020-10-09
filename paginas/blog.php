<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/blog.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/1e19f79ab7.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Spectral&display=swap" rel="stylesheet">
<meta charset="utf-8"/>
<title> Wilma de Carvalho </title> 
</head> 
<body> 
	<header>
		<div id="topo"></div>
	</header>
	<?php
	include("session_start.php");
	require_once("teste_conexao.php");
	//LIMIT (PRIMEIRO NUMERO DA LISTA), QUANTIDADE QUE EU QUERO MOSTRAR POR PAGINA
	//REALIZAR UM PRIMEIRO SELECT TOTAL, PARA DESCOBRIR O NUMERO DE REGISTROS E DEPOIS DISSO REALIZAR UM SEGUNDO SELECT COM LIMIT
	$consulta1 = "SELECT * FROM blog";
	$result1 = mysqli_query($conn, $consulta1);
	$total_registros = mysqli_num_rows($result1);
	$num_pg = ceil($total_registros / 3);
	// o numero tem de ser substituido pelo numero $_GET['pagina_atual']****************************************
	if(isset($_GET['pagina_atual'])){
		$num = $_GET['pagina_atual'];
	}
	else{
		$num = 1;
	}
	$primeiro = ($num*3)-3;
	//NUMERO TOTAL DE REGISTROS
	$consulta = "SELECT * FROM blog LIMIT $primeiro, 3";
	$result = mysqli_query($conn, $consulta);
	
	mysqli_close($conn);
	require_once("head.html");
?>
	<main>
		<div style="height: 250px">
			<div id="texto">
				<h1 class="container text-center">BLOG <a href="cadastro_blog.php"><?php if(isset($_SESSION['us_permissao'])){if($_SESSION['us_permissao'] == 'administrador'){echo "<i class='fas fa-plus'></i>";}} ?></a></h1>
			</div>
			<?php 
			if(isset($_SESSION['mensagem'])){
				echo $_SESSION['mensagem'];
				unset($_SESSION['mensagem']);
			}
			?>
		</div>
		<div class="card-deck" style="margin: 0;">
		<?php while($registro = mysqli_fetch_array($result)){?>
		  <div class="card">
			<a href="delete_blog.php?IdBlog=<?php echo $registro['IdBlog'];?>"><?php if(isset($_SESSION['us_permissao'])){if($_SESSION['us_permissao'] == 'administrador'){echo "<i class='fas fa-trash' style='position: absolute; color: red;'></i>";}} ?></a>
			<a href="update_blog.php?IdBlog=<?php echo $registro['IdBlog'];?>"><?php if(isset($_SESSION['us_permissao'])){if($_SESSION['us_permissao'] == 'administrador'){echo "<i class='fas fa-edit ml-4' style='position:absolute'></i>";}} ?></a>
			<img class="card-img-top" src="../img/frutas.jpg" alt="Imagem de capa do card">
			<div class="card-body shadow-lg">
			  <h5 class="card-title"><?php echo $registro['titulo_bg'];?></h5>
				<div style="font-family: 'Oswald', sans-serif;">
				 <p class="card-text"><?php echo $registro['texto_bg'];?></p>
				</div>
			</div>
			<div class="card-footer">
			  <small class="text-muted">Atualizados 3 minutos atrás</small>
			</div>
		  </div>
		 <?php } ?>	
		</div>
		<nav class="navbar-expand my-3">   
							<ul class="navbar-nav mr-auto">
								<ul class="pagination mt-1">
									<?php if($num != 1){ $nova = $num-1;echo "
									<li class='page-item'><a class='page-link border-secondary' href='ge_usuarios.php?pagina_atual=$nova'>«</a>
									</li>
									";}?>
											<?php for($i=1;$i<=$num_pg;$i++){ ?>
											<li class="page-item <?php if($num == $i){echo 'active';} ?>" aria-current="page">
												<a class="page-link border-secondary" href="ge_usuarios.php?pagina_atual=<?php echo $i; ?>"><span class="sr-only"></span><?php echo $i; ?></a>
											</li>
											<?php } ?>
									<?php if($num != $num_pg){ $nova2 = $num+1;echo "
									<li class='page-item'><a class='page-link border-secondary' href='ge_usuarios.php?pagina_atual=$nova2'>»</a>
									</li>
									";}?>
								</ul>
							</ul>
						</nav>
	
</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>