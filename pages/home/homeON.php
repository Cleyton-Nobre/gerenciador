<div class='container mt-5'>
    <h1>Minhas contas</h1>

<?php
    $lista= new listar();

    $rPagar=selectRows('*', 'pagar where status="1"');
    $rReceber=selectRows('*', 'receber where status="1"');

    if($rPagar==1 or $rReceber==1){

        echo '<h3 class="ml-5 mt-4 font">A receber</h3>';

        if($rReceber==1){
            $lista->lista('a.id, a.id_pagamento, a.nome_conta, a.data_parcela, a.status, a.valor, a.quant_parcelas, a.valor_recebido, b.nome ',
            " receber a join cliente b on a.id_usuario ='$id' and b.id_usuario ='$id' AND a.status='1' AND b.id=a.id_cliente order by a.data_parcela", URL_RECEBER, 'cliente');
            }else{
                MsgErro('Adicione contas a receber', '3');
            }

        echo '<h3 class="ml-5 mt-5 font">A pagar</h3>';
        if($rPagar==1){
            $lista->lista('a.id, a.id_pagamento, a.nome_conta, a.data_parcela, a.status, a.valor, a.quant_parcelas, a.valor_recebido, b.nome ',
                         " pagar a join fornecedor b on a.id_usuario ='$id' and b.id_usuario ='$id' AND a.status='1' AND b.id=a.id_fornecedor order by a.data_parcela", URL_PAGAR, 'fornecedor');
       
            }else{
                MsgErro('Adicione contas a pagar', '3');
            }
    }else{
        MsgErro('Adicione contas', '3');
    }
    
?>
</div>
