<?php
    //Conectar no banco de dados
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $nomeBD="gerenciamento";

    $conectar=mysqli_connect($servidor,$usuario,$senha,$nomeBD);

    if(!$conectar){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>
