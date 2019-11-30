<?php
    require_once 'DAO/sqls.php';

    $valor=explode('/', $_GET['url']);
    if($valor[2]<>'' AND is_numeric($valor[2])){
        delet('cliente', $valor[2]);
        header('Location:'.URL_CLIENTE.'listar');
    }else{
        header('Location:'.URL_CLIENTE.'listar');
    }
?>