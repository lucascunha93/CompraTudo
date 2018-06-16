<?php
class clienteController {
    function __construct() {
        if (!isset($_SESSION['nome'])) {
            header("location: index.php?c=m&a=i");
        }
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
        
        $marca = new produtosModel();
        $marca -> listaMarcas();
        $marcaResultado = $marca -> mostrarResultado();

        $arrayProdutos = array();
        $arrayMarcas = array();
        $arrayCart = array();

        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }

        while($linha = $marcaResultado -> fetch_assoc()){
            array_push($arrayMarcas,$linha);
        }

        require_once("views/cliente/header.php");
        require_once("views/cliente/menuItem/menuItem.php");
        require_once("views/main/produtos.php");
        require_once("views/cliente/shoppingCart/shoppingCart.php");
        require_once("views/cliente/footer.php");
    }

    public function adicionarProduto( $id ) {
        $addProd = new produtosModel();
        $addProd -> addCart($id);
        $addResult = $addProd -> mostrarResultado();

        $arrayCart = array();

        while($linha = $addResult -> fetch_assoc()){
            array_push($arrayCart,$linha);
        }

        return $arrayCart;
    }

    public function editarPerfil($id) {
        $cliente = new clientesModel();
        $cliente -> consultarCliente($id);
        $resultado = $cliente -> getConsulta();

        if( $arrayCliente = $resultado -> fetch_assoc()) {
            require_once ("views/cliente/header.php");
            require_once ("views/cliente/editarPerfil/editarPerfil.php");
            require_once ("views/cliente/footer.php");
        }
    }

    public function atualizarPerfil() {

        $arrayCliente["id"] = $_POST["id"];
        $arrayCliente["nome"] = $_POST["nome"];
        $arrayCliente["endereco"] = $_POST["endereco"];
        $arrayCliente["email"] = $_POST["email"];
        $arrayCliente["senha"] = $_POST["senha"];
        $arrayCliente["telefone"] = $_POST["telefone"];
        $cliente = new clientesModel();
        $cliente -> atualizarCliente( $arrayCliente );
        $this -> index();
    }
}
?>