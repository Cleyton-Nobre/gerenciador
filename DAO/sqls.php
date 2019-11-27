<?php
          function insert($nomeTable, $atributos, $valores){
              global $conexao;
              $sql="INSERT INTO $nomeTable($atributos) values ($valores)";
              if(mysqli_query($conexao, $sql)){
                    $_SESSION['MSG']= SUCESSO;
                   }else{
                    $_SESSION['MSG']= ERRO;
                    }
                    mysqli_close($conexao);
              }
                       

        function update($nomeTable, $valores, $onde){
            global $conexao;
                $sql= 'UPDATE $nomeTable SET $valores WHERE $onde';
                if(mysqli_query($conexao, $sql)){
                    $_SESSION['MSG']= SUCESSO;
                     }else{
                        $_SESSION['MSG']= ERRO;
                      }
                      mysqli_close($conexao);
        }
    
    