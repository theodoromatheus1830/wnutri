<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/1e19f79ab7.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head>
<?php
	include("session_start.php");
	require_once("teste_conexao.php");
	//LIMIT (PRIMEIRO NUMERO DA LISTA), QUANTIDADE QUE EU QUERO MOSTRAR POR PAGINA
	//REALIZAR UM PRIMEIRO SELECT TOTAL, PARA DESCOBRIR O NUMERO DE REGISTROS E DEPOIS DISSO REALIZAR UM SEGUNDO SELECT COM LIMIT
	$consulta1 = "SELECT * FROM usuarios";
	$result1 = mysqli_query($conn, $consulta1);
	$total_registros = mysqli_num_rows($result1);
	$registros_por_pagina = 10;
	$num_pg = ceil($total_registros / $registros_por_pagina);
	// o numero tem de ser substituido pelo numero $_GET['pagina_atual']****************************************
	if(isset($_GET['pagina_atual'])){
		$num = $_GET['pagina_atual'];
	}
	else{
		$num = 1;
	}
	$primeiro = ($num*$registros_por_pagina)-$registros_por_pagina;
	//NUMERO TOTAL DE REGISTROS
	$consulta = "SELECT * FROM usuarios LIMIT $primeiro, $registros_por_pagina";
	$result = mysqli_query($conn, $consulta);
	
	mysqli_close($conn);
	require_once("head.html");
?>
	<div style="min-height: calc(100vh - 150px);">
        	<main>
				<div class="container">
					<div class="container">
						<h1 class="display-4">Usuarios<a href="cadastro.php"><i class="fas fa-plus" style="color: black; font-size: 25px"></i></a></h1>						
						<h5 class="px-1"></h5>
		<?php
			if(isset($_SESSION['mensagem'])){
				echo $_SESSION['mensagem'];
				unset($_SESSION['mensagem']);?><br /><?php
			}
		?>
						<div class="table-responsive mt-4 mb-3"> 
							<table class="table text-nowrap">
								<thead>
									<tr class="">
										<th class="">Ação</th>
										<th class="">Nome</th>
										<th class="">Sobrenome</th>
										<th class="">Tipo</th>
										<th class="">Email</th>
										<th class="">CPF</th>
										<th class="">Senha</th>
									</tr>
								</thead>
								<tbody>
									<?php while($registro = mysqli_fetch_array($result)){?>
									<tr class="">
										<td class="">
											<a class="btn btn-sm btn-light border-secondary" style="width: 65px;" href="edit_user.php?idUsuario=<?php echo $registro['idUsuario'];?>">Editar</a>
											<a class="btn btn-sm btn-light border-secondary" style="width: 65px;" onclick="return confirm('Deseja apagar?');" href="delete.php?idUsuario=<?php echo $registro['idUsuario'];?>">Apagar</a>
										</td>
										<td class="pt-3" style=""><?php echo $registro['nome'];?></td>
										<td class="pt-3" style=""><?php echo $registro['sobrenome'];?></td>
										<td class="pt-3" style=""><?php echo $registro['permissao'];?></td>
										<td class="pt-3" style=""><?php echo $registro['email'];?></td>
										<td class="pt-3" style=""><?php echo $registro['cpf'];?></td>
										<td class="pt-3" style=""><?php echo $registro['senha'];?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
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
					</div>
				</div>
			</main>
        </div>
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