<?php
    $valor=explode('/', $_GET['url']);
            
        if($valor[2]<>'' AND is_numeric($valor[2])){
            update('receber', 'status= "0"', 'id='.$valor[2].' AND id_usuario='.$id);
            $_SESSION['MSG']=SUCESSO;
            header('Location:'.URL_BASE.'home/receber');
        }else{
            $_SESSION['MSG']=ERRO;
            header('Location:'.URL_BASE.'home/receber');
        }
?>