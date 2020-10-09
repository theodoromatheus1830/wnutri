<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/1e19f79ab7.js" crossorigin="anonymous"></script>
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head> 
<body> 
	<header>
	<script>
		function confirmExclusao() {
		   if (confirm("Tem certeza que deseja fazer logout ?")) {
			  return true;
		   }
		   else{return false;}
		}
		</script>
		<div id="topo">
			<?php
			session_start();
			if(isset($_SESSION['us_permissao'])){
				if($_SESSION['us_permissao'] == 'administrador'){
					?>
					<a href="logout.php" onClick="return confirmExclusao()"><i class="fas fa-sign-out-alt mt-3 mr-3" style="float: right; position: relative; left: -22px; top: -2px;"></i></a>
					<?php
					echo "<span class='float-right m-2'><a href='area_logada.php' class='mr-4' style='color:white;'>Área Logada</a></span>";
				}
				else{ ?>
				<a href="logout.php"><i class="fas fa-sign-out-alt mt-3 mr-3" style="float: right; position: relative; left: -22px; top: -2px;"></i></a>
				<span class='float-right m-2 mr-4' style='color: white;'><?php echo 'Bem vindo, '. $_SESSION['us_nome'].'!';?></span>
				<?php	
				}
			}
			else{
				echo "<span class='float-right m-2'><a href='login.php' class='mr-4' style='color:white;'>Login</a></span>";
			}
			?>
		</div>
	</header>
	<?php
	require_once("head.html");
	?>
	<main style="min-height: calc(100vh - 10px);">	
		<div id="carouselExampleControls" class="container carousel slide" style="width: 100%;" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="../img/menina.png" alt="Primeiro Slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="../img/wilmadecarvalho.jpg" alt="Segundo Slide">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		  </a>
		</div>
		<div style="height: 240px">
			<div id="texto">
				<h1 class="container-fluid text-center" style="font-family: 'Quicksand', sans-serif;">"Uma vida longa e saudavel sempre andará junto de uma boa alimentação...." <p><small>-Wilma de Carvalho</small></p></h1>
				
			</div>
		</div>
				<?php

					require_once("teste_conexao.php");
					
					$consulta = "SELECT titulo_bg,texto_bg FROM blog ORDER BY IdBlog DESC LIMIT 3";
					$result = mysqli_query($conn,$consulta);
					
					mysqli_close($conn);
				?>
            <div class="container my-4">
                <div class="container-fluid">
                    <div class="card-deck">
						<?php 
						while($select = mysqli_fetch_array($result)){?>
                        <div class="card border-secondary">
                            <img src="../img/frutas.jpg" class="card-img-top rounded altura-imagem img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $select['titulo_bg'];?></h5>
                                <p class="card-text">
								<?php $arr = explode(" ",$select['texto_bg']);
									   for($i=0;$i < 15;$i++){
										   echo $arr[$i].' ';
										   if($i==14){echo '....';}
								}?>
									   </p>
                                <a class="btn bg-light border-secondary btn-sm" href="blog.php" role="button">Ler mais...</a>
                            </div>				
                        </div>
						<?php } ?>
					</div>
                </div>
            </div>
    </main>
			<footer class="container-fluid bg-secondary float-left" style="">
            <div>
                <span class="text-light lead px-3 ">Matheus Alves - Copyright © 2019 - Todos os direitos reservados.</span>
            </div>
			</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body> 
</html>


