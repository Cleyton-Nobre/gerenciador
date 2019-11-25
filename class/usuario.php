<?php 
    require_once 'funcoes/validacaoForm.php';
    require_once 'DAO/sqls.php';
  
   class usuario{
     public function cadastro($nome, $email, $senha, $repitaSenha){
         $DatHoje=date('Y-m-d H:m:s');
         $user = array();
         $user[0] = Nome($nome);
         $user[1] = Email($email);
         $user[2] = Senha($senha, $repitaSenha);

         $retorno = erro($user);
         
         if($retorno == 1) {
               $senha=md5($senha);
               insert('usuario', 'nome, email, senha, data_cadastro', "'".$nome."','".$email."','".$senha."','".$DatHoje."'");
               header ('Location:'.URL_USUARIO.'cadastro');
         }else{
            header ('Location:'.URL_USUARIO.'cadastro');
         }
      
   }

      public function login($email, $senha){
         global $conexao;
         $user = array();
         $user[0]=Email($email);
         $user[1]=SenhaLogin($senha);

         $senha=md5($senha);
         $sql= "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
         $retorno= mysqli_query($conexao, $sql);
         $linha=mysqli_fetch_row($retorno);
         mysqli_close($conexao);

        $retorno = erro($user);

        if($retorno<> 1){
         header('Location:'.URL_USUARIO.'login');
        }else{
         if($linha==null){
            $_SESSION['MSG']  ='<div class="mt-2 p-2">
                                 <span class="alert alert-danger mt-1 float" >E-mail ou Senha incorreto!</span>
                           </div>';
            header('Location:'.URL_USUARIO.'login');
            }else{
                  $_SESSION['ID_USUARIO']=$linha[0];
                  header('Location:'.URL_BASE);//logado
          }
         }
        }


   public function userExiste($email){
      global $conexao;
      $sql= "SELECT * FROM usuario WHERE email='$email'";
      $retorno= mysqli_query($conexao, $sql);
      $linha=mysqli_fetch_row($retorno);

    if($linha!=null){
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
   
   