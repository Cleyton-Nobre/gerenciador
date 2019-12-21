<?php
    class conta{
       function selectPagamento(){
           global $conexao;
            $sql="SELECT * FROM pagamento";
            $retorno=mysqli_query($conexao, $sql);

            while($aux=mysqli_fetch_array($retorno)){
               echo '<option value="'.$aux["id"].'">'.$aux['tipo'].'</option>';
            }
       }

       function selectPessoas($table){
        global $id;
         $retorno=select('*', $table.' WHERE id_usuario='.$id.' and status="1" ORDER BY nome');

         while($aux=mysqli_fetch_array($retorno)){
            echo '<option value="'.$aux["id"].'">'.$aux['nome'].'</option>';
         }
    }

       function adicionar($CF, $table ,$url, $nome, $idCF, $idForma, $periodo, $quant, $dataVenci, $valor){
         $form= new valiForm();
         global $id;
         $DatHoje=date('Y-m-d H:m:s');
         $add = array();
         $add[0] = $form->Nome($nome);
         $add[1] = $form->Parcelas($quant);
         $add[2] = $form->Data($dataVenci);
         $add[3] = $form->Valor($valor);
         
         $retorno = erro($add);
         
         if($retorno == 1) {
            $data=explode("/", $dataVenci);
            $dat=$data[2]."-".$data[1]."-".$data[0];
            $valor     = str_replace(",",".",$valor);
               insert($table, 'id_usuario, id_pagamento,'.$CF.', nome_conta, periodo_conta, data_parcela, valor, quant_parcelas, status, data_cadastro', 
                              "'".$id."','".$idForma."','".$idCF."','".$nome."','".$periodo."','".$dat."','".$valor."','".$quant."','1','".$DatHoje."'");
               header ('Location:'.$url.'adicionar');
         }else{
            header ('Location:'.$url.'adicionar');
         }
      
       }
    }