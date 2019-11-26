<div class='container mt-4 text-center'>
    <h1>Adicionar cliente</h1>

    <div class="card card-body mt-4 col-8 mx-auto">
        <form method="post">

            <div class='form-group text-left '>
                <span class="text-danger">* Campos obrigatorios</span>
            </div>  

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">*</span> Nome: </label><br>
                <input class="form-control" type="text" name="name" maxlength="32" autofocus><br>
            </div>          
            
            <div class='form-group text-left'>
                <label for=""><span class="text-danger">*</span> Sobrenome: </label><br>
                <input class="form-control" type="text" name="sobrenome" maxlength="32"><br>
            </div>

            <div class='form-group text-left'>
                <label for="">CPF:</label><br>
                <input class="form-control cpf-mask" type="text" name="cpf" maxlength="14" onkeydown="javascrip: fMasc(this, Cpf);"><br>
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-light' type="submit" name='adicionar'>Adicionar</button>
                <input  type="hidden" name='act' value='act'>
            </div>
        </form>
    </div> 
</div><br>
