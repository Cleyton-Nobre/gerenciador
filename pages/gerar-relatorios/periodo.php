<div class='container mt-4 text-center'>
    <h1>Periodo</h1>

    <div class="card card-body mt-4 col-8 mx-auto">
        <form method='post'>

            <div class='form-group text-left '>
                <span class="text-danger">* Campos obrigatorios</span>
            </div>  
                     
            <div class="row">
                <div class="col">
                    <div class='form-group text-left '>
                        <label for=""><span class="text-danger">* </span>Data inicial</label><br>
                        <input class="form-control" type="text" onkeypress="mascaraData( this, event )" maxlength="10">
                    </div>
                </div>
                <div class="col">
                    <div class='form-group text-left '>
                        <label for=""><span class="text-danger">* </span>Data final</label><br>
                        <input class="form-control" type="text" onkeypress="mascaraData( this, event )" maxlength="10">
                    </div>
                </div>
            </div>

            <div class='text-center'>
                <button class='btn btn-primary text-light' type="submit" name='adicionar'>Gerar</button>
                <input  type="hidden" name='act' value='act'>
            </div>
        </form>
    </div>
</div><br>