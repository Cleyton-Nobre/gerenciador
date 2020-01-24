<?php
    class historico{
        function listar($table, $pessoa){
            global $id;
            $retorno=selectRows('*', $table.' where id_usuario="'.$id.'" AND status!="0"');

            if($retorno=='1'){
                $proximoMes=date('Y-m-d', strtotime('+ 1 month', strtotime(date('Y-m-d'))));

                $retorno=select('data_cadastro', 'usuario where id="'.$id.'"');
                while ($aux=mysqli_fetch_array($retorno)) {
                $data = explode(' ', $aux['data_cadastro']);
                }
                
                $dataCadastro=$data[0];
                $j=0;

                while(strtotime($dataCadastro) <=  strtotime($proximoMes)){
                    $form=new form();//Escrever os meses que foram passando dés do cadastro do usuario
                    $j++;

                    echo '<div class="redondo mt-4">'.$form->escreverMes(date('Y-m-d', (strtotime("-". ($j-1). "month", strtotime($proximoMes))))).'</div>';

                        $retorno=select('*', $table.' where id_usuario="'.$id.'" AND status!="0" order by nome_conta');

                        $i=0;
                        $total=0;
                       
                        while ($aux=mysqli_fetch_array($retorno)){//Historico
                                
                            if($aux['periodo_conta']=='mensal'){
                                $MY='month';
                                }else{
                                    $MY='year';
                                }

                            $proximoData=date('Y-m-d', strtotime("- ".($j-1). ' '.$MY, strtotime($proximoMes)));
                           
                            $dataVenci=$aux['data_parcela'];
                            $dataInici=$aux['data_parcela_inicial'];
                          
                            if(strtotime($dataVenci) >  strtotime($proximoData) AND strtotime($dataInici) <  strtotime($proximoData)){
                                $i++;
                                if($i==1){
                                    echo '<table class="table mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Conta</th>
                                                    <th scope="col">'.ucfirst($pessoa).'</th>
                                                    <th scope="col">Pagamento</th>
                                                    <th scope="col">Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                }
                                $retor=select('a.nome, b.tipo', $pessoa.' a join pagamento b on a.id="'.$aux["id_$pessoa"].'" AND a.id_usuario="'.$id.'" AND b.id="'.$aux['id_pagamento'].'"');
                                while ($aux2=mysqli_fetch_assoc($retor)) {
                                    $nome = $aux2['nome'];
                                    $tipo = $aux2['tipo'];
                                    }
                                    $total+=$aux['valor'];
                                echo '<tr>
                                        <th scope="row">'.$i.'</th>
                                        <td>'.ucfirst($aux['nome_conta']).'</td>
                                        <td>'.ucfirst($nome).'</td>
                                        <td>'.ucfirst($tipo).'</td>
                                        <td>R$ '.str_replace(".",",",$aux['valor']).'</td>
                                    </tr>'; 
                            }
                        }

                        if($i==0){
                            MsgHistorico('Esse mês não possui historico','5');
                        }
                            if($total<>0){
                            echo '<tr>
                                    <td scope="row"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <th>R$ '.str_replace(".",",",$total).'</th>
                                    </tr>
                                </tbody>
                            </table>'; 
                        }
                            
                    $dataCadastro= date('Y-m-d', strtotime('+ 1 month', strtotime( $dataCadastro)));//acresentado mais um mês
                }
        }else{
            MsgErro('Você ainda não possui histórico','5');
        }
    }
    }
?>