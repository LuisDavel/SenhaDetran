<?php
	
	include('conexao.php');

	$login = $_POST['nome_login'];
	$senha = $_POST['password_login'];

?>

<?php 
		$queryLogin = "SELECT * FROM cadastro_guiche where nome = '$login' and senha = '$senha'";
		$retornoLogin = mysqli_query($con, $queryLogin);

		if (mysqli_num_rows($retornoLogin) == 1){
			while ($row = mysqli_fetch_array($retornoLogin)){
		       $_SESSION['id'] = $row['id_guiche'];
			   $_SESSION['numero'] = $row['nome'];
			   $_SESSION['nome_completo'] = $row['nome_atendente'];
		    }		
			header("Location:index.php");
		} else {
			
			$queryLogin = "SELECT * FROM login where nome = '$login' and senha = '$senha'";
			$retornoLogin = mysqli_query($con, $queryLogin);

			if (mysqli_num_rows($retornoLogin) == 1){
				while ($row = mysqli_fetch_array($retornoLogin)){
		     		$_SESSION['id'] = $row['id'];
					$_SESSION['nome_completo'] = $row['nome'];
					
					
		  		}		
				header("Location:index.php");
			}else{
				header("Location:login.php?retorno=erro");

			}
		}


?>