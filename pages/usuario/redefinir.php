    <?php
        if(isset($_POST['hidden'])){
            $redefinir  = new redefinir();
            $redefinir->recuperar($_POST['email']); 
        }
    ?>

    <br>
    <div class='container mt-5 text-center'>
        <div class='card card-body mt-4 col-md-8 mx-auto'>
            <div class="card-header bg-dark text-white">   
                <h1>Redefinir</h1>
            </div><br>
            <div class='form-group text-left '>
                <span class="text-danger">* Campos obrigatorios</span>
            </div> 
            <form action="" method="post">
                <div class='form-group text-left'>
                    <label for='email'><span class="text-danger">* </span>E-mail</label>
                    <input type="email" class="form-control" name='email' placeholder='Digite seu e-mail'>
                </div>
                
                <div class='text-center'>
                    <input class='btn btn-dark text-white mt-3' type="submit" value="Redefinir" name='enviar'>
                        <a href="<?=URL_USUARIO;?>cadastro" class='d-block small mt-2'> Criar uma conta</a>
                        <a href="<?=URL_USUARIO;?>login" class='d-block small'> Login</a>
                        <input type="hidden" name="hidden">
                </div>
            </form>
            </div>
        </div>