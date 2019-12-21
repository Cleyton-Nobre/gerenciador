<?php
     if(isset($_POST['hidden'])){
       
        $pessoa=new pessoa();//Instanciando novo OBJ

        foreach ($_POST as $campos => $value) {//Criando as variavies
            $$campos=Input($value);//escape sql e js
        }
        
            $pessoa->cadastro($nome, $cpf, URL_CLIENTE, 'cliente');
    }
?>

<div class='container mt-4 text-center'>
    <h1>Adicionar cliente</h1>

    <div class="card card-body mt-4 col-8 mx-auto">
        <form method="post">

            <div class='form-group text-left '>
                <span class="text-danger">* Campos obrigatorios</span>
            </div>  

            <div class='form-group text-left '>
                <label for=""><span class="text-danger">*</span> Nome/Razão social: </label><br>
                <input class="form-control" type="text" name="nome" maxlength="32" autofocus><br>
            </div>          
            
            <div class='form-group text-left'>
                <label for="">CPF:</label><br>
                <input class="form-control cpf-mask" type="text" name="cpf" maxlength="14" onkeydown="javascrip: fMasc(this, Cpf);"><br>
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-light' type="submit" name='adicionar'>Adicionar</button>
                <input  type="hidden" name='hidden'>
            </div>
        </form>
    </div> 
</div><br>
