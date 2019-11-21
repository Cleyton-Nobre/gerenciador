<div class=' my-5 container-fluid mx-auto col-5'>
        <div class='card card-login'>
            <h2 class='p-4 card-header text-center text-light bg-dark'>Login</h2>
                <div class='card-body col-10 mx-auto'>
                    <form action="" method="post">
                        <div class='form-group text-left'>
                            <label for='email'>Email</label>
                            <input type="text" class="form-control" name='email' placeholder='Digite seu e-mail'>
                        </div>
                        <div class='form-group text-left'>
                            <label for='email'>Senha</label>
                            <input type="text" class="form-control" name='senha' placeholder='Digite sua senha'>
                        </div>

                        <div class='text-center'>
                            <input class='btn btn-dark text-light' type="submit" value="Logar" name='enviar'>
                             <a href="<?=URL_USUARIO;?>/cadastro" class='d-block small mt-2'> Criar uma conta</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>