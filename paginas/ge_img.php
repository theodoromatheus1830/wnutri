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
<body> 
	<header>
		<div id="topo" style="width: 100%; background-color: #EF7022; height: 40px;">
			
		</div>
	</header>
	<?php require_once("head.html");?>
	<div style="min-height: calc(100vh - 150px);">
        	<main>
				<div class="container">
					<div class="container">
						<h1 class="display-4">Imagens <a href="file:///C:/Users/matheus.tcalves/Documents/proj-matheus/paginas/cadastro_imagem.html"><i class="fas fa-plus" style="color: black; font-size: 25px"></i></a></h1>						
						<h5 class="px-1"></h5>

						<div class="table-responsive mt-4 mb-3"> 
							<table class="table text-nowrap">
								<thead>
									<tr class="">
										<th class="">Ação</th>
										<th class="">Imagem</th>
										<th class="">Título</th>
										<th class="">Descrição</th>
										<th class="">Tipo</th>
										<th class="">Tamanho</th>
										<th class="">Por</th>
										<th class="">Caminho</th>
									</tr>
								</thead>
								<tbody>       
									<tr class="">
										<td class="">
											<a class="btn btn-sm btn-light border-secondary" style="width: 65px;" href="ga_form.html">Editar</a>
											<a class="btn btn-sm btn-light border-secondary" style="width: 65px;" onclick="return confirm('Deseja apagar?');" href="ga_crud.php">Apagar</a>
										</td>
										<td class="text-center">
											<input type="image" class="btn btn-light p-0 border-secondary" style="width: 55px" src="imagens/layout/sem.jpg">
										</td>
										<td class="pt-3" style="">imagem_titulo</td>
										<td class="pt-3" style="">imagem_descricao</td>
										<td class="pt-3" style="">imagem_tipo</td>
										<td class="pt-3" style="">imagem_tamanho</td>
										<td class="pt-3" style="">usuario_nome</td>
										<td class="pt-3" style="">caminho_abreviado</td>
									</tr>
								</tbody>
							</table>
						</div>
						
							Registros totais: <b>1</b> | Registros na página: <b>1</b>
						
						<nav class="navbar-expand my-3">   
							<ul class="navbar-nav mr-auto">
								<li class="nav-item mr-1 mb-1">
									<a class="btn btn-primary border-secondary botoes-form-dimensoes" href="ga_form.html">Inserir</a>
								</li>
								<ul class="pagination mt-1">
									<li class="page-item">
										<a class="page-link border-secondary" href="ga_tb.html">«</a>
									</li>
											<li class="page-item active" aria-current="page">
												<a class="page-link border-secondary" href="#"><span class="sr-only">(current)</span>1</a>
											</li>
											<li class="page-item">
												<a class="page-link border-secondary" href="ga_tb.html">2</a>
											</li>
									<li class="page-item">
										<a class="page-link border-secondary" href="ga_tb.html">»</a>
									</li>
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