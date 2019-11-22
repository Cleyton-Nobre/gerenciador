<?php
    function Nome($nome){
           if(empty($nome)){
               return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1" role="alert"> Nome é um campo obrigatorio!</span>
                    </div>';
           }else{
               if(is_numeric($nome) || (strlen($nome)<3)){
                return '<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1" role="alert"> Insira um nome válido!</span>
                        </div>';
               }else{
                   return 1;
               }
           }   
   }

   function Email($Email){
           if(empty($Email)){
            return '<div class="mt-4 p-2">
                    <span class="alert alert-danger mt-1" role="alert"> E-mail é um campo obrigatorio!</span>
                </div>';
           }else{
               if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1" role="alert"> Insira um E-mail válido!</span>
                    </div>';
               }else{
                   return 1;
               }
           }
   }

   function Senha($senha, $senhaRepetida){
          if(empty($senha)){
               return '<div class="mt-4 p-2">
                        <span class="alert alert-danger mt-1" role="alert"> Senha é um campo obrigatorio!</span>
                    </div>';
          }else{
              if(strlen($senha)<8){
                  return '<div class="mt-4 p-2">
                            <span class="alert alert-danger mt-1" role="alert"> Sua senha deve ter no mínimo 8 caracteres!</span>
                        </div>';
              }else{
                  if($senha!=$senhaRepetida){
                       return '<div class="mt-4 p-2">
                                <span class="alert alert-danger mt-1" role="alert"> Suas senhas não são iguais!</span>
                            </div>';
                  }else{
                      return 1;
                  }
              }
          }
   }

   function Valor($valor){
           if(empty($valor)){
               return "<span> VALOR é um campo obrigatorio!</span><br>";
           }else{
               $valor=str_replace(",","",$valor);
               if(!is_numeric($valor)){
                   return "<span> Ensira um VALOR valido!</span><br>";
               }else{
                   return 1;
               }
           }
    }

   function Parcelas($parcelas){
       if(empty($parcelas)){
           return "<span> PARCELAS é um campo obrigatorio!</span><br>";
       }else{
           $p=explode('.',$parcelas);
           $parcelas=(int)$parcelas;
           if($parcelas<1 || !is_int($parcelas) || $p[1]!=""){
               return "<span> Ensira um valor para PARCELAS valido!</span><br>";
           }else{
               return 1;
           }
       }
   }

   function Data($data){
       if(empty($data)){
           return "<span>DATA DE VENCIMENTO é um campo obrigatorio!</span><br>";
       }else{
           $data=explode("/", $data);
           $hoje=date('Y-m-d');
           $dat=$data[2]."-".$data[1]."-".$data[0];
           if(checkdate($data[1], $data[0],$data[2])==0 || strtotime($hoje)>strtotime($dat)){
               return "<span> Ensira uma DATA DE VENCIMEMTO valida!</span><br>";
           }else{
               return 1;
           }
       }
   }

   function SenhaLogin($senha){
       if(empty($senha)){
            return "<span> SENHA é um campo obrigatorio!</span><br>";
       }else{
           if(strlen($senha)<8){
               return "<span>Sua SENHA deve ter no mínimo 8 caracteres!</span><br>" ;
           }else{
                   return 1;
               }
           }
       }
   
   function Periodo($periodo){
       if(empty($periodo)){
           return "<span> PERÍODO é um campo obrigatorio</span>";
       }else {
           $p=explode('.',$periodo);
           $periodo=(int)$periodo;
           if($periodo<1 || !is_int($periodo) || $p[1]!=""){
               return "<span> Ensira um valor valido para o PERIODO!</span><br>";
           }else{
               return 1;
           }
       }
   }
