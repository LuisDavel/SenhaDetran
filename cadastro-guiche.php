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
	    	$sql = "SELECT id_guiche, nome,senha, nome_atendente FROM cadastro_guiche";
	    	//echo $sql;
	    	$retorno = mysqli_query($con, $sql);
	    	if(!$retorno) {
	    		echo mysqli_error($con);
	    	} else {

		?>


	</header>
		<section id="Corpo">	
			<div class = "MoveLado">
				<form action="cadastro-guiche-db.php" method="post" enctype="multipart/form-data" class="">
					<label for="nome">Numero do Guiche:</label><br>
					<input class='input_modifica' type="text" name="nome" id="nome" maxlength="20"><br>
					<label for="nome">Atendente:</label><br>
					<input class='input_modifica' type="text" name="atendente" id="atendente" maxlength="150"><br>
					<label for="nome">Senha do Guiche:</label><br>
					<input class='input_modifica' type="password" name="senha" id="senha" maxlength="8"><br>
					<p>* Cadastro dos Guiches.</p>

					<input class='input_botao' type="submit" value="Cadastrar">
				</form><br><br>
			</div>

			<div >
				<table>
  					<tr>
  						<th>Numero Guiche</th>
  						<th>Senha</th>
  						<th>Atendente</th>
  					</tr>
			<?php 
    			while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
                	
        	?> 
  						<tr>
  						  	<td><?php echo $item ['nome'];  ?> </td>
  						  	<td><?php echo $item ['senha'];  ?></td>
  						  	<td><?php echo $item ['nome_atendente'];  ?></td>
							<td><a href="altera-cadastro-guiche.php?id=<?php echo $item['id_guiche']; ?>" >Alterar</a></td>
							<td><a href="excluir-guiche.php?id=<?php echo $item['id_guiche']; ?>" >Excluir</a></td>
						</tr>
        	<?php
				}
			?>
				
				</table>
			<?php
        		}
    		?>
			
			
			</div>


		</section>
	</body>
</html>
