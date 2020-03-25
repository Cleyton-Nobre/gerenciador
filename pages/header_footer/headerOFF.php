<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Finnac</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="keywords" content="finnac, contas, gerenciamento, dinheiro, organização, pagar, receber">
            <meta name="description" content="Finnac tem por misão oferecer para seus usuario uma forma de orgazar sua contas">

            <link rel="shortcut icon" type="image/x-icon" href="<?=URL_BASE?>img/icons/ico.ico">

            <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
            <link rel="stylesheet" href="<?=URL_BASE?>lib/bootstrap/css/bootstrap.css" type="text/css">
            <link href="<?=URL_BASE?>lib/fw/css/all.css" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE?>css/style.css" />   
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE?>css/erro.css" />
            <link type="text/css" rel="stylesheet" href="<?=URL_BASE?>css/responsivo.css" />
        </head>    
        <body>
            <header class='container-fluid bg-dark'>
            <nav class='navbar navbar-expand-lg p-3'>

                <a class='navbar-brand text-white' href="<?=URL_HOME;?>home"><i class="fab fa-connectdevelop fa-2x">Finnac</i></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class=" text-white fas fa-bars fa-2x"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto menu ml-5 text-white mt-2">
                        <li class="nav-item ">
                            <a class='nav-link text-white mr-3 border-bottom' href="<?=URL_HOME;?>home"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class='nav-link text-white mr-3 border-bottom' href="<?=URL_USUARIO;?>cadastro"><i class="fas fa-user-plus"></i> Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link text-white mr-3 border-bottom' href="<?=URL_USUARIO;?>login"><i class="fas fa-user-check"></i> Login</a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
            </header>

            