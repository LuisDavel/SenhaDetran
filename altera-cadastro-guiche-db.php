<?php 
    include('conexao.php');
?>
<?php 
    $id       = $_POST['id'];
     $nome     = $_POST['nome'];
     $senha    = $_POST['senha'];
     $aten    = $_POST['atendente'];
 
     $sql = "UPDATE cadastro_guiche SET nome = '$nome', senha = '$senha', nome_atendente = '$aten' WHERE id_guiche = '$id'";
			
     $retorno = mysqli_query($con, $sql);
    

    if ($retorno) {
        header('location: cadastro-guiche.php');
    }else{
        echo 'Guiche não foi cadastrado! Erro: ' .mysqli_error($con);
    };


?>