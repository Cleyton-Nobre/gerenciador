<div class='container mt-4 text-center'>
    <h1>Editar perfil</h1>

    <div class="card card-body mt-4 col-8 mx-auto">
        <form method='post'>

            <div class='form-group text-left '>
                <label for=''>Nome:</label><br>
                <input class="form-control" type="text">
            </div>
            
            <div class='form-group text-left '>
                <label for=''>E-mail:</label><br>
                <input class="form-control" type="email">
            </div>

            <div class='form-group text-left '>
                <label for="">Senha:</label><br>
                <input type="password" class="form-control">
            </div>

            <div class='form-group text-left '>
                <label for="">Nova senha:</label><br>
                <input class="form-control" type="password">
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-light' type="submit" name='adicionar'>Salvar</button>
                <input  type="hidden" name='act' value='act'>
            </div>
        </form>
    </div>
</div><br>