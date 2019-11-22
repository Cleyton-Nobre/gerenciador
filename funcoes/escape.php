<?php
        function Input($input){
            global $conexao;
            //sql
            $var = mysqli_escape_string($conexao, $input);

            //js
            $var=htmlspecialchars($var);
            return $var;
        }

?>