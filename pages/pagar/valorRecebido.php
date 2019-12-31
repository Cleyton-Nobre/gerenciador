<?php
    $valor=explode('/', $_GET['url']);
    if(isset($_POST['hidden'.$valor[2]]) AND $valor[2]<>'' AND is_numeric($valor[2])){
        
            $retorno=select('valor_recebido',$valor[0].' WHERE id="'.$valor[2].'"');
            while($aux=mysqli_fetch_array($retorno)){
                $valorInicial=$aux['valor_recebido'];
            }

            update($valor[0], 'valor_recebido="'.(str_replace(",",".",$_POST['valor'])+$valorInicial).'"', 'id="'.$valor[2].'"');
            header('Location:'.URL_HOME.'home');
        
        }else{
            $_SESSION['MSG']=ERRO;
            header('Location:'.URL_HOME.'home');
        }

?>