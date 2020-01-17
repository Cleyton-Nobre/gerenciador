<div class='container mt-4'>
    <a class="redondo btn mt-4" href="<?=URL_CLIENTE;?>adicionar">Add cliente</a>
    <h1 class='mt-2 text-center'>Clientes</h1>

<?php
  
    $pessoa=new pessoa();//Instanciando novo OBJ

    $retono=selectRows('*', 'cliente WHERE id_usuario='.$id.' AND status="1"');

    if($retono==1){
        $pessoa->listar('cliente', URL_CLIENTE);
    }else{

        MsgErro('Você não possui clientes', '2');

   }
?>
</div>