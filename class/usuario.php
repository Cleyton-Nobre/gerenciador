<?php 
   class usuario{
     public function cadastro($nome, $email, $senha, $repitaSenha){
         $form= new form();
         $DatHoje=date('Y-m-d H:m:s');
         $user = array();
         $user[0] = $form->Nome($nome);
         $user[1] = $form->Email($email);
         $user[2] = $form->Senha($senha, $repitaSenha);

         $retorno =$form->erro($user);
         
         if($retorno == 1) {
               $senha=md5($senha);
               insert('usuario', 'nome, email, senha, data_cadastro', "'".$nome."','".$email."','".$senha."','".$DatHoje."'");
               header ('Location:'.URL_USUARIO.'cadastro');
         }else{
            header ('Location:'.URL_USUARIO.'cadastro');
         }
   }

      public function login($email, $senha){
         $user = array();
         $form= new form();
         $user[0]=$form->Email($email);
         $user[1]=$form->SenhaLogin($senha);

         $senha=md5($senha);
         $linha= selectRows('*', 'usuario WHERE email="'.$email.'" AND senha="'.$senha.'"');
         
        $retorno= $form->erro($user);

        if($retorno<> 1){
         header('Location:'.URL_USUARIO.'login');
        }else{
         if($linha==0){
            $_SESSION['MSG']  ='<div class="mt-2 p-2">
                                 <span class="alert alert-danger mt-1 float" >E-mail ou Senha incorreto!</span>
                           </div>';
            header('Location:'.URL_USUARIO.'login');
            }else{
                  $user=select('*', 'usuario WHERE email="'.$email.'" AND senha="'.$senha.'"');
                  while($aux=mysqli_fetch_array($user)){
                     $_SESSION['ID_USUARIO']=$aux['id'];
                  }
                  header('Location:'.URL_BASE);//logado
          }
         }
        }


   public function userExiste($email){
      $retorno=selectRows('*', 'usuario WHERE email="'.$email.'"');
     
    if($retorno==1){
        $_SESSION['MSG']='<div class="mt-2 p-2">
                              <span class="alert alert-danger mt-1 float" >Usuario existente!</span>
                        </div>';
         echo $_SESSION['MSG'];
         header ('Location:'.URL_USUARIO.'cadastro');
         return 1;
     }else{
        return 0;
     }
   }
}
   
   