<?php
    require_once 'funcoes/validacaoForm.php';
    require_once 'DAO/sqls.php';

    class pessoa{
        function cadastro($nome, $cpf, $url, $table){
            global $id;
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            $DatHoje=date('Y-m-d H:m:s');
            $pessoa=array();
            $pessoa[0]=Nome($nome);
            $pessoa[1]=Cpf($cpf);

            $retorno=erro($pessoa);

            if($retorno == 1){
                insert($table, 'id_usuario, nome, cpf, data_cadastro', "'".$id."','".$nome."','".$cpf."','".$DatHoje."'");
               header ('Location:'.$url.'listar');
            }else{
                header ('Location:'.$url.'listar');
            }
        }

         public function listar($table, $url){
            global $id;
            $retorno= select($table.' WHERE id_usuario='.$id.' AND status="1" ORDER BY nome');

            echo '<div class="col-10 mx-auto">
                    <ul class="list-group mt-4">';
                $i=0;
                
            while($aux= mysqli_fetch_array($retorno)){
                $i++;
                $cor='dark';
                 if($i % 2==0){
                    $cor='light';
                 }
                    echo '
                            <li class="list-group-item list-group-item-'.$cor.' text-dark"><b>'.$i.'°</b>&nbsp;&nbsp;'.$aux['nome'].'
                                <a class="text-danger float-sm-right mr-2" href="'.$url.'delete/'.$aux['id'].'" ><i class="fas fa-trash"></i></a>
                                <a class="text-success float-sm-right mr-2" href="'.$url.'editar/'.$aux['id'].'"><i class="fas fa-edit"></i></a>
                            </li>';
            }
                echo  '</ul>
                </div><br>';

         }

         public function editar($nome, $cpf, $idUrl, $url, $table){
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            $pessoa=array();
            $pessoa[0]=Nome($nome);
            $pessoa[1]=Cpf($cpf);

            $retorno=erro($pessoa);

            if($retorno == 1){
                update($table, "nome='".$nome."', cpf='".$cpf."'", "id='".$idUrl."'");
               header ('Location:'.$url.'listar');
            }else{
                header ('Location:'.$url.'listar');
            }
         }
      
    }
?>
