<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Finnac</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="<?=URL_BASE?>lib/bootstrap/css/bootstrap.css" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
            <link href="<?=URL_BASE?>lib/fw/css/all.css" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE?>css/erro.css" />
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE?>css/style.css" />    
        </head>

        <body>
            <div class='container-fluid bg-dark'>
                <nav class='navbar navbar-expand-lg p-3'>

                    <a class='navbar-brand text-white' href="<?=URL_HOME?>home"><i class="fab fa-connectdevelop fa-2x">Finnac</i></a></li>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNav">
                        <i class=" text-white fas fa-dice-d20 fa-2x"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="conteudoNav"><!--menu de navegação-->
                        <ul class="navbar-nav menu mr-auto ml-5 mt-2">
                            <li class="nav-item">
                                <a class='nav-link text-white mr-3 border-bottom' href="<?=URL_HOME?>home"><i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white mr-3 border-bottom" href="#"  role="button" data-toggle="dropdown"><i class="fas fa-folder-plus"></i> Nova conta</a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white border-bottom' href="<?=URL_PAGAR?>adicionar">Pagar</a>
                                    <a class='nav-link text-white' href="<?=URL_RECEBER?>adicionar">Receber</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white mr-3 border-bottom" href="#" role="button" data-toggle="dropdown"><i class="fas fa-user-plus"></i> Adicionar</a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white border-bottom' href="<?=URL_CLIENTE?>listar">Cliente</a>
                                    <a class='nav-link text-white ' href="<?=URL_FORNECEDOR?>listar">Fonecedor</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white border-bottom mr-3" href="#" role="button" data-toggle="dropdown"><i class="fas fa-file-alt"></i> Historico</a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white border-bottom' href="<?=URL_HISTORICO?>pagar">A Pagar</a>
                                    <a class='nav-link text-white' href="<?=URL_HISTORICO?>receber">A Receber</a>
                                </div>
                            </li>
                        </ul>
                            
                        <ul class='nav text-white mt-2 menu mr-5'><!--Configurações da conta-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"><i class="fas fa-<?=$avatar;?> fa-2x"></i></a>
                                <div class="dropdown-menu">
                                    <a class='nav-link text-white border-bottom' href="<?=URL_USUARIO?>editar">Editar perfil</a>
                                    <a class='nav-link text-white' href="<?=URL_USUARIO?>logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>    
                </nav>
            </div>