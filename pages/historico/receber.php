      <div class='container mt-5'>
            <ul class="nav nav-tabs">
                  <li class="nav-item">
                        <a class="nav-link active" href="">Receber</a>
                  </li>
                  <li class="nav-item">
                        <a class='nav-link' href="<?=URL_HISTORICO?>pagar">Pagar</a>
                  </li>
            </ul>
      </div>
   <div class='container mt-5'>
      <h1 >Receber</h1><br>
   
<?php
      $hist=new historico();

      $hist->listar('receber','cliente');
   
?>

</div>

