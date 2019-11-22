<?php 
    require_once 'funcoes/validacaoForm.php';
    require_once 'DAO/sqls.php';
  
   class usuario{
     public function cadastro($nome, $email, $senha, $repitaSenha){
         $DatHoje=date('Y-m-d H:m:s');
         $rNome=Nome($nome);
         $rEmail=Email($email);
         $rSenha=Senha($senha, $repitaSenha);

         $error     = '';
         $error_txt = '';

         if($rNome <> 1) {
            $error++;
            $error_txt = $rNome;
         }
         if($rEmail <> 1) {
            $error++;
            $error_txt .= $rEmail;
         }
         if($rSenha <> 1) {
            $error++;
            $error_txt .= $rSenha;
         }
         if($error) {
            echo $error_txt;
         } else {
               $senha=md5($senha);
               insert('usuario', 'nome, email, senha, data_cadastro', "'".$nome."','".$email."','".$senha."','".$DatHoje."'");
         }
      }

      function login($email, $senha){
         global $conexao;
         $rEmail=Email($email);
         $rSenha=SenhaLogin($senha);

         $senha=md5($senha);
         $sql= "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
         $retorno= mysqli_query($conexao, $sql);
         $linha=mysqli_fetch_row($retorno);
         mysqli_close($conexao);

         $error     = 0;
         $error_txt = '';

         if($rEmail <> 1) {
            $error++;
            $error_txt .= $rEmail;
         }
         if($rSenha <> 1) {
            $error++;
            $error_txt .= $rSenha;
         }
         if($error != 0){
            echo $error_txt;
         }
         if($linha==null && $error==0){
               $error++;
               $error_txt  ='<div class="mt-2 p-2">
                                    <span class="alert alert-danger mt-2 alert-dismisible fade show" role="alert">E-mail ou Senha incorreto!</span>
                              </div>';

               echo $error_txt;
         }else{
               if($linha!=null){
                 $_SESSION['ID_USUARIO']=$linha[0];
                  header('Location:'.URL_BASE);
                  exit;
                
               }
         
        }

   }
}

   