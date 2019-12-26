<?php
    class listar{
        public function lista($atributos, $select, $url, $pessoa){
            require_once 'DAO/sqls.php';
            $array=select($atributos, $select);

                $i=0;
                echo '<div class="col-11 mx-auto mt-4 card">';

                $bg = $pessoa == "cliente" ? "success" : "danger";
 
                echo '<table class="table rounded mt-3">
                            <thead>
                                <tr class="bg-'.$bg.' text-white">
                                    <th scope="col">Nome da conta</th>
                                    <th scope="col">Nome do '.$pessoa.'</th>
                                    <th scope="col">Quant. de parcelas</th>
                                    <th scope="col">Forma de paga.</th>
                                    <th scope="col">Data de venci.</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                        <tbody>';

                $total=0;
            while($aux=mysqli_fetch_assoc($array)){
                $i++;
                $cor = $i % 2==0 ? "secondary" : "light" ;
               $pagamento=select('*','pagamento where id='.$aux['id_pagamento']);
              
               while($j=mysqli_fetch_assoc($pagamento)){
                    $x=$j['tipo'];
               }

               $data=explode("-", $aux['data_parcela']);
               $data=$data[2].'/'.$data[1].'/'.$data[0];
               $total=+$aux['valor'];

            echo '  <tr>
                        <td>'.ucfirst($aux['nome_conta']).'</td>
                        <td>'.ucfirst($aux['nome']).'</td>
                        <td>'.$aux['quant_parcelas'].'</td>
                        <td>'.$x.'</td>
                        <td>'.$data.'</td>
                        <td>R$ '.str_replace(".",",",$aux['valor']).'</td>
                        <td>
                            <a class="text-success mr-2" href="'.$url.'editar/'.$aux['id'].'"><i class="fas fa-check"></i></a>
                            <a class="text-success mr-2" href="'.$url.'editar/'.$aux['id'].'"><i class="fas fa-edit"></i></a>
                            <a class="text-danger" href="'.$url.'delete/'.$aux['id'].'" ><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>';

                    
               
            } 
        echo '</tbody>
            </table>
            <div class="card bg-'.$bg.' col-2 text-white ml-auto mr-sm-5">
                <span class="text-center p-1">R$ '.str_replace(".",",",$total).'</span>
            </div><br>
        </div>';
        }
}
?>