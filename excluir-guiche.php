<?php
	include('conexao.php');
	$id = $_GET['id'];
	$sql = "SELECT * FROM cadastro_guiche WHERE id_guiche = '$id'";
	$retorno = mysqli_query($con, $sql);
	$item = mysqli_fetch_array($retorno, MYSQLI_ASSOC);
    
    if (!$retorno) {
        echo("Nao foi possivel deletar o guichê com o codigo ". $id);
    }else{
        if(empty($item)){
            echo("Nao foi possivel deletar o guichê com o codigo ". $id);
        }else if($item['id_guiche'] == $id){
	        $sql = "DELETE FROM cadastro_guiche WHERE id_guiche = $id";
	        $retorno = mysqli_query($con, $sql);
	        if (!$retorno) {
	            echo("Nao foi possivel deletar o guichê com o codigo ".$id);
	        } else {
                header("location: cadastro-guiche.php");
            }
        }else{
            echo("Nao foi possivel deletar o guichê com o codigo ".$id);
        }
    }
    
    mysqli_close($con);  
?>