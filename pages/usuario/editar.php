<?php
    if(isset($_POST['hidden'])){
        foreach ($_POST as $campo => $value) {
            $$campo = $value;
        }
        $perfil=new perfil();
        $perfil->editar($nome, $senhaAtual, $novaSenha);
    }

    $retorno=select("*", 'usuario where id="'.$id.'"');
            
    while($aux=mysqli_fetch_array($retorno)){
        $email=$aux['email'];
        $nome=$aux['nome'];
    }

    //Incluir pagina
    require_once 'pages/usuario/formEdit.php';

