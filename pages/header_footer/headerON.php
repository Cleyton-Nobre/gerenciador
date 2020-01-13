<?php
    $retorno=select('*', 'usuario where id='.$id);
    while($aux=mysqli_fetch_array($retorno)){
        $avatar=$aux['avatar'];
    }
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Gerencidor de Contas</title>
            <meta charset='utf-8'>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link rel="stylesheet" href="<?=URL_BASE;?>css/menu.css">
            <link rel="stylesheet" href="<?=URL_BASE;?>lib/bootstrap/css/bootstrap.css" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
            <link href="<?=URL_BASE;?>lib/fw/css/all.css" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE;?>css/erro.css" />
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE;?>css/style.css" />
               
        </head>
        <body>
            <header class='container-fluid bg-dark'>
                <nav class='navbar navbar-expand-lg p-3'>

                    <a class='navbar-brand text-white' href="<?=URL_HOME;?>home"><i class="fab fa-connectdevelop fa-2x">Finnac</i></a></li>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNav" aria-controls="conteudoNav">
                        <i class=" text-white fas fa-<?=$avatar?> fa-2x"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="conteudoNav"><!--menu de navegação-->
                        <ul class="navbar-nav menu mr-auto ml-5 mt-2">
                            <li class="nav-item active">
                                <a class='nav-link text-white mr-3' href="<?=URL_HOME;?>home"><i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#"  role="button" data-toggle="dropdown"><i class="fas fa-folder-plus"></i> Nova conta</a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white' href="<?=URL_PAGAR;?>adicionar">A Pagar</a>
                                    <a class='nav-link text-white' href="<?=URL_RECEBER;?>adicionar">A Receber</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"><i class="fas fa-user-plus"></i> Adicionar</a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white' href="<?=URL_CLIENTE;?>listar">Cliente</a>
                                    <a class='nav-link text-white ' href="<?=URL_FORNECEDOR;?>listar">Fonecedor</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"><i class="fas fa-file-alt"></i> Historico</a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white' href="<?=URL_HISTORICO;?>pagar">A Pagar</a>
                                    <a class='nav-link text-white' href="<?=URL_HISTORICO;?>receber">A Receber</a>
                                </div>
                            </li>
                        </ul>
                            
                        <ul class='nav text-white mt-2 menu'><!--Configurações da conta-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"><i class="fas fa-<?=$avatar;?> fa-2x"></i></a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white' href="<?=URL_USUARIO;?>editar">Editar perfil</a>
                                    <a class='nav-link text-white' href="<?=URL_USUARIO;?>logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    <div>    
                </nav>
            </header>