<?php
class mainController {

    function __construct() {
        require_once ("models/shoppingCartModel.php");
        require_once ("models/produtosModel.php");
        require_once ("models/clientesModel.php");
    }

    public function pegaProdutosBD() {
        $produto = new produtosModel();
        $produto -> listaProdutos();
        $produtoResultado = $produto -> mostrarResultado();

        $arrayProdutos = array();

        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }
        return $arrayProdutos;
    }

    public function index() {
        
        $arrayProdutos = $this -> pegaProdutosBD();
        
        require_once("views/main/header.php");
        require_once("views/main/home.php");
        require_once("views/main/footer.php");
    }

    public function listaProdutos() {
        $arrayProdutos = $this -> pegaProdutosBD();

        require_once("views/main/header.php");
        require_once("views/main/produtos.php");
        require_once("views/main/footer.php");
    }

    public function shoppingCart() {     
        $cart = new shoppincart();
        $arrayCart = $cart -> mostraListaCarrinho();
        require_once("views/main/header.php");
        require_once("views/shoppingCart/shoppingCart.php");
        require_once("views/main/footer.php");
    }

    public function cadastroCliente() {
        require_once("views/main/header.php");
        require_once("views/main/cadastro/cadastro.php");
        require_once("views/main/footer.php");
    }

    public function cadastrarCliente() {

        $arrayCliente["nome"] = $_POST["nome"];
        $arrayCliente["email"] = $_POST["email"];
        $arrayCliente["senha"] = $_POST["senha"];
        $arrayCliente["endereco"] = $_POST["endereco"];
        $arrayCliente["telefone"] = $_POST["telefone"];
        $cliente = new clientesModel();
        $cliente -> cadastrarCliente($arrayCliente);
        $idCliente = $cliente -> getConsulta();

        header("location: index.php?c=m&a=i");
    }
}
?>