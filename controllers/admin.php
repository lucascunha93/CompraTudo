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

    public function adiciona_adm() {
        require_once("views/admin/header.php");
        require_once("views/admin/mod-adm/add-adm.php");
        require_once("views/main/footer.php");
    }
    
    public function adiciona_produto() {
        require_once("views/admin/header.php");
        require_once("views/admin/produtos-adm/add-produto.php");
        require_once("views/main/footer.php");
    }

    public function lista_produtos() {
        $produto = new produtosModel();
        $produto -> listaProdutos();
        $produtoResultado = $produto -> mostrarResultado();

        $arrayProdutos = array();

        while($linha = $produtoResultado -> fetch_assoc()){
            array_push($arrayProdutos,$linha);
        }

        require_once("views/admin/header.php");
        require_once("views/admin/produtos-adm/lista-produtos.php");
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

    public function lista_user( $id ) {
        $user = new adminModel();
        $user -> lista_user( $id );
        $listaResultado = $user -> getConsulta();

        $arrayUsuarios = array();

        if( $arrayUsuario = $listaResultado -> fetch_assoc()) {
            require_once("views/admin/header.php");
            require_once("views/admin/mod-adm/user-cad.php");
            require_once("views/main/footer.php");
        }
    }

    public function lista_produto( $id ) {
        $user = new adminModel();
        $user -> lista_produto( $id );
        $listaResultado = $user -> getConsulta();

        $arrayProduto = array();

        if( $arrayProduto = $listaResultado -> fetch_assoc()) {
            require_once("views/admin/header.php");
            require_once("views/admin/produtos-adm/edit-produto.php");
            require_once("views/main/footer.php");
        }
    }

    public function edit_cad( ) {
        $arrayUsuario["id"] = $_POST["id"];
        $arrayUsuario["nome"] = $_POST["nome"];
        $arrayUsuario["email"] = $_POST["email"];
        $arrayUsuario["senha"] = $_POST["senha"];
        $arrayUsuario["endereco"] = $_POST["endereco"];
        $arrayUsuario["telefone"] = $_POST["telefone"];
        $user = new adminModel();
        $user -> edit_cad( $arrayUsuario );

        header("location: index.php?c=a&a=lus");
    }

    public function edit_produto( ) {
        $arrayUsuario["id"] = $_POST["id"];
        $arrayUsuario["nome"] = $_POST["nome"];
        $arrayUsuario["descricao"] = $_POST["descricao"];
        $arrayUsuario["valor_venda"] = $_POST["valor_venda"];
        $arrayUsuario["custo"] = $_POST["custo"];
        $arrayUsuario["quantidade"] = $_POST["quantidade"];
        $user = new adminModel();
        $user -> edit_cad( $arrayUsuario );

        header("location: index.php?c=a&a=lus");
    }

    public function deleta_cad( $id ) {
        $admin = new adminModel();
        $admin -> rem_cad( $id );

        header("location: index.php?c=a&a=lus");
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

    public function deleta_produto( $id ) {
        $admin = new adminModel();
        $admin -> deleta_produto( $id );

        header("location: index.php?c=a&a=rp");
    }

    public function edita_produto() {
        $arrayProduto["id"] = $_POST["id"];
        $arrayProduto["nome"] = $_POST["nome"];
        $arrayProduto["descricao"] = $_POST["descricao"];
        $arrayProduto["valor_venda"] = $_POST["valor_venda"];
        $arrayProduto["custo"] = $_POST["custo"];
        $arrayProduto["quantidade"] = $_POST["quantidade"];
        $user = new adminModel();
        $user -> edita_produto( $arrayProduto );

        header("location: index.php?c=a&a=rp");
    }
}
?>