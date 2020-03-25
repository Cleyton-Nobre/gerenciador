<div class='container'>
    <ul class="nav nav-tabs mt-5">
        <li class="nav-item">
            <a class='nav-link ' href="<?=URL_CLIENTE?>listar">Clientes</a>
        </li>
        <li class="nav-item">
            <a class='nav-link active' href="<?=URL_FORNECEDOR?>listar">Fornecedores</a>
        </li>
    </ul>
    <a class="redondo btn mt-5" href="<?=URL_BASE;?>fornecedor/adicionar">Add Fornecedor</a>
    <h1 class='mt-2 text-center'>Fornecedores</h1>

<?php

        $pessoa=new pessoa();//Instanciando novo OBJ
    
        $retono=selectRows('*', 'fornecedor WHERE id_usuario='.$id.' AND status="1"');
    
        if($retono==1){
            $pessoa->listar('fornecedor', URL_FORNECEDOR);
            }else{
                MsgErro('Você não possui fornecedores', '2');
            }
?>
</div>