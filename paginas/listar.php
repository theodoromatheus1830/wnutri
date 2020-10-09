<?php
	require_once("teste_conexao.php");
	
	$consulta = "SELECT * FROM dados";
	$result = mysqli_query($conn, $consulta);

	mysqli_close($conn);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Listar</title>
	</head>
	<body>
		<p><a href="teste_cadastrar.php">Cadastrar Usuário</a></p>
		<table width "500" border="1">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
			</tr>
			<?php while($registro = mysqli_fetch_array($result)){?>
			<tr>
				<td><?php echo $registro['id'];?></td>
				<td><?php echo $registro['nome'];?></td>
				<td><?php echo $registro['email'];?></td>
			</tr>
			<?php } ?>
		</table>
	</body>