<?php 
    include('conexao.php');
?>
<?php 
    $nome     = $_POST['nome'];
    $senha    = $_POST['senha'];
    $aten    = $_POST['atendente'];

    $sql = "INSERT INTO cadastro_guiche VALUES ('$nome','$senha', null, '$aten')";
  
    $retorno = mysqli_query($con, $sql);
    
    if ($retorno) {
        header('location: cadastro-guiche.php');
    }else{
        echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
    };

?>