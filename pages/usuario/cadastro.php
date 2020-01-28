<?php
    if(isset($_POST['hidden'])){
        $user=new usuario();//Instanciando novo OBJ

        foreach ($_POST as $campos => $value) {//Criando as variavies
            $$campos=Input($value);//escape sql e js
        }
        
        $retorno=$user->userExiste($email);//Verificando se o usuario existe
        
        if($retorno == 0){
            $user->cadastro($nome, $email, $senha, $repitaSenha);
        }
    }
?>
<div class='container mt-5 text-center'>
    <div class="card card-body mt-4 col-md-8 mx-auto">
        <div class="card-header bg-dark text-white">   
            <h1 class='font title-on'>Cadastro</h1>
        </div><br>
        
            <form action="" method="post">

                <div class='form-group text-left '>
                    <span class="text-danger">* Campos obrigatorios</span>
                </div>  

                <div class='form-group text-left'>
                    <label for='nome'><span class="text-danger">* </span>Nome</label>
                    <input type="text" class="form-control" name='nome'>
                </div>

                <div class='form-group text-left'>
                    <label for='email'><span class="text-danger">* </span>Email</label>
                    <input type="email" class="form-control" name='email'>
                </div>
                
                <div class='form-group text-left'>
                    <label for="senha"><span class="text-danger">* </span>Senha</label>
                    <input type="password" class="form-control" name='senha'>
                </div>
                
                <div class='form-group text-left'>
                    <label for="repitaSenha"><span class="text-danger">* </span>Repita Senha</label>
                    <input type="password" class="form-control" name='repitaSenha'>
                </div>

                <div class='text-center'>
                    <input class='btn btn-dark text-white' type="submit" value="Criar conta" name='enviar'>
                        <a href="<?=URL_USUARIO;?>login" class='d-block small mt-2'>Fazer login</a>
                        <input type="hidden" name="hidden">
                </div>
            </form>
        </div>
    </div>
</div>

