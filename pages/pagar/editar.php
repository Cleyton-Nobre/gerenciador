<?php
      $conta=new conta();//Instanciando novo OBJ
      $valorURL=explode('/', $_GET['url']);

        if(isset($_POST['hidden'])){
            foreach ($_POST as $campos => $value) {//Criando as variavies
                $$campos=Input($value);//escape sql e js
            }
            $conta->editar('id_fornecedor','pagar', URL_PAGAR, $nome, $idFornecedor, $idForma, $periodo, $parcela, $valor, $valorURL[2]); 
        }      

            //Selecionado todos os dados da conta
            if($valorURL[2]<>'' AND is_numeric($valorURL[2])){
                $retono=selectRows('*', 'pagar WHERE id="'.$valorURL[2].'" AND status="1"');
        
                if($retono==1){
                    $retorno=select('*', 'pagar where id="'.$valorURL[2].'"');
                    
                    while($aux=mysqli_fetch_array($retorno)){
                        $nomeS=$aux['nome_conta'];
                        $idFornecedorS=$aux['id_fornecedor'];
                        $idFormaS=$aux['id_pagamento'];
                        $periodoS=$aux['periodo_conta'];
                        $parcelaS=$aux['quant_parcelas'];
                        $dataS=explode("-", $aux['data_parcela']);
                        $dataS=$dataS[2].'/'.$dataS[1].'/'.$dataS[0];
                        $valorS=str_replace(".",",",$aux['valor']);
                    }

                    //Incluir pagina
                    require_once 'pages/pagar/formEdit.php';

                    }else{
                        $_SESSION['MSG']=ERRO;
                        header('Location:'.URL_BASE.'home/home');
                    }
                }
               
    echo "</div>"
    ?>