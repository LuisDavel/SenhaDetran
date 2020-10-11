<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro Serviço</title>   <!-- DO ADM -->
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
				<form action="cadastro-servico-db.php" method="post" enctype="multipart/form-data" class="">
					<label for="nome">Nome do serviço:</label><br>
					<input class='input_modifica' type="text" name="nome" id="nome" maxlength="20">
					<p>* Cadastro dos serviços a serem prestados.</p>


						<input class='input_botao' type="submit" value="Cadastrar">
				</form>

			</div>
		</section>

		
		<?php
            if(@$_GET['retorno'] == 'erro') {
               echo "<p style='color: Vermelho;'>Cadastro incorreto. </p>";
             }
             if(@$_GET['retorno']=='CadastroSucess'){
               echo "<p style='color: green;'> Cadastrado com Sucesso, basta só logar. </p>";
             } 
        ?>



	</body>
</html>
