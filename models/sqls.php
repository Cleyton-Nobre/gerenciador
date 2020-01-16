<?php
          function insert($nomeTable, $atributos, $valores){
              global $conexao;
              $sql="INSERT INTO $nomeTable($atributos) values ($valores)";
              if(mysqli_query($conexao, $sql)){
                    $_SESSION['MSG']= SUCESSO;
                   }else{
                    $_SESSION['MSG']= $sql;
                    }
              }
                       

        function update($nomeTable, $valores, $onde){
            global $conexao;
                $sql= "UPDATE $nomeTable SET $valores WHERE $onde";
                if(mysqli_query($conexao, $sql)){
                    $_SESSION['MSG']= SUCESSO;
                     }else{
                        $_SESSION['MSG']= ERRO;
                      }
        }


        function selectRows($atributos, $clausula){
            global $conexao;
                $sql= "SELECT $atributos FROM $clausula";
                $result=mysqli_query($conexao, $sql);
                if(mysqli_fetch_row ($result)>0){
                    return 1;
                }else{
                    return 0;
                }
        }

        function select($atributos, $clausula){
            global $conexao;
                $sql= "SELECT $atributos FROM $clausula";
                $result=mysqli_query($conexao, $sql);
                return $result;
        }
    
    