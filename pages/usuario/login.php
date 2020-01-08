<?php
    if(isset($_POST['hidden'])){

        $user=new usuario();//Instanciando novo OBJ

        foreach ($_POST as $campos => $value) {//Criando as variavies
            $$campos=Input($value);//escape sql e js
        }

        $user->login($email, $senha);
    }
?>

<div class='my-5 container-fluid mx-auto col-5'>
        <div class='card card-login'>
            <h1 class='p-4 card-header text-center text-white bg-dark'>Login</h1>
                <div class='card-body col-10 mx-auto'>

                     <div class='form-group text-left '>
                        <span class="text-danger">* Campos obrigatorios</span>
                    </div> 
                    <form action="" method="post">
                        <div class='form-group text-left'>
                            <label for='email'><span class="text-danger">* </span>Email</label>
                            <input type="email" class="form-control" name='email' placeholder='Digite seu e-mail'>
                        </div>
                        <div class='form-group text-left'>
                            <label for=''><span class="text-danger">* </span>Senha</label>
                            <input type="password" class="form-control" name='senha' placeholder='Digite sua senha'>
                        </div>

                        <div class='text-center'>
                            <input class='btn btn-dark text-white' type="submit" value="Logar" name='enviar'>
                             <a href="<?=URL_USUARIO;?>/cadastro" class='d-block small mt-2'> Criar uma conta</a>
                             <input type="hidden" name="hidden">
                        </div>
                    </form>
                </div>
        </div>
    </div>