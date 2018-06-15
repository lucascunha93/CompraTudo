<?php
    class conectarDB {
        var $conectado;

        function abrirConexao(){
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $dbNome = 'compratudo';

            $this -> conectado = new mysqli( $servidor, $usuario, $senha, $dbNome);
            $this -> conectado -> set_charset("utf8");
        }

        function conectouDB(){
            return $this -> conectado;
        }
    }
?>