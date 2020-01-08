<?php
 class form{
    function Nome($nome){
           if(empty($nome)){
               return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float"> Nome é um campo obrigatorio!</span>
                    </div>';
           }else{
               if(is_numeric($nome) || (strlen($nome)<3)){
                return '<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1 float"> Insira um nome válido!</span>
                        </div>';
               }else{
                   return 1;
               }
           }   
   }

   function Email($Email){
           if(empty($Email)){
            return '<div class="mt-4 p-2">
                    <span class="alert alert-danger mt-1 float"> E-mail é um campo obrigatorio!</span>
                </div>';
           }else{
               if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float"> Insira um E-mail válido!</span>
                    </div>';
               }else{
                   return 1;
               }
           }
   }

   function Senha($senha, $senhaRepetida){
          if(empty($senha)){
               return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float"> Senha é um campo obrigatorio!</span>
                    </div>';
          }else{
              if(strlen($senha)<8){
                  return '<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1 float"> Sua senha deve ter no mínimo 8 caracteres!</span>
                        </div>';
              }else{
                  if($senha!=$senhaRepetida){
                       return '<div class="mt-4 p-2">
                                <span class="alert alert-danger mt-1 float"> Suas senhas não são iguais!</span>
                            </div>';
                  }else{
                      return 1;
                  }
              }
          }
   }

   function SenhaLogin($senha){
    if(empty($senha)){
        return '<div class="mt-4 p-2">
                    <span class="alert alert-danger mt-1 float"> Senha é um campo obrigatorio!</span>
                </div>';
    }else{
        if(strlen($senha)<8){
            return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float"> Sua senha deve ter no mínimo 8 caracteres!</span>
                    </div>';
        }else{
                return 1;
            }
        }
    }

         //verificando cpf
    function Cpf($cpf){
        if(empty($cpf)){
            return 1;
            }else{
                if(strlen($cpf)!=11){
                return '<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1 float">Informe um CPF valido!</span>
                        </div>';
                    }else{
                        //Verifica se os cpf tem numeros repetidos
                        if ($cpf == '00000000000' || 
                            $cpf == '11111111111' || 
                            $cpf == '22222222222' || 
                            $cpf == '33333333333' || 
                            $cpf == '44444444444' || 
                            $cpf == '55555555555' || 
                            $cpf == '66666666666' || 
                            $cpf == '77777777777' || 
                            $cpf == '88888888888' || 
                            $cpf == '99999999999') {
                        return '<div class="mt-4 p-2">
                                    <span class="alert alert-danger mt-1 float">Informe um CPF valido!</span>
                                </div>';
                            } else {   
                                //verifica se o cpf obedece a lei matematica
                                    for ($t = 9; $t < 11; $t++) {
                                        for ($d = 0, $c = 0; $c < $t; $c++) {
                                            $d += $cpf{$c} * (($t + 1) - $c);
                                        }
                                        $d = ((10 * $d) % 11) % 10;
                                    
                                    }if ($cpf{$c} != $d) {
                                        return '<div class="mt-4 p-2">
                                                    <span class="alert alert-danger mt-1 float">Informe um CPF valido!</span>
                                                </div>';
                                        }else{
                                        return 1;
                                            }
                            }
                        } 
                    }
        }


//Pagamento
   function Valor($valor){
           if(empty($valor)){
            return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float"> Valor é um campo obrigatorio!</span>
                    </div>';
           }else{
               $valor=str_replace(",","",$valor);
               if($valor<1){
                   return '<div class="mt-4 p-2">
                                <span class="alert alert-danger mt-1 float"> Ensira um Valor valido!</span>
                            </div>';
               }else{
                   return 1;
               }
           }
    }

   function Parcelas($parcelas){
       if(empty($parcelas)){
        return '<div class="mt-4 p-2">
                    <span class="alert alert-danger mt-1 float">Quantidade de parcelas é um campo obrigatorio!</span>
                </div>';
       }else{
           $parcelas=(int)$parcelas;
           if($parcelas<1 || !is_int($parcelas)){
               return '<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1 float">Ensira um valor valido para quantidade de parcelas!</span>
                      </div>';
           }else{
               return 1;
           }
       }
   }

   function somar_datas($tipo){
        switch ($tipo) {
            case 'diario':
                $tipo = ' 1 day';
                break;
            case 'mensal':
                $tipo = ' 1 month';
                break;
            case 'semestral':
                $tipo = ' 6 month';
                break;
            case 'anual':
                $tipo = ' 1 year';
                break;
            }	
            return "+".$tipo;
    }

    function escreverMes($data){
        $data = explode('-', $data);

        switch ($data[1]) {
            case '01':
                $mes = 'Jan. ';
                break;
            case '02':
                $mes = 'Fev. ';
                break;
            case '03':
                $mes = 'Mar. ';
                break;
            case '04':
                $mes = 'Abr. ';
                break;
            case '05':
                $mes = 'Mai. ';
                break;
            case '06':
                $mes = 'Jun. ';
                break;
            case '07':
                $mes = 'Jul. ';
                break;
            case '08':
                $mes = 'Ago. ';
                break;
            case '09':
                $mes = 'Set. ';
                break;
            case '10':
                $mes = 'Out. ';
                break;
            case '11':
                $mes = 'Nov. ';
                break;
            case '12':
                $mes = 'Dez. ';
                break;
            }	
            return $mes.$data[0];
    }

   function Data($data){
       if(empty($data)){
            return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float">Data de vencimento é um campo obrigatorio!</span>
                    </div>';
       }else{
        $data=explode("/", $data);
           if(isset($data[1])){
                $hoje=date('Y-m-d');
                $dat=$data[2]."-".$data[1]."-".$data[0];
                if(checkdate($data[1], $data[0],$data[2])==0 || strtotime($hoje)>strtotime($dat)){
                    return '<div class="mt-4 p-2">
                                <span class="alert alert-danger mt-1 float">Ensira uma data de vencimento válida!</span>
                            </div>';
                }else{
                    return 1;
                }
           }else{
            return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1 float">Ensira uma data de vencimento válida!</span>
                    </div>';
           }
           
       }
   }

    function erro($msg= array()){///esta função serve para mostrar
        //verificando se a erros
        $txt_erro = '';
        $erro     = 0;

    foreach ($msg as $key => $value) { //Criando uma lista de mensagens
        if($value <> 1){
            $erro++;
            $txt_erro .=$value;
        }
    }

    if($erro <> 0){
        $_SESSION['MSG']=$txt_erro;
        return 0;
        exit;
    }else{
        return 1;
    }
    }
}