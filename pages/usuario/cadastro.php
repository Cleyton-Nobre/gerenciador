<div class='my-5 container-fluid mx-auto col-5'>
    <div class='card card-login'>
        <h2 class='p-4 card-header text-center text-light bg-dark'>Cadastre-se</h2>
            <div class='card-body col-10 mx-auto'>
                <form action="" method="post">
                    <div class='form-group text-left'>
                        <label for='nome'>Nome</label>
                        <input type="text" class="form-control" name='nome'>
                    </div>

                    <div class='form-group text-left'>
                        <label for='email'>Email</label>
                        <input type="text" class="form-control" name='email'>
                    </div>
                    
                    <div class='form-group text-left'>
                        <label for="senha">Senha</label>
                        <input type="text" class="form-control" name='senha'>
                    </div>
                    
                    <div class='form-group text-left'>
                        <label for="repitaSenha">Repita Senha</label>
                        <input type="text" class="form-control" name='repitaSenha'>
                    </div>

                    <div class='text-center'>
                        <input class='btn btn-primary text-light' type="submit" value="Criar conta" name='enviar'>
                            <a href="<?=URL_USUARIO;?>/login" class='d-block small mt-2'>Fazer login</a>
                    </div>
                </form>
            </div>
      </div>
   </div>
    <div>
        <a href="login">Fazer login</a>
    </div>
</div>