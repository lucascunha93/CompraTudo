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
        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }

        require_once("views/cliente/header.php");
        require_once("views/main/produtos.php");
        require_once("views/main/footer.php");
    }

    public function shoppingCart() {

        if(!isset($_SESSION['carrinho']) | empty($_SESSION['carrinho'])) {
            require_once("views/cliente/header.php");
            require_once("views/shoppingCart/shoppingCart.php");
            require_once("views/main/footer.php");
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
            require_once("views/cliente/header.php");
            require_once("views/shoppingCart/shoppingCart.php");
            require_once("views/main/footer.php");
        }

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