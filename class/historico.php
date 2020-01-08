<?php
    class historico{
        function listar($table){
            global $id;
            $retorno=selectRows('*', $table.' where id="'.$id.'"');
            if($retorno=='1'){
                $proximoMes=date('Y-m-d', strtotime('+ 1 month', strtotime(date('Y-m-d'))));

                $data=0;
                $retorno=select('data_cadastro', 'usuario where id="'.$id.'"');
                while ($aux=mysqli_fetch_array($retorno)) {
                $data = explode(' ', $aux['data_cadastro']);
                }
                
                $dataConta=$data[0];
                $j=0;

                while(strtotime($dataConta) <=  strtotime($proximoMes)){
                    $form=new form();//Escrever os meses que foram passando dés do cadastro do usuario
                    $j++;

                    echo '   <div class="redondo mt-4">'.$form->escreverMes(date('Y-m-d', (strtotime("- $j month", strtotime($proximoMes))))).'</div>
                                <ul class="list-group list-group-flush ml-5 mt-3">';

                        $retorno=select('*', $table.' where id_usuario="'.$id.'" AND status!="0" order by nome_conta');
                        while ($aux=mysqli_fetch_array($retorno)) {//Historico
                            $i=0;

                            $dataVenci=$aux['data_parcela'];
                            $dataInici=$aux['data_parcela_inicial'];
                          
                            if(strtotime($dataVenci) > strtotime("- ". ($j-1). " month", strtotime($proximoMes)) AND strtotime($dataInici) < strtotime("- $j month", strtotime($proximoMes))){
                                $i++;
                                
                                echo '<li class="list-group-item">'.ucfirst($aux['nome_conta']).'</li>'; 
                    
                            }
                        }

                        echo '</ul>'; 
                   $dataConta= date('Y-m-d', strtotime('+ 1 month', strtotime($dataConta)));
                }
        }else{
            MsgErro('Você ainda não possui histórico','5');
        }
    }
    }
?>