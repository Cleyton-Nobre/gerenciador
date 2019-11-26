<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Gerencidor de Contas</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link rel="stylesheet" href="<?=URL_BASE;?>css/menu.css">
            <link rel="stylesheet" href="<?=URL_BASE;?>lib/bootstrap/css/bootstrap.css" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE;?>css/erro.css" />
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE;?>css/style.css" />
            
            <script type="text/javascript" src="<?=URL_BASE;?>js/mascara.js"></script>
            <script src="https://kit.fontawesome.com/4107044750.js" crossorigin="anonymous"></script>
        </head>
        <body>
            <header class='container-fluid bg-dark'>
                <nav class='navbar nav'>
                    <ul class='nav text-white mt-2'><!--Logo-->
                        <li class='nav-item'><a class='nav-link text-white' href="<?=URL_HOME;?>home"><i class="fab fa-connectdevelop fa-2x">Finnac</i></a></li>
                    </ul>

                    <ul class='nav text-white mx-auto mt-2 menu'><!--menu de navegação-->
                        <li class='nav-item' ><a class='nav-link text-white border btn btn-dark mr-3' href="<?=URL_HOME;?>home"><i class="fas fa-home"></i> Home</a></li>
                        <li class='nav-item' ><a class='nav-link text-white border btn btn-dark mr-3' href=""><i class="fas fa-folder-plus"></i> Nova conta</a>
                           <div>
                                <a class='nav-link text-white' href="<?=URL_PAGAR;?>adicionar">A Pagar</a>
                                <a class='nav-link text-white' href="<?=URL_RECEBER;?>adicionar">A Receber</a>
                           </div>
                               
                        </li>
                        <li class='nav-item '><a class='nav-link text-white border btn btn-dark mr-3' href=""><i class="fas fa-user-plus"></i> Adicionar</a>
                           <div>
                                <a class='nav-link text-white' href="<?=URL_CLIENTE;?>listar">Cliente</a>
                                <a class='nav-link text-white ' href="<?=URL_FORNECEDOR;?>listar">Fonecedor</a>
                           </div>
                               
                        </li>
                        <li class='nav-item'><a class='nav-link text-white border btn btn-dark' href="<?=URL_RELATORIO;?>periodo"><i class="fas fa-file-alt"></i> Gerar Relatório</a></li>
                    </ul>
                    <ul class='nav text-white mt-2 menu'><!--Configurações da conta-->
                        <li class='nav-item'><a class='nav-link text-white' href="<?=URL_HOME;?>home"><i class="fas fa-cogs"></i></a>
                            <section>
                                <a class='nav-link text-white' href="<?=URL_USUARIO;?>editar">Editar perfil</a>
                                <a class='nav-link text-white' href="<?=URL_USUARIO;?>logout">Logout</a>
                            </section>
                        </li>
                    </ul>
                </nav>
            </header>