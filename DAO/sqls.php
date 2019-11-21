<?php
    class SQLs{

        public function insert($nomeTable, $valores){
            $sql= 'INSERT INTO $nomeTable values $valores';
            mysqli_query($conexao, $sql);
        }

        public function select($nomeTable, $valores, $onde){
            $sql= 'SELECT $valores * FROM $nomeTable WHERE $onde';
            $retorno= mysqli_query($conexao, $sql);
            return $retorno;
        }

        public function update($nomeTable, $valores, $onde){
            $sql= 'UPDATE $nomeTable SET $valores WHERE $onde';
            mysqli_query($conexao, $sql);
        }
    }
    