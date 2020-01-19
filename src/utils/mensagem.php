<?php
    //Mensagens de retorno
    define('SUCESSO', '<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        <span >Operação realizada com sucesso!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');

    define('ERRO','<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        <span> Não foi possivel concluir operção!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');

                  function estiloMsg($msg){
                    return '<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            <span>'.$msg.'</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>' ;                  
                  }

                  function MsgErro($msg, $img){
                    echo"<div id='notfound'>
                            <div class='notfound'>
                                <div class='notfound-404'>
                                    <img src='../img/fundo/f".$img.".svg' onerror=this.src='img/fundo/f".$img.".svg' width='300'>
                                    <h3 class='msg text-dark' >$msg</h3>
                                </div>
                            </div>
                        </div><br><br><br><br><br><br><br><br><br><br><br>";
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
            
                    function modalDeletePessoa($pessoa, $identi, $url){
                        echo '<div class="modal fade" id="ModalDelete'.$identi.'" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title text-white">Deletar '.$pessoa.':</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                            <p>Tem certeza que deseja excluir esse '.$pessoa.'?</p>
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
                            $v=$pessoa=='cliente'?'receber/':'pagar/';
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
                                                <form action='".URL_BASE.$v."valorRecebido/".$identi."' method='post'>
                                                    <div class='form-group text-left'>
                                                        <label><span class='text-danger'>* </span>Valor pago da parcela:</label><br>
                                                        <input class='form-control' type='text' name='valor' onKeyPress=return(moeda(this,'.',',',event))>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancelar</button>
                                                        <input type='submit' class='btn btn-warning' value='Confirmar'>
                                                        <input type='hidden' name='hidden".$identi."'>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                            }
            
                            function MsgHistorico($msg, $img){
                                echo" <div class='text-center'>
                                         <img src='../img/fundo/f".$img.".svg' onerror=this.src='img/fundo/f".$img.".svg' width='200'>
                                         <h3 class='font text-dark' >$msg</h3>
                                      </div><br>";
                                }
