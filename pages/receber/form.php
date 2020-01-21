<br>
<div class='container mt-5 text-center'>
    <div class="card card-body mt-4 col-lg-8 mx-auto">
        <div class="card-header bg-dark text-white">   
            <h1 class='font'>Conta a receber</h1>
        </div><br>
        <form method='post'>

            <div class='form-group text-left '>
                <span class="text-danger">* Campos obrigatorios</span>
            </div> 

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Nome da conta:</label><br>
                <input type="text" class="form-control" name='nome'>
            </div>

            <div class='form-group text-left '>
                <label for=''><span class="text-danger">* </span>Nome do cliente</label><br>
                <select class="custom-select" name='idCliente'>
                <?php
                    $conta->selectPessoas('cliente');
                ?>
                </select>
            </div>
            

            <div class='form-group text-left '>
                <label for=''><span class="text-danger">* </span>Forma do pagamento</label><br>
                <select class="custom-select" name='idForma'>
                    <?php
                        $conta->selectPagamento();
                    ?>
                </select>
            </div>

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Período de pagamento</label><br>
                <select class="custom-select" name="periodo" id="periodo">
                    <option value="mensal">Mensal</option>
                    <option value="anual">Anual</option>
                </select>
            </div>

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Quantidade de parcelas</label><br>
                <input type="text" class="form-control" name='parcela' maxlength="4">
            </div>
            
            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Data de vencimento da próxima parcelas</label><br>
                <input type="text" class="form-control" name='data' onkeypress="mascaraData( this, event )" maxlength="10" id='data' value='<?=$hoje?>'>
            </div>

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Valor médio das parcelas</label><br>
                <input class="form-control" type="text" name='valor' onKeyPress="return(moeda(this,'.',',',event))">
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-white' type="submit" name='adicionar'>Adicionar</button>
                <input  type="hidden" name='hidden'>
            </div>
        </form>
    </div>
</div><br>
<script src='<?=URL_BASE;?>js/dataParcela.js' type="text/javascript"></script>