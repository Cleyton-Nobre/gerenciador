<?php
    class listar{
        public function lista($atributos, $select, $url, $pessoa){
           
                $i=0;
                $total=0;

                echo '<div class="col-11 mt-4 card mx-auto " style="overflow-x:auto;">
                        <table class="table mt-3 ">
                            <tr class="bg-dark text-white">
                                <th scope="col" class="rounded-left">Conta</th>
                                <th scope="col">'.$pessoa.'</th>
                                <th scope="col">Parcelas</th>
                                <th scope="col">Pagamento</th>
                                <th scope="col">Vencimento</th>
                                <th scope="col">Valor</th>
                                <th scope="col" class="rounded-right" >###########</th>
                            </tr>';

            $array=select($atributos, $select);
            while($aux=mysqli_fetch_assoc($array)){
                $i++;
                $cor = $i % 2==0 ? "secondary" : "light";
                $atraso = ($aux['data_parcela'] < date('Y-m-d')) ? "<i class='fas fa-exclamation-triangle text-danger' title='Conta pendente'></i>" : "";
               
                $pagamento=select('*','pagamento where id='.$aux['id_pagamento']);
                
                    while($j=mysqli_fetch_assoc($pagamento)){
                            $x=$j['tipo'];
                    }

                //formatação de data 
               $data=explode("-", $aux['data_parcela']);
               $data=$data[2].'/'.$data[1].'/'.$data[0];
               $total+=$aux['valor']-$aux['valor_recebido'];

                echo '  <tr scope="row">
                            <td>'.$atraso.' '.ucfirst($aux['nome_conta']).'</td>
                            <td>'.ucfirst($aux['nome']).'</td>
                            <td>'.$aux['quant_parcelas'].'</td>
                            <td>'.$x.'</td>
                            <td>'.$data.'</td>
                            <td >R$'.str_replace(".",",",$aux['valor']-$aux['valor_recebido']).'</td>
                            <td>
                                <a  href="" class="text-roxo mr-2" data-toggle="modal" data-target="#ModalConfirmar'.$pessoa.$aux['id'].'" title="Confirmar pagamento"><i class="fas fa-check"></i></a>
                                <a class="text-roxo mr-2" href="'.$url.'editar/'.$aux['id'].'" title="Editar"><i class="fas fa-edit"></i></a>
                                <a href="" class="text-roxo mr-2" data-toggle="modal" data-target="#ModalValorPago'.$pessoa.$aux['id'].'" title="Adicionar valor pago"><i class="fas fa-hand-holding-usd"></i></a>
                                <a href="" class="text-roxo" data-toggle="modal" data-target="#ModalDelete'.$pessoa.$aux['id'].'" title="Excluir"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>';
                        
                    //Modal
                    modalDelete($pessoa, $aux['id'], $url);
                    modalConfirmar($pessoa, $aux['id'], $url);
                    modalValorPago($pessoa, $aux['id']);
    
            } 
            
        echo '<tr scope="row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="card">R$'.str_replace(".",",",$total).'</th>
                <td ></td>
            </tr></table><br>
        </div><br><br><br><br><br>';
        }
}