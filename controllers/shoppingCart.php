<?php
    class shoppincart {

        function __construct() {
            if (!isset($_SESSION['nome'])) {
                header("location: index.php?c=m&a=i");
            }
            require_once ("models/produtosModel.php");
        }

        public function addCart( $id ) {
            if (!isset($_SESSION['carrinho'])) { // verifica se existe a session carrinho
                $_SESSION['carrinho'] = array(); // cria uma session caso não exista
            }
            $id = intval($_GET['id']);
            if (!isset ($_SESSION['carrinho'][$id])) {
                $_SESSION['carrinho'][$id] = 1;
            }
            else {
                $_SESSION['carrinho'][$id] += 1;
            }
            header("location: index.php?c=c&a=i");
        }

        public function removeCart( $id ) { //REMOVER CARRINHO 
            $id = intval($_GET['id']); 
            if(isset($_SESSION['carrinho'][$id])){ 
                unset($_SESSION['carrinho'][$id]); 
            } 
            header("location: index.php?c=c&a=sc");
        }

        public function alterCart( $id ) {    //ALTERAR QUANTIDADE 
         
            $qtd = intval($_SESSION['carrinho'][$id]);
            var_dump($_SESSION['carrinho'][$id]);
            if(!empty($_SESSION['carrinho'][$id]) & $qtd > 1){
                $_SESSION['carrinho'][$id] = $qtd - 1;
            }

            else{
                unset($_SESSION['carrinho'][$id]);
            }
            header("location: index.php?c=c&a=sc");
        }        
    }
?>