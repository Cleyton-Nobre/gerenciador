<?php
    class perfil{
        function  editar($nome, $senhaAtual, $novaSenha, $avatarP){
            global $id;

            $form= new form();//instanciado obj

            if(!empty($senhaAtual)){
                $retorno=select('senha', 'usuario where id="'.$id.'"');

                while($aux=mysqli_fetch_array($retorno)){
                    $senhaDB=$aux['senha'];
                }
                $pessoa=array();
                $pessoa[0]=$form->Nome($nome);
                $senhaAtual=md5($senhaAtual);
                $pessoa[1]=$form->Senha($senhaAtual, $senhaDB);
                $pessoa[2]=$form->SenhaLogin($novaSenha);

                $retorno=$form->erro($pessoa);

                if($retorno==1){
                    $novaSenha=md5($novaSenha);
                    update("usuario", "nome='".$nome."', senha='".$novaSenha."', avatar='".$avatarP."'", "id='".$id."'");
                }

                header ('Location:'.URL_USUARIO.'editar');

            }else{

                $pessoa=array();
                $pessoa[0]=$form->Nome($nome);

                $retorno=$form->erro($pessoa);

                if($retorno==1){
                    $novaSenha=md5($novaSenha);
                    update("usuario", "nome='".$nome."', avatar='".$avatarP."'", "id='".$id."'");
                }
                header ('Location:'.URL_USUARIO.'editar');
               
         }
        }

        
    }
?>