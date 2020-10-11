<?php
    include('conexao.php');

    if ($_SESSION['id'] == "") {
		header("Location:login.php");
	}
?>

<br>

<?php
    $sqlInicia = "SELECT * FROM cliente";
	$retornoInicia = mysqli_query($con, $sqlInicia);
    if($item = mysqli_fetch_array($retornoInicia, MYSQLI_ASSOC)){
        if($item ['valida'] == null){

            $timezone = new DateTimeZone('America/Sao_Paulo');
            $hoje = new DateTime('now', $timezone);
            echo $data = $hoje->format('d/m');
            echo $hora = $hoje->format('H:i');

            $id = $_GET['id'];
            $numero_guiche = $_SESSION['numero'];
            


		    $sql = "SELECT * FROM cliente WHERE id_cliente = '$id'";
		    $retorno = mysqli_query($con, $sql);
            if($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)){
                $nome_cliente = $item ['nome_clientes'];
                $tipo_servico = $item ['tipo_servico'];
            }

            $sql3 = "UPDATE cliente set valida = '1', atendente= '$numero_guiche' where id_cliente = $id";
            $retorno3 = mysqli_query($con, $sql3);

            $id_atendente = $_SESSION['id'];
            $sql1 = "SELECT * FROM cadastro_guiche WHERE id_guiche = '$id_atendente'";
		        $retorno1 = mysqli_query($con, $sql1);
            if($item1 = mysqli_fetch_array($retorno1, MYSQLI_ASSOC)){
                $numero_guiche = $item1 ['nome'];
            }

            $sql2 = "INSERT INTO guiche_cliente VALUES ('$numero_guiche','$nome_cliente', '$data', '$hora', null, '$tipo_servico')";
            $retorno2 = mysqli_query($con, $sql2);

            if ($retorno2) {
                header('location: listar-clientes.php');
            }else{
                echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
            };
        
            echo $nome_cliente;
            ?>
            &nbsp       
            <?php
                    echo $tipo_servico;
            ?> 
            &nbsp

            <?php
               echo $numero_guiche;
            ?>   
            &nbsp

            <?php
               echo $numero_guiche;
            ?>
<?php 
        }

        header('location: listar-clientes.php');    
    }
?>

















