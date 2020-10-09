<html> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/galeria.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8"/>
<title> Wilma de Carvalho </title> 
</head>  
<body style="background-color: rgba(var(--b3f,250,250,250),1);"> 
<main>
	<div class="container border rounded shadow-lg p-3 mb-5 bg-white" style="width: 670px; position: relative; top: 170px; height: 440px; background-color: white;">
		<div class="col-4" style="position: relative; left: 160px;">
			  <a class="navbar-brand texto-laranja float-left" href="file:///C:/Users/matheus.tcalves/Documents/proj-matheus/index.html" style="color: #EF7022; font-size: 30px;">Wilma de Carvalho</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
		</div>
		<script>
			function validarSenha(){
				senha1 = document.f1.senha1.value
				senha2 = document.f1.senha2.value
			 
				if (senha1 == senha2)
					alert("SENHAS IGUAIS")
				else
					alert("SENHAS DIFERENTES")
			}
		</script>
		<form method="POST" action="valida.php">
		  <div class="form-group">
			<label for="exampleInputEmail1">Endereço de Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">Seu email nunca será compartilhado.</small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input type="password" class="form-control" name="senha" id="exampleInputPassword1">
		  </div>
		  <div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Lembre de mim</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Entrar</button>
		</form>
		<span>Ainda não tem uma conta?<a href="cadastro.php"> Cadastre-se</a></span>
	</div>
</main>
</body>