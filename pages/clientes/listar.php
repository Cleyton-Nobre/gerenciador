<div class='container mt-4'>
    <a class="btn btn-primary" href="<?=URL_BASE;?>clientes/adicionar">Add cliente</a>
    <h1>Todos clientes</h1>

<?php
    require_once 'class/pessoa.php';

    $pessoa=new pessoa();//Instanciando novo OBJ

    $retono=$pessoa->pessoaExiste('cliente');

    if($retono==1){
        $pessoa->listar('cliente');
    }else{

        echo"<div id='notfound'>
        <div class='notfound'>
            <div class='notfound-404'>
                <h3 class='msg'>Você não possui clientes</h3>
            </div>
        </div>
     </div>";

   }
?>
</div>