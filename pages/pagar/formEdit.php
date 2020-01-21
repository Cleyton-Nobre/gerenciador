<br>
<div class="container mt-5 text-center">
<div class="card card-body mt-4 col-lg-8 mx-auto">
    <div class="card-header bg-dark text-white">
            <h1>Editar conta a pagar</h1>
        </div><br>
        <form method='post'>

            <div class='form-group text-left '>
                <span class="text-danger">* Campos obrigatorios</span>
            </div> 

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Nome da conta:</label><br>
                <input type="text" class="form-control" name='nome' value='<?=$nomeS?>'>
            </div>

            <div class='form-group text-left '>
                <label for=''><span class="text-danger">* </span>Nome do fornecedor</label><br>
                <select class="custom-select" name='idFornecedor'>
                <?php
                    $conta->selectPessoasEdit('fornecedor', $idFornecedorS);
                ?>
                </select>
            </div>
            

            <div class='form-group text-left '>
                <label for=''><span class="text-danger">* </span>Forma do pagamento</label><br>
                <select class="custom-select" name='idForma'>
                    <?php
                        $conta->selectPagamentoEdit($idFormaS);
                    ?>
                </select>
            </div>

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Período de pagamento</label><br>
                <select class="custom-select" name="periodo">
                    <option value="mensal"   <?=$periodoS=='mensal'?'selected':''?>>Mensal</option>
                    <option value="anual"    <?=$periodoS=='anual'?'selected':''?>>Anual</option>
                </select>
            </div>

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Quantidade de parcelas</label><br>
                <input type="text" class="form-control" name='parcela' maxlength="4" value='<?=$parcelaS?>'>
            </div>
            
            <div class='form-group text-left '>
                <label for=""> Data de vencimento da próxima parcelas</label><br>
                <input type="text" class="form-control" value='<?=$dataS?>' readonly>
            </div>

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">* </span>Valor médio das parcelas</label><br>
                <input class="form-control" type="text" name='valor' onKeyPress="return(moeda(this,'.',',',event))" value='<?=$valorS?>' >
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-white' type="submit" name='adicionar'>Adicionar</button>
                <input  type="hidden" name='hidden'>
            </div>
        </form>
    </div>
</div><br>