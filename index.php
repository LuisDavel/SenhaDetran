<?php
    include('conexao.php');
    // COLOCAR O GUICHE NO BANCO PRA PUXAR DPS, EM VEZ DO BROWSER
    // CRIAR NO BANCO DO CLIENTE O ATENDTE, E CONFIGURA EM LINHA DE CODIGO
    // ARRUMAR OS LOGINS
    // PRIORIDADE AO ADM
    // FRONT END.
    // UTILITARIOS: 4 MADEIRAS, 2 CORDAS, 2 BANQUINHOS * Pedir orçamento para o Gustavo
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
	    $sql = "SELECT nome_clientes, valida, atendente FROM cliente ";
	    //echo $sql;
	    $retorno = mysqli_query($con, $sql);
	    if(!$retorno) {
	    	echo mysqli_error($con);
	    } else {
	?>
    <link rel="stylesheet" type="text/css" href="CSS/index.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de senha</title>

</head>
<body>
<div class="w3-container">
    <h3> AGUARDE SER CHAMADO* </h3>
    <div>
        <?php 
    		while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
        ?> 
            <br>
        <?php
                echo $item ['nome_clientes']; 
                
                if ($item['valida'] == 1){
               
        ?>      
                <div>
                    <audio src="UH.mp3" autoplay>
                </div>

                <div id="popD">
                    <p class= "gui"> <?php echo $item ['nome_clientes']; ?> </p>
                    <p id="Gui"> Dirija-se ao atendente <?php echo $item ['atendente']; ?> </p>
                </div>
       
        <?php
               }
        ?>   
        <?php
                if($item['valida'] == '1'){             
                    $sql = "DELETE FROM cliente WHERE valida = '1'";
                    $retorno = mysqli_query($con, $sql);
                    
                }           
        ?>    
        <?php
            }
        }
    	?>
    <script>
        window.setTimeout(function(){
            location.reload();
        },5000);
    </script>    
    </div>

    <br>

    <h3>JÁ CHAMADOS </h3>
    <?php
         $sql1 = "SELECT * FROM guiche_cliente";
         //echo $sql;
         $retorno1 = mysqli_query($con, $sql1);
         if(!$retorno1) {
             echo mysqli_error($con);
         } else {
    ?>
    
    <div>
        <?php 
    		while($item1 = mysqli_fetch_array($retorno1, MYSQLI_ASSOC)) {
                echo $item1 ['nome_cliente'];
        ?>
        &nbsp
        <?php       
                echo $item1 ['nome_guixe'];
        ?> 
        <br>
        <br>

        <?php
            }
        }
    	?>
    </div>
    <!-- -------------------------------------------------------------->

    <!-- -------------------------------------------------------------->        
</div>
      
</body>
</html>


<!-- Atualiza -------------------------->


