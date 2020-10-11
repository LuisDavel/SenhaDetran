<?php 
    include('conexao.php');
?>
<?php 

    $nome   = $_POST['nome'];
   
    $sql = "INSERT INTO tipo_servicos VALUES ('$nome', null)";

    $retorno = mysqli_query($con, $sql);
    
    if ($retorno) {
        header('location: cadastro-servico.php');
    }else{
        echo 'Cadastro não foi cadastrado! Erro: ' .mysqli_error($con);
    };

?>