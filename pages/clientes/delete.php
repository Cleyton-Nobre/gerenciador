<?php
    $valor=explode('/', $_GET['url']);

    $retorno=selectRows('receber WHERE id_cliente='.$valor[2].' and status="1"');

    if($retorno==0){
        if($valor[2]<>'' AND is_numeric($valor[2])){
            update('cliente', 'status= "0"', 'id='.$valor[2]);
            header('Location:'.URL_CLIENTE.'listar');
        }else{
            header('Location:'.URL_CLIENTE.'listar');
        }
    }else{
        $_SESSION['MSG']='<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1 float">Existe contas em nome desse cliente!</span>
                        </div>';
            
        header('Location:'.URL_CLIENTE.'listar');
    }
?>