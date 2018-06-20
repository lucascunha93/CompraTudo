<?php
class clienteController {
    function __construct() {
        if (!isset($_SESSION['nome'])) {
            header("location: index.php?c=m&a=i");
        }
        require_once ("models/shoppingCartModel.php");
        require_once ("models/clientesModel.php");
        require_once ("models/produtosModel.php");
    }

    public function index(){
        $produto = new produtosModel();
        $produto -> listaProdutos();
        $produtoResultado = $produto -> mostrarResultado();

        $arrayProdutos = array();

        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }

        require_once("views/cliente/header.php");
        require_once("views/main/home.php");
        require_once("views/main/footer.php");
    }

    public function listaProdutos(){
        $produto = new produtosModel();
        $produto -> listaProdutos();
        $produtoResultado = $produto -> mostrarResultado();
        
        $arrayProdutos = array();
        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }

        require_once("views/cliente/header.php");
        require_once("views/main/produtos.php");
        require_once("views/main/footer.php");
    }

    public function shoppingCart() {
        if (!isset($_SESSION['idUser'])) {
            header("location: index.php?c=m&a=sc");
        }
        else{    
        $cart = new shoppincart();
        $arrayCart = $cart -> mostraListaCarrinho();
        require_once("views/cliente/header.php");
        require_once("views/shoppingCart/shoppingCart.php");
        require_once("views/main/footer.php");
        }
    }

    public function removeItemCart( $id){
        $cart = new shoppincart();
        $cart -> removeCart( $id );
        header("location: index.php?c=c&a=scart");
    }

    public function addItemCart( $id){
        if (!isset($_SESSION['idUser'])) {
            header("location: index.php?c=m&a=cc");
        }
        else{
        $cart = new shoppincart();
        $cart -> addCart( $id );
        header("location: index.php?c=c&a=lp");
        }
    }
}
?>