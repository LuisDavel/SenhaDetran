<?php
	include('conexao.php');

	if ($_SESSION['id'] == "") {
		header("Location:login.php");
	}
	echo 'Bem vindo '.$_SESSION['nome_completo'];
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro Guiche</title>
		<link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
	</head>
	<body>
	<header id="Cabeçalho">
		<nav id="Navegador">
            <a href="index.php">INICIO</a>
		</nav>

		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM cadastro_guiche WHERE id_guiche = '$id'";
			$retorno = mysqli_query($con, $sql);
			$item = mysqli_fetch_array($retorno, MYSQLI_ASSOC);
		?>
	
	</header>
		<section id="Corpo">	
			<div class = "MoveLado">
				<form action="altera-cadastro-guiche-db.php" method="post" enctype="multipart/form-data" class="">
					<label for="nome">ID do Guiche:</label><br>
					<input class='input_modifica' type="text" name="id" value = "<?php echo $item['id_guiche']; ?>" id="id" maxlength="20" readonly="readonly"><br>
					<label for="nome">Numero do Guiche:</label><br>
					<input class='input_modifica' type="text" name="nome" value = "<?php echo $item['nome']; ?>" id="nome" maxlength="20"><br>
					<label for="nome">Atendente:</label><br>
					<input class='input_modifica' type="text" name="atendente" value = "<?php echo $item['nome_atendente']; ?>" id="atendente" maxlength="150"><br>
					<label for="nome">Senha do Guiche:</label><br>
					<input class='input_modifica' type="text" name="senha"value = "<?php echo $item['senha']; ?>" id="senha" maxlength="8"><br>

					<input class='input_botao' type="submit" value="Alterar">
				</form><br><br>
			</div>

		

		</section>
	</body>
</html>
