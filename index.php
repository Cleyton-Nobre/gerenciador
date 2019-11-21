<?php
    session_start();
    require_once 'DAO\conexao.php';
    require_once 'config\config.php';

    //arquivos que o site possui
    $files = array('login', 'cadastro', 'home');

    //Diretórios que o site possui
    $dir_  = array('clientes', 'conta-pagar', 'conta-receber', 'fornecedor', 'gerar-relatorios', 'home', 'homeON', 'homeOFF', 'usuario');
 
    if(!isset($_COOKIE['ID_USUARIO'])){//definição do cabeçalho da página
      include_once 'pages/header_footer/headerOFF.php';
      }else{
        include_once 'pages/header_footer/headerON.php';
      }
   
      if ($_GET){//recuperção da url
        $url = explode('/', $_GET['url']);
           $dir  = $url[0];
           $file = $url[1];

           if(in_array($dir, $dir_) AND isset($file) AND in_array($file, $files)){
              require_once PATH_PAGES.$dir."/". $file .'.php';//Inclução da página
           }else{
            include_once PATH_PAGES.'home/erro.php';
           }
      }else{
        include_once PATH_PAGES.'home/home.php';///pagina inicial
      }

      include_once 'pages/header_footer/footer.php';      