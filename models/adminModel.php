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
                $sql = "INSERT INTO produtos (nome, descricao, valor_venda, custo, quantidade, imagem ) 
                        VALUES ('".$arrayProduto['nome']."', '".$arrayProduto['descricao']."', 
                        '".$arrayProduto['valor_venda']."', '".$arrayProduto['custo']."',
                        '".$arrayProduto['quantidade']."', '".$arrayProduto['imagem']."');";
                $acessouDb -> query($sql);
                $this -> resultado = $acessouDb;
            }                    
            else{
                print "Não foi possível carregar a imagem.";
            }
        }

        public function addAdmin( $arrayAdmin ) {
            $conectaDb = new conectarDB();
            $conectaDb -> abrirConexao();
            $acessouDb = $conectaDb -> conectouDB();
            $sql = "INSERT INTO usuarios ( nome, email, senha, endereco, telefone, adm ) VALUES 
                ('".$arrayAdmin['nome']."', '".$arrayAdmin['email']."', '".$arrayAdmin['senha']."', 
                '".$arrayAdmin['endereco']."', '".$arrayAdmin['telefone']."', '1');";
            $acessouDb -> query($sql);
            $this -> resultado = $acessouDb;
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }
?>