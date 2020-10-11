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

    <?php 
	    $sql = "SELECT id_cliente, nome_clientes, tipo_servico, valida FROM cliente";
	    //echo $sql;
	    $retorno = mysqli_query($con, $sql);
	    if(!$retorno) {
	    	echo mysqli_error($con);
	    } else {

	?>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de senha</title>

</head>
<body>
    ATENDIMENTO* <a href="login.php?acao=sair">sair</a> <br>
    <br>
    <div>
		<table>
  			<tr>
  				<th>Numero Guiche</th>
  				<th>Serviço</th>
  			</tr>
		<?php 
    		while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
				if($item ['valida'] == null){
        ?> 
  					<tr>
  					  	<td><?php echo $item ['nome_clientes'];  ?> </td>
  					  	<td><?php echo $item ['tipo_servico'];  ?></td>
		
                	    <td><a onClick="window.location.reload()" href="chamado-guiche.php?id=<?php echo $item['id_cliente']; ?>" >Chamar</a></td>
					</tr>
		
        <?php
				}
			}
		?>
			<td><input type="button" value="Atualizar" onClick="window.location.reload()"></a></td>
			</table>
		<?php
        	}
    	?>
	</div>
    
</body>
</html>
