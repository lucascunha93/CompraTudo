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
                        case 'sc': $main -> shoppingCart(); break; // pagina de carrinho de compras
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
                        case 'lp': $cliente -> listaProdutos(); break; // pagina de lista do cliente
                        case 'ap': $cod=$_GET['id']; $cliente -> adicionarProduto($cod); break;
                        case 'sc': $cliente -> shoppingCart(); break;
                        case 'addsc': $cliente -> addshoppingCart(); break;
                        //case 'ep': $cod=$_GET['id']; $cliente -> editarPerfil($cod); break;
                        //case 'ape': $cliente -> atualizarPerfil(); break;
                        //case 'dc': $cod=$_GET['id']; $cliente -> deletarCliente($cod); break; 
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
                        case 'pa': $admin -> produtos_adm(); break; // pagina de produtos do administrador
                        case 'ap': $admin -> adiciona_produto(); break; // pagina para inserir produto
                        case 'add': $admin -> add_produto(); break; // insere o produto no banco
                        case 'aa': $admin -> adiciona_admin(); break; // pagina para inserir administrador da página
                        case 'adda': $admin -> add_admin(); break; // insere administrador no banco
                    }
                }
            break;
            case 's':
                require_once("controllers/shoppingCart.php");
                $cart = new shoppincart();
                
                if (!isset($_GET['a'])) {
                    $cart -> index();
                }
                else {
                    switch ($_REQUEST['a']) {
                        case 'add': $cod=$_GET['id']; $cart -> addCart($cod); break; // add produto no carrinho
                        case 'rem': $cod=$_GET['id']; $cart -> removeCart($cod); break; // remove produto no carrinho
                        case 'alt': $cod=$_GET['id']; $cart -> alterCart($cod); break; // altera produto no carrinho
                    }
                }
        }
    }
?>