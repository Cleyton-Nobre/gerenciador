<?php
    require_once 'class/conta.php';
    require_once 'funcoes/escape.php';
    $hoje=date('d/m/Y', strtotime("+1 month"));

    $conta=new conta();//Instanciando novo OBJ

        if(isset($_POST['hidden'])){
            foreach ($_POST as $campos => $value) {//Criando as variavies
                $$campos=Input($value);//escape sql e js
            }
            $conta->adicionar('id_cliente','receber', URL_RECEBER, $nome, $idCliente, $idForma, $periodo, $parcela, $data, $valor); 
        }      
?>
<div class='container mt-4 text-center'>
    <h1>Conta a receber</h1>

    <div class="card card-body mt-4 col-8 mx-auto">
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
                    <option value="diario">Diário</option>
                    <option value="mensal" selected>Mensal</option>
                    <option value="semestral">Semestral</option>
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
                <button class='btn btn-dark text-light' type="submit" name='adicionar'>Adicionar</button>
                <input  type="hidden" name='hidden'>
            </div>
        </form>
    </div>
</div><br>
<script src='<?=URL_BASE;?>js/dataParcela.js' type="text/javascript"></script>