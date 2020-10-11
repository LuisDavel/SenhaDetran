<?php 
    include('conexao.php');
?>
<?php 
    $nome     = $_POST['nome'];
    $servico    = $_POST['servico'];
    $sql = "INSERT INTO cliente VALUES ('$nome','$servico', null, null,null)";

    $retorno = mysqli_query($con, $sql);
    

    if ($retorno) {
        header('location: cadastro-cliente.php');
    }else{
        echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
    };


?>