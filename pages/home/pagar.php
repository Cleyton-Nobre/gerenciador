<div class='container mt-5'>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class='nav-link ' href="<?=URL_HOME?>receber">Receber</a>
        </li>
        <li class="nav-item">
            <a class='nav-link active' href="<?=URL_HOME?>pagar">Pagar</a>
        </li>
    </ul>
     
      <h1 class='title-on mt-5'>Minhas contas</h1>

    
<?php
    $lista= new listar();
    $pagar=selectRows('*', 'pagar where status="1" AND id_usuario="'.$id.'"');

    if($pagar==1){
        $lista->lista('a.id, a.id_pagamento, a.nome_conta, a.data_parcela, a.status, a.valor, a.quant_parcelas, a.valor_recebido, b.nome ',
                     " pagar a join fornecedor b on a.id_usuario ='$id' and b.id_usuario ='$id' AND a.status='1' AND b.id=a.id_fornecedor order by b.nome", URL_PAGAR, 'Fornecedor');
        }else{
            MsgErro('Adicione contas a pagar', '3');
        }
echo "</div>";