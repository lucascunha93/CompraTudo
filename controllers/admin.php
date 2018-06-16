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
        require_once("views/admin/header.php");
        require_once("views/main/home.php");
        require_once("views/main/footer.php");
    }
    
    public function adiciona_produto() {
        require_once("views/admin/header.php");
        require_once("views/admin/add-produto.php");
        require_once("views/main/footer.php");
    }

    public function add_produto() {
        $arrayProduto["nome"] = $_POST['nome'];
        $arrayProduto["descricao"] = $_POST['descricao'];
        $arrayProduto["quantidade"] = $_POST['quantidade'];
        $arrayProduto["imagem"] = $_FILES['imagem']['tmp_name'];
        $admin = new adminModel();
        $admin -> insereProduto( $arrayProduto );
        header("location: index.php?c=a&a=i");
    }
    
    public function cadastrarAdmin(){

        $arrayUsuario["nome"] = $_POST["nome"];
        $arrayUsuario["endereco"] = $_POST["endereco"];
        $arrayUsuario["senha"] = $_POST["senha"];
        $arrayUsuario["telefone"] = $_POST["telefone"];
        $arrayUsuario["email"] = $_POST["email"];
        $admin = new securityModel();
        $admin -> inserirUsuario($arrayUsuario);
        header("location: index.php?c=a&a=i");
    }

}
?>