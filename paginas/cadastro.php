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
			  </button>
		</div>
		<script>
			function validar(){
				var senha1 = document.formulario.senha1.value;
				var senha2 = document.formulario.senha2.value;
				var nome = document.formulario.nome.value;
				var cpf = document.formulario.cpf.value;
				var email1 = document.formulario.email.value;
				var email2 = document.formulario.email2.value;
				
				//senha
				if(!(senha1 == senha2)){window.alert("As senhas tem que ser iguais.");
					return false;
					document.getElementByName("senha1").focus();
				}
				else if(senha1 == ""){
					window.alert("O campo senha tem de ser preenchido.");
					return false;
				}
				else if(cpf == ""){
					window.alert("O campo cpf tem de ser preenchido.");
					return false;
				}
				else if(!(email1 == email2)){
					window.alert("Os campos de email tem que ser iguais.");
					return false;
				}
				//nome
				else if(nome == ""){
					window.alert("O campo nome tem de ser preenchido.");
					return false;
				}
				else{
					return true;
				}	
		}
		</script>
		<form method="post" action="insert.php" name="formulario">
		  <div class="form-group">
			<label for="exampleInputEmail1">Nome *</label>
			<input type="nome" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Sobrenome</label>
			<input type="sobrenome" name="sobrenome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">CPF *</label>
			<input type="cpf" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Endereço de Email *</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">Seu email nunca será compartilhado.</small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Email Novamente *</label>
			<input type="email" name="email2"class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Senha *</label>
			<input type="password" name="senha1" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword2">Confirme a sua Senha *</label>
			<input type="password" name="senha2" class="form-control" id="exampleInputPassword2">
		  </div>
		  <?php if(isset($_SESSION['us_permissao'])){
			  if($_SESSION['us_permissao'] == 'administrador'){
					echo "
						  <select class='form-group' name='permissao'>
								<option value='usuario' selected='selected'>Usuario</option>
								<option value='administrador'>Administrador</option>
						  </select>
		  
		  ";}}?>
		  <button type="submit" name="salvar" class="btn btn-primary" onClick ="return validar()">Cadastre-se</button>
		</form>
		<span>Ja tem uma conta?<a href="login.php"> Entre</a></span>
	</div>
</main>
</body>