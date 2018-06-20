<?php
    class shoppincart {

        function __construct() {
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
            $qtd = intval($_SESSION['carrinho'][$id]);
            if(!empty($_SESSION['carrinho'][$id]) & $qtd > 1){
                $_SESSION['carrinho'][$id] = $qtd - 1;
            }

            else{
                unset($_SESSION['carrinho'][$id]);
            }
            header("location: index.php?c=c&a=sc");
        }

        public function mostraListaCarrinho() {

            if(!isset($_SESSION['carrinho']) | empty($_SESSION['carrinho'])) {
                return false;
            }
            else {
                $cart = $_SESSION['carrinho'];
                $addProd = new produtosModel();
                $addProd -> pegaCart(implode(',', array_keys($cart)));
                $addResult = $addProd -> mostrarResultado();
                $total=0;
    
                foreach($addResult as $result) {   
                    $arrayCart[] = array(
                        'id' => $result['id'],
                        'imagem' => $result['imagem'],
                        'nome' => $result['nome'],
                        'descricao' => $result['descricao'],
                        'valor_venda' => $result['valor_venda'],
                        'qtd' => $cart[$result['id']],
                        'subtotal' => $cart[$result['id']] * $result['valor_venda'],
                        'total' => $total + ($cart[$result['id']] * $result['valor_venda']),
                    );
                    $total += $total + ($cart[$result['id']] * $result['valor_venda']);
                }
                return $arrayCart;
            }
        }    
    }
?>