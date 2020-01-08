<?php
    class listar{
        public function lista($atributos, $select, $url, $pessoa){
            require_once 'DAO/sqls.php';
            $array=select($atributos, $select);

                $i=0;
                $total=0;

                echo '<div class="col-11 mx-auto mt-4 card">
                        <table class="table rounded mt-3">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th class="rounded-left">Nome d` conta</th>
                                        <th >Nome do '.$pessoa.'</th>
                                        <th >Quant. d` parcelas</th>
                                        <th >Forma d` paga.</th>
                                        <th >Data d` venci.</th>
                                        <th >Valor</th>
                                        <th class="rounded-right">#</th>
                                    </tr>
                                </thead>
                            <tbody>';

            while($aux=mysqli_fetch_assoc($array)){
                $i++;
                $cor = $i % 2==0 ? "secondary" : "light" ;
                $pagamento=select('*','pagamento where id='.$aux['id_pagamento']);
                
                    while($j=mysqli_fetch_assoc($pagamento)){
                            $x=$j['tipo'];
                    }

                //formatação de data 
               $data=explode("-", $aux['data_parcela']);
               $data=$data[2].'/'.$data[1].'/'.$data[0];
               $total+=$aux['valor']-$aux['valor_recebido'];

                echo '  <tr>
                            <td>'.ucfirst($aux['nome_conta']).'</td>
                            <td>'.ucfirst($aux['nome']).'</td>
                            <td>'.$aux['quant_parcelas'].'</td>
                            <td>'.$x.'</td>
                            <td>'.$data.'</td>
                            <td>R$ '.str_replace(".",",",$aux['valor']-$aux['valor_recebido']).'</td>
                            <td>
                                <a href="" class="text-success mr-2" data-toggle="modal" data-target="#ModalConfirmar'.$pessoa.$aux['id'].'" title="Confirmar pagamento"><i class="fas fa-check"></i></a>
                                <a         class="text-info mr-2" href="'.$url.'editar/'.$aux['id'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                <a href="" class="text-warning mr-2" data-toggle="modal" data-target="#ModalValorPago'.$pessoa.$aux['id'].'" title="Adicionar valor pago"><i class="fas fa-hand-holding-usd"></i></a>
                                <a href="" class="text-danger" data-toggle="modal" data-target="#ModalDelete'.$pessoa.$aux['id'].'" title="Excluir"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>';
                        
                    //Modal
                    modalDelete($pessoa, $aux['id'], $url);
                    modalConfirmar($pessoa, $aux['id'], $url);
                    modalValorPago($pessoa, $aux['id']);
    
            } 
            
        echo '</tbody>
            </table>
            <div class="card bg-dark col-2 text-white ml-auto">
                <span class="text-center p-1">R$ '.str_replace(".",",",$total).'</span>
            </div><br>
        </div><br><br><br><br><br>';
        }
}

//<a class="text-danger" href="'.$url.'delete/'.$aux['id'].'" title="Delete"  data-confirm="Tem certeza de que deseja excluir o item selecionado?"></a>