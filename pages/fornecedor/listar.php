<div class='container mt-4'>
    <a class="btn btn-primary" href="<?=URL_BASE;?>fornecedor/adicionar">Add Fornecedor</a>
    <h1 class='mt-2 text-center'>Todos Fornecedores</h1>
<?php
        require_once 'class/pessoa.php';

        $pessoa=new pessoa();//Instanciando novo OBJ
    
        $retono=$pessoa->pessoaExiste('fornecedor');
    
        if($retono==1){
            $pessoa->listar('fornecedor', URL_FORNECEDOR);
   }else{
        echo"<div id='notfound'>
        <div class='notfound'>
            <div class='notfound-404'>
                <h3 class='msg'>Você não possui fornecedores</h3>
            </div>
        </div>
     </div>";
   }
?>
</div>