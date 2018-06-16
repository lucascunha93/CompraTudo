<?php

    class adminModel {
        public function __construct() {
            require_once("db/logardb.php");
        }

        public function insereProduto( $arrayProduto ) {
            $conectaDb = new conectarDB();
            $conectaDb -> abrirConexao();
            $acessouDb = $conectaDb -> conectouDB();
                
            if ( $arrayProduto['imagem'] != "none" ) {
                $sql = "INSERT INTO produtos (nome, descricao , quantidade, imagem ) 
                        VALUES ('".$arrayProduto['nome']."', '".$arrayProduto['descricao']."',
                        '".$arrayProduto['quantidade']."', '".$arrayProduto['imagem']."');";
                $acessouDb -> query($sql);
                $this -> resultado = $acessouDb;
            }                    
            else{
                print "Não foi possível carregar a imagem.";
            }
        }

        public function addAdmin() {
            
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }
?>