<?php
    $valor=explode('/', $_GET['url']);
            
        if($valor[2]<>'' AND is_numeric($valor[2])){
            update('receber', 'status= "0"', 'id='.$valor[2]);
            $_SESSION['MSG']=SUCESSO;
            header('Location:'.URL_BASE.'home/home');
        }else{
            $_SESSION['MSG']=ERRO;
            header('Location:'.URL_BASE.'home/home');
        }
?>