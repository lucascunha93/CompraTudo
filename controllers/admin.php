<?php
class adminController {

    function __construct() {
        if (!isset($_SESSION['nome'])) {
            header("location: index.php?c=m&a=i");
        }
        require_once ("models/adminModel.php");
        require_once ("models/produtosModel.php");
    }
    
    public function index() {
        $produto = new produtosModel();
        $produto -> listaProdutos();
        $produtoResultado = $produto -> mostrarResultado();

        $arrayProdutos = array();

        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }
        require_once("views/admin/header.php");
        require_once("views/main/home.php");
        require_once("views/main/footer.php");
    }

    public function produtos_adm() {
        $produto = new produtosModel();
        $produto -> listaProdutos();
        $produtoResultado = $produto -> mostrarResultado();

        $arrayProdutos = array();

        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }

        require_once("views/admin/header.php");
        require_once("views/main/produtos.php");
        require_once("views/main/footer.php");
    }
    
    public function adiciona_produto() {
        require_once("views/admin/header.php");
        require_once("views/admin/produtos-adm/add-produto.php");
        require_once("views/main/footer.php");
    }

    public function lista_usuarios() {
        $user = new adminModel();
        $user -> lista_usuarios();
        $listaResultado = $user -> getConsulta();

        $arrayUsuarios = array();

        while($linha = $listaResultado -> fetch_assoc()){
            array_push($arrayUsuarios,$linha);
        }
        require_once("views/admin/header.php");
        require_once("views/admin/mod-adm/lista-users.php");
        require_once("views/main/footer.php");
    }

    public function edit_cad( $id ) {
        
    }

    public function delete_cad( $id ) {

    }

    public function add_produto() {
        $arrayProduto["nome"] = $_POST['nome'];
        $arrayProduto["descricao"] = $_POST['descricao'];
        $arrayProduto["valor_venda"] = $_POST['valor_venda'];
        $arrayProduto["custo"] = $_POST['custo'];
        $arrayProduto["quantidade"] = $_POST['quantidade'];
        $arrayProduto["imagem"] = $_FILES['imagem']['tmp_name'];
        $admin = new adminModel();
        $admin -> insereProduto( $arrayProduto );
        header("location: index.php?c=a&a=i");
    }
    
    public function add_Admin(){

        $arrayAdmin["nome"] = $_POST["nome"];
        $arrayAdmin["endereco"] = $_POST["endereco"];
        $arrayAdmin["senha"] = $_POST["senha"];
        $arrayAdmin["telefone"] = $_POST["telefone"];
        $arrayAdmin["email"] = $_POST["email"];
        $admin = new adminModel();
        $admin -> addAdmin($arrayAdmin);
        header("location: index.php?c=a&a=i");
    }

}
?>