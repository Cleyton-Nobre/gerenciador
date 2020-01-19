<?php
    class redefinir{
        function recuperar($email){
           $form= new form();
           $msg=$form->Email($email);

           if($msg==1){
                $retorno=selectRows('email','usuario where email="'.$email.'"');

                if($retorno==1){
                    $novaSenha=substr(md5(md5(date("s:m:H"))), 0, 12);//criptografa a senha
                    $hash=md5($novaSenha);

                    update('usuario','senha="'.$hash.'"','email="'.$email.'"');

                    $aquivo=file(URL_BASE.'lib/bootstrap/css/bootstrap.css');

                    $html=" <style>$arquivo</style><div class='container mt-5 text-center'>
                                    <div class='card card-body mt-4 col-md-8 mx-auto'>
                                        <div class='card-header bg-dark text-white'>   
                                            <h1>Redefinir senha</h1>
                                        </div>
                                        <p>Olá $email</p>
                                        <p>Após você logar em sua conta, por favor atualize sua senha para uma nova!</p>
                                        <p>Sua nova senha é: <b>$novaSenha<b></p><br>
                                        <p>Para mais em formação entre em contato com o nosso suporte:<b>suport.finnac@outlook.com<b></p>
                                    </div>
                                </div>";
                              
                        //Codigos de enviar email
                        $from = new SendGrid\Email(null, "suport.finnac@outlook.com");
                        $subject = "Recuperação de senha";
                        $to = new SendGrid\Email(null, $email);
                        $content = new SendGrid\Content("text/html", $html);
                        $mail = new SendGrid\Mail($from, $subject, $to, $content);
                        
                        //Necessário inserir a chave
                        $apiKey = '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';
                        $sg = new \SendGrid($apiKey);

                        $response = $sg->client->mail()->send()->post($mail);

                        $_SESSION['MSG']=SUCESSO;
                }else{
                     $_SESSION['MSG']=ERRO;
                }
                   
        }else{
            $_SESSION['MSG']=$msg;        
        }
        header('Location:'.URL_USUARIO.'redefinir');       
    }
}