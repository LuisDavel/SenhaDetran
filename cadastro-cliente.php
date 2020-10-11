<?php 
    include('conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php 
			$sql = "SELECT tipo FROM tipo_servicos";
			//echo $sql;
			$retorno = mysqli_query($con, $sql);
			if(!$retorno) {
				echo mysqli_error($con);
			} else {
		?>
		
		<title>Cadastro Cliente</title>
		<link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
	</head>
	<body>
	<header id="Cabeçalho">
		<nav id="Navegador">
            <a href="index.php">INICIO</a>
		</nav>
	</header>
		<section id="Corpo">	
			<div class = "MoveLado">
				<form action="cadastro-cliente-db.php" method="post" enctype="multipart/form-data" class="">
					<label for="nome">Nome Completo:</label><br>
					<input class='input_modifica' type="text" name="nome" id="nome" maxlength="20">

					<select name="servico" id="servico">
						<?php 
							while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
						?>
							<option value="<?php echo $item['tipo']; ?>"><?php echo $item['tipo']; ?></option>
						<?php 
							}
						?>
					</select>
					<?php 
						}
					?>	
						<input class='input_botao' type="submit" value="Cadastrar">
				</form>
			</div>
		</section>
	</body>
</html>
