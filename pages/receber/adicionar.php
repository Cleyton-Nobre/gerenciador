<div class='container mt-4 text-center'>
    <h1>Conta a receber</h1>

    <div class="card card-body mt-4 col-8 mx-auto">
        <form method='post'>
            <div class='form-group text-left '>
                <label for=''>Nome do cliente</label><br>
                <select class="form-control" name='idCliente'>
                </select>
            </div>
            

            <div class='form-group text-left '>
                <label for=''>Forma do pagamento</label><br>
                <select class="form-control" name='idConta'>
                </select>
            </div>

            <div class='form-group text-left '>
                <label for="">Período de pagamento</label><br>
                <select class="form-control" name="idPeriodo" value="">
                    <option value="1">Diário</option>
                    <option value="30" selected>Mensal</option>
                    <option value="182">Semestral</option>
                    <option value="365">Anual</option>
                </select>
            </div>

            <div class='form-group text-left '>
                <label for="">Quantidade de parcelas</label><br>
                <input type="text" class="form-control" aria-label="Quantia">
            </div>
            
                

            <div class='form-group text-left '>
                <label for="">Valor médio das parcelas</label><br>
                <input class="form-control" type="text">
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-light' type="submit" name='adicionar'>Adicionar</button>
                <input  type="hidden" name='act' value='act'>
            </div>
        </form>
    </div>
</div><br>