<?php
    class listar{

        public function lista($select, $url){
            require_once 'DAO/sqls.php';
            $array=select($select);

                $i=0;
                echo '<div class="col-11 mx-auto mt-4">';
            while($aux=mysqli_fetch_assoc($array)){
                $i++;
                $cor='light';
                 if($i % 2==0){
                    $cor='secondary';
                 }

                echo '<li class="list-group-item list-group-item-'.$cor.' text-dark">'.$aux['nome'], $aux['data_parcela'], $aux['valor'].'
                        <a class="text-danger float-sm-right mr-2" href="'.$url.'delete/'.$aux['id'].'" ><i class="fas fa-trash"></i></a>
                        <a class="text-success float-sm-right mr-2" href="'.$url.'editar/'.$aux['id'].'"><i class="fas fa-edit"></i></a>
                    </li>';
               
            } 
            echo ' </div>';
        }
  

        
}
?>