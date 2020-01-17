<div class='container mt-4'>
    <a class="redondo btn mt-4" href="<?=URL_BASE;?>fornecedor/adicionar">Add Fornecedor</a>
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