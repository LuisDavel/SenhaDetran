<?php
  include('conexao.php');

  if (@$_GET['acao'] == "sair") {
     session_destroy();
  }
  if (@$_SESSION['id'] != "") {
    header("Location:index.php");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css" />
  </head>

<body>
  <form method="post" action="valida-usuario.php"> 
    <h1>Login</h1> 
    <p> 
      <label for="nome_login">Nome usuário</label>
      <input id="nome_login" name="nome_login" required="required" type="text" />
    </p>
     
    <p> 
      <label for="password_login">Senha</label>
      <input id="password_login" name="password_login" required="required" type="password" /> 
    </p>
     
    <p> 
      <input type="submit" value="Login" name="login" class="botao-logar" /> 
    </p>
    
    <?php
       if(@$_GET['retorno'] == 'erro') {
          echo "Usuário ou senha incorretos";
        }
    ?>

    <p class="link">
      Caso de dúvidas, contatar administrador ou setor de TI
    </p>
  </form>

</body>
</html>