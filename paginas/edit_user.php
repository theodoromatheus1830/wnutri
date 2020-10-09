<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/cadastro_img.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head> 
<body style="background-color: #E6E6E6"> 
<main>
	<div class="container border rounded shadow-lg p-3 mb-5 bg-white" style="width: 670px; position: relative; height: 850px; background-color: white;">
		<div class="col-4" style="position: relative; left: 160px;">
			  <a class="navbar-brand texto-laranja float-left" href="index.php" style="color: #EF7022; font-size: 30px;">Wilma de Carvalho</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
		</div>
		<?php 
			session_start();
			require_once('teste_conexao.php');
			require_once("verifica_permissao.php");
			
			$idUsuario = filter_input(INPUT_GET, 'idUsuario',FILTER_SANITIZE_NUMBER_INT);
			
			$sql = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
			$_SESSION['idUsuario'] = $idUsuario;
			$result = mysqli_query($conn, $sql);
			
			$select = mysqli_fetch_array($result);
			
			mysqli_close($conn);
		?>
		<form method="post" action="update.php">
		  <div class="form-group">
			<label for="exampleInputEmail1">Nome</label>
			<input type="nome" name="nome" class="form-control" id="exampleInputEmail1" value="<?php echo $select['nome'];?>" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Sobrenome</label>
			<input type="sobrenome" name="sobrenome" class="form-control" id="exampleInputEmail1" value="<?php echo $select['sobrenome'];?>" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">CPF</label>
			<input type="cpf" name="cpf" class="form-control" id="exampleInputEmail1" value="<?php echo $select['cpf'];?> "aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Endereço de Email</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $select['email'];?>" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">Seu email nunca será compartilhado.</small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input type="password" name="senha" class="form-control" id="exampleInputPassword1" value="<?php echo $select['senha'];?>">
		  </div>
		  <?php

		if($select['permissao']=='usuario'){
			$select_1 = 'selected = selected';
			$select_2 = '';
		}
		else{
			$select_2 = 'selected = selected';
			$select_1 = '';
		}
		  ?>
		  <select class="form-group" name="permissao">
				<option value="usuario" <?php echo $select_1?>>Usuario</option>
				<option value="administrador" <?php echo $select_2?>>Administrador</option>
		  </select>
		  <button type="submit" name="salvar" class="btn btn-primary">Editar</button>
		</form>
		<span>Ja tem uma conta?<a href="file:///C:/Users/matheus.tcalves/Documents/proj-matheus/paginas/login.html"> Entre</a></span>
	</div>
</main>
</body>