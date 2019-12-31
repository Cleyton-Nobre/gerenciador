<?php
      $conta=new conta();//Instanciando novo OBJ
      $valorURL=explode('/', $_GET['url']);

        if(isset($_POST['hidden'])){
            foreach ($_POST as $campos => $value) {//Criando as variavies
                $$campos=Input($value);//escape sql e js
            }
            $conta->editar('id_cliente','receber', URL_RECEBER, $nome, $idCliente, $idForma, $periodo, $parcela, $data, $valor, $valorURL[2]); 
        }      


    echo "<div class='container mt-5 text-center'>
            <h1>Editar conta a receber</h1>";

            //Selecionado todos os dados da conta
            
            if($valorURL[2]<>'' AND is_numeric($valorURL[2])){
                $retono=selectRows('*', 'receber WHERE id="'.$valorURL[2].'" AND status="1"');
        
                if($retono==1){
                    $retorno=select('*', 'receber where id="'.$valorURL[2].'"');
                    
                    while($aux=mysqli_fetch_array($retorno)){
                        $nomeS=$aux['nome_conta'];
                        $idClienteS=$aux['id_cliente'];
                        $idFormaS=$aux['id_pagamento'];
                        $periodoS=$aux['periodo_conta'];
                        $parcelaS=$aux['quant_parcelas'];
                        $dataS=explode("-", $aux['data_parcela']);
                        $dataS=$dataS[2].'/'.$dataS[1].'/'.$dataS[0];
                        $valorS=str_replace(".",",",$aux['valor']);
                    }
                    ///

                    require_once 'pages/receber/formEdit.php';

                    }else{
                        $_SESSION['MSG']=ERRO;
                        header('Location:'.URL_BASE.'home/home');
                    }
                }
               
    echo "</div>"
    ?>