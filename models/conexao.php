<?php
    //Conectar no banco de dados
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $nomeBD="gerenciamento";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$nomeBD);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>
