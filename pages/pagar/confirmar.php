<?php
  $valor=explode('/', $_GET['url']);

  if($valor[2]<>'' AND is_numeric($valor[2])){
        $retorno=select('quant_parcelas, data_parcela, periodo_conta','pagar  where id="'.$valor[2].'" AND status="1"');

            while($aux=mysqli_fetch_assoc($retorno)){
                $parcelas= $aux['quant_parcelas'];
                $data    = $aux['data_parcela'];
                $periodo  = $aux['periodo_conta'];
            }
            $dat=new form();
            $value=$dat->somar_datas($periodo);
            $data=date('Y-m-d', strtotime($value, strtotime($data)));
        

            if($parcelas>1){
                update('pagar', 'quant_parcelas="'.($parcelas-1).'", valor_recebido="0.00", data_parcela="'.$data.'"', 'id="'.$valor[2].'"');
                $_SESSION['MSG']=SUCESSO;
                header('Location:'.URL_BASE.'home/home');
            }else{
                if($parcelas==1){
                    update('pagar', 'status= "2"', 'id="'.$valor[2].'"');
                    $_SESSION['MSG']=SUCESSO;
                    header('Location:'.URL_BASE.'home/home');
                }else{
                    $_SESSION['MSG']=ERRO;
                    header('Location:'.URL_BASE.'home/home');
                }
                
            }
        }