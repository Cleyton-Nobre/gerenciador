<div class='container mt-5'>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class='nav-link active' href="<?=URL_RECEBER?>adicionar">Receber</a>
        </li>
        <li class="nav-item">
            <a class='nav-link' href="<?=URL_PAGAR?>adicionar">Pagar</a>
        </li>
    </ul>
</div>
<?php
    $hoje=date('d/m/Y', strtotime("+1 month"));

    $conta=new conta();//Instanciando novo OBJ

        if(isset($_POST['hidden'])){
            foreach ($_POST as $campos => $value) {//Criando as variavies
                $$campos=Input($value);//escape sql e js
            }
            $conta->adicionar('id_cliente','receber', URL_RECEBER, $nome, $idCliente, $idForma, $periodo, $parcela, $data, $valor); 
        }      

            $retono=selectRows('*', 'cliente WHERE id_usuario='.$id.' AND status="1"');
        
            if($retono==1){
                require_once 'pages/receber/form.php';
    
            }else{
                MsgErro('Adicione clientes', '4');
                echo '<div class="text-center"><a class="redondo" href="'.URL_CLIENTE.'adicionar">Add clientes</a></div>';
                
            }
    echo "</div>"
    ?>

    