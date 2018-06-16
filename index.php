<?php
header('Content-Type: text/html; charset=utf-8');

session_start();

    if(!isset($_GET['c'])){ //Caso não há variavel por parametro, a página será direcionada a home 
        require_once("controllers/main.php");
        $site = new mainController();
        $site -> index();
    }
    else {
        switch ($_REQUEST['c']) {

            case 'm': // controller main
                require_once("controllers/main.php");
                $main = new mainController();

                if (!isset($_GET['a'])) {
                    $main -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'i': $main -> index(); break; // pagina inicial
                        case 'p': $main -> produtos(); break; // pagina lista de produtos
                        case 'cc': $main -> cadastroCliente(); break; // pagina de cadastro de clientes
                        case 'ccl': $main -> cadastrarCliente(); break; // metodo para inserir os dados do cliente no BD
                    }
                }
            break;

            case 'l': // controler login
            require_once('controllers/login.php');
            $user = new userController();

            if (!isset($_GET['a'])) {
                print("Erro");
            }
            else {
                switch ($_REQUEST['a']) {
                    case 'cl': $user -> consultaLoginUser(); break; // metodo logar o usuario
                    case 'off': $user -> sessionOff(); break; // metodo encerrar o login
                }
            }
            break;

            case 'c': // controller cliente
                require_once("controllers/cliente.php");
                $cliente = new clienteController();

                if (!isset($_GET['a'])) {
                    $cliente -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'i': $cliente -> index(); break; // pagina inicial do cliente logado
                        case 'lp': $cliente -> listaProdutos(); break; // pagina de lista de cliente
                        case 'ap': $cod=$_GET['id']; $cliente -> adicionarProduto($cod); break;
                        case 'ep': $cod=$_GET['id']; $cliente -> editarPerfil($cod); break;
                        case 'ape': $cliente -> atualizarPerfil(); break;
                        case 'dc': $cod=$_GET['id']; $cliente -> deletarCliente($cod); break; 
                    }
                }
            break;
            case 'a': // controller admin
                require_once("controllers/admin.php");
                $admin = new adminController();

                if (!isset($_GET['a'])) {
                    $admin -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'i': $admin -> index(); break; // pagina inicial do administrador 
                        case 'ap': $admin -> adiciona_produto(); break; // pagina inicial do cliente logado
                        case 'add': $admin -> add_produto(); break; // pagina inicial do cliente logado
                    }
                }
        }
    }
?>