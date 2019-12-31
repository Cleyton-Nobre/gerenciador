<?php
    define('URL_BASE', 'http://localhost/www/gerenciador/');
    define('PATH_PAGES','pages/');

    //Constantes de módulo
    define('URL_PAGAR',URL_BASE.'pagar/');
    define('URL_RECEBER',URL_BASE.'receber/');
    define('URL_FORNECEDOR',URL_BASE.'fornecedor/');
    define('URL_CLIENTE',URL_BASE.'clientes/');
    define('URL_USUARIO',URL_BASE.'usuario/');
    define('URL_HOME',URL_BASE.'home/');
    define('URL_RELATORIO',URL_BASE.'gerar-relatorios/');

    //Mensagens de retorno
    define('SUCESSO', '<div class="mt-2 p-2">
                            <span class="alert alert-success mt-2 float-left" >Operação realizada com sucesso!</span>
                        </div>');

    define('ERRO','<div class="mt-2 p-2">
                        <span class="alert alert-danger mt-2 float-left" >Não foi possivel concluir operção!</span>
                  </div>');


         function MsgErro($msg){
            echo"<div id='notfound'>
                    <div class='notfound'>
                        <div class='notfound-404'>
                            <h3 class='msg'>$msg</h3>
                        </div>
                    </div>
                </div>";
            }

            function modalDelete($pessoa, $identi, $url){
                echo '<div class="modal fade" id="ModalDelete'.$pessoa.$identi.'" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title text-white">Deletar conta:</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <p>Tem certeza que deseja excluir essa conta?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn-danger" href="'.$url.'delete/'.$identi.'">Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }

                function modalConfirmar($pessoa, $identi, $url){
                    $tipo=$pessoa=='cliente'?"recebimento":"pagamento";
                    echo '<div class="modal fade" id="ModalConfirmar'.$pessoa.$identi.'" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                            <div class="modal-dialog modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h5 class="modal-title text-white">Confirmar '.$tipo.':</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="modal-body">
                                        <p>Tem certeza que deseja confirmar o '.$tipo.' desta conta?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn-success" href="'.$url.'confirmar/'.$identi.'">Confirmar</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                    function modalValorPago($pessoa, $identi){
                        $form=new form();
                        $hidden='hidden'.$pessoa.$identi;
                        if(isset($_POST[$hidden])){
            
                            $add = array();
                            $add[0]=$form->Valor($_POST['valor']);
                            $form->erro($add);
                            $table=$pessoa=='cliente'?'receber':'pagar';
                            update($table, 'valor_recebido="'.$_POST['valor'].'"', 'id="'.$identi.'"');
                        }else{
                            $_SESSION['MSG']=$hidden;
                        }

                        echo "<div class='modal fade' id='ModalValorPago".$pessoa.$identi."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header bg-warning'>
                                        <h5 class='modal-title text-white'>Adicionar valor pago :</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                        <div class='modal-body'>
                                            <form action='' method='post'>
                                                <div class='form-group text-left'>
                                                    <label><span class='text-danger'>* </span>Valor pago da parcela:</label><br>
                                                    <input class='form-control' type='text' name='valor' onKeyPress=return(moeda(this,'.',',',event))>
                                                </div>
                                            </form>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                                            <a class='btn btn-warning' href=''>Confirmar</a>
                                            <input  type='hidden' name='hidden".$pessoa.$identi."'>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
