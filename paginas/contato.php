<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/contato.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/1e19f79ab7.js" crossorigin="anonymous"></script>
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head> 
<body> 
	<header>
		<div id="topo"></div>
	</header>
	<?php 
	require_once("head.html");?>
	<main>
		<div style="height: 250px">
			<div id="texto">
				<h1 class="container text-center">CONTATO</h1>
			</div>
		</div>
		
	<div class="container">
		<div class="container">
		  <div class="row">
			<div class="col-sm-6">
				<?php
			session_start();
			if(isset($_SESSION['mensagem'])){
				echo $_SESSION['mensagem'];
				unset($_SESSION['mensagem']);?><br /><?php
			}
				?>
			  <h2>CONTATO</h2>
					<div style="top: 30px; position: relative; left: -19px;">
					  <form method="post" action="insert_contato.php">
						<div class="form-group">
						  <label class="col-md-3 control-label" for="name">Nome</label>
						  <div class="col-md-9">
							<input id="nome" name="nome" type="text" placeholder="Nome" class="form-control">
						  </div>
						</div>
				
						<!-- Email input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="email">E-mail</label>
						  <div class="col-md-9">
							<input id="email" name="email" type="text" placeholder="Seu email" class="form-control">
						  </div>
						</div>
				
						<!-- Message body -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="message">Mensagem</label>
						  <div class="col-md-9">
							<textarea class="form-control" id="messagem" name="texto" placeholder="Digite aqui sua mensagem..." rows="5"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-md-3 text-right">
							<button type="submit" class="btn btn-lg" style="background-color: #EF7022; color: white;">Enviar</button>
						  </div>
						</div>
					  </form>
					</div>	
			</div>

			<div class="col-sm-6">
			  <h2 style="left: 330px; position: relative; width: 200px;">Entre em Contato</h2>
			  <div style="position: relative; top: 55px; left: 290px; width: 360px;">
				<p>Esclareça qualquer dúvida e nós envie sugestões.</br> Agende uma consulta experimental!</p>
				<a href="https://wa.me/5519988192655?text=Bom%20Dia!%20Gostaria%20de%20agendar%20uma%20consulta."><button type="button" class="btn btn-outline-success"><i class="fab fa-whatsapp-square"></i> Nós envie alguma mensagem! </button></a>
			  </div>
			</div>
		</div>
		</div>
	</div>
</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>