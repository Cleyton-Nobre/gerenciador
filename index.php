<?php
    session_start();
    require_once 'src/utils/include.php';//incluido todas as class do php 
    
    include_once 'pages/header_footer/head.php';
    if(!isset($_SESSION['ID_USUARIO'])){//definição do cabeçalho da página
      include_once 'pages/header_footer/headerOFF.php';

      $files = array('login', 'cadastro', 'home', 'redefinir');//arquivos que o site possui
      $dir_  = array('home', 'usuario'); //Diretórios que o site possui
      
      }else{
        $id    = $_SESSION['ID_USUARIO'];
        $retorno=select('avatar', 'usuario where id="'.$id.'"');
          while($aux=mysqli_fetch_array($retorno)){
              $avatar=$aux['avatar'];
          }
        include_once 'pages/header_footer/headerON.php';//incluindo o cabeçalho
      
        $files = array('adicionar', 'periodo', 'home', 'listar', 'logout', 'editar', 'delete', 'pagar', 'receber', 'confirmar', 'valorRecebido');//arquivos que o site possui
        $dir_  = array('clientes', 'pagar', 'receber', 'fornecedor', 'historico', 'home', 'usuario');//Diretórios que o site possui
    
      }

      if ($_GET){//recuperção da url
        $url = explode('/', $_GET['url']);
           $dir  = $url[0];
           $file = $url[1];         

           if(in_array($dir, $dir_) AND isset($file) AND in_array($file, $files)){

                if(isset($_SESSION['MSG'])){//este bloco de código serve para mostrar messagem de alguams paginas
                  echo '<div class="float-md-left">'.$_SESSION['MSG'].'</div>';
                  unset($_SESSION['MSG']);}

              require_once PATH_PAGES.$dir."/". $file .'.php';//Inclução da página
              mysqli_close($conexao);//Fechar a conecxão aberta por qualque arquivo
           }else{
            include_once PATH_PAGES.'home/erro.php';
           }
      }else{
        include_once PATH_PAGES.'home/home.php';///pagina inicial
      }
        include_once 'pages/header_footer/footer.php';      
      