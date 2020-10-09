<?php
    //Iniciar a sessao
    session_start();

    //Verificar se nao há a variável da sessao que identifica o usuário e o nível de acesso
    if(!isset($_SESSION['us_permissao'])){
        
        //Redirecionar para página inicial
        echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
        
        //Finalizar execuçao do script
        exit;
        
    }elseif($_SESSION['us_permissao'] == "Comum"){       
        
        //Redireciona o visitante de volta para a pagina anterior
        echo "<script>alert('Sem autorização para acessar essa página.'); history.go(-1);</script>";
        
        //Finalizar execuçao do script
        exit;
    }
?>