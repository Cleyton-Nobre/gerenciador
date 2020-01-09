<br>
<div class='container mt-5 text-center'>
    <div class="card card-body mt-4 col-8 mx-auto">
        <div class="card-header bg-dark text-white">
            <h1>Editar perfil</h1>
        </div><br>
        <form method='post'>

            <div class='form-group text-left '>
                <label for=''>Nome:</label><br>
                <input name='nome' class="form-control" type="text" value='<?=$nome?>'>
            </div>
            
            <div class='form-group text-left '>
                <label for=''>E-mail:</label><br>
                <input class="form-control" type="email" value='<?=$email?>' readonly>
            </div>

            <div class='form-group text-left '>
                <label for="">Senha atual:</label><br>
                <input name='senhaAtual' type="password" class="form-control">
            </div>

            <div class='form-group text-left '>
                <label for="">Nova senha:</label><br>
                <input name='novaSenha' class="form-control" type="password">
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-white' type="submit" name='adicionar'>Salvar</button>
                <input  type="hidden" name='hidden'>
            </div>
        </form>
    </div>
</div><br>