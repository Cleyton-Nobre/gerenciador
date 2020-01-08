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
    define('URL_HISTORICO',URL_BASE.'historico/');

    //Mensagens de retorno
    define('SUCESSO', '<div class="mt-2 p-2">
                            <span class="alert alert-success mt-2 float-left" >Operação realizada com sucesso!</span>
                        </div>');

    define('ERRO','<div class="mt-2 p-2">
                        <span class="alert alert-danger mt-2 float-left" >Não foi possivel concluir operção!</span>
                  </div>');

                  