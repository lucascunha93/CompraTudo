<?php

    class adminModel {
        public function __construct() {
            require_once("db/logardb.php");
        }

        public function lista_usuarios() {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = 'SELECT * FROM usuarios';
            $this -> resultado = $conn -> query($sql);
        }

        public function lista_user( $cod ) {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = 'SELECT * FROM usuarios WHERE id = "'.$cod.'"';
            $this -> resultado = $conn -> query($sql);
        }

        public function insereProduto( $arrayProduto ) {
            $conectaDb = new conectarDB();
            $conectaDb -> abrirConexao();
            $acessouDb = $conectaDb -> conectouDB();

            $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
            $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
            $diretorio = "C:/wamp/www/CompraTudo/assets/img/produtos/"; //define o diretorio para onde enviaremos o arquivo
            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
                
            $sql = "INSERT INTO produtos (nome, descricao, valor_venda, custo, quantidade, imagem ) 
                    VALUES ('".$arrayProduto['nome']."', '".$arrayProduto['descricao']."', 
                    '".$arrayProduto['valor_venda']."', '".$arrayProduto['custo']."',
                    '".$arrayProduto['quantidade']."', '".$novo_nome."');";
            $acessouDb -> query($sql);
            $this -> resultado = $acessouDb;
        }                    

        public function lista_produto( $id ) {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = 'SELECT * FROM produtos WHERE id = "'.$id.'"';
            $this -> resultado = $conn -> query($sql);
        }

        public function addAdmin( $arrayAdmin ) {
            $conectaDb = new conectarDB();
            $conectaDb -> abrirConexao();
            $acessouDb = $conectaDb -> conectouDB();
            $sql = "INSERT INTO usuarios ( nome, email, senha, endereco, telefone, adm ) VALUES 
                ('".$arrayAdmin['nome']."', '".$arrayAdmin['email']."', '".$arrayAdmin['senha']."', 
                '".$arrayAdmin['endereco']."', '".$arrayAdmin['telefone']."', '1');";
            $acessouDb -> query($sql);
            $this -> resultado = $acessouDb;
        }

        public function edit_cad( $arrayUsuario ) {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = "UPDATE usuarios set nome='".$arrayUsuario['nome']."', email='".$arrayUsuario['email']."',
                senha='".$arrayUsuario['senha']."', endereco='".$arrayUsuario['endereco']."', 
                telefone='".$arrayUsuario['telefone']."' WHERE id=".$arrayUsuario['id'].";";
            $this -> resultado = $conn -> query($sql);
        }

        public function rem_cad( $id ) {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = "DELETE FROM usuarios WHERE id = '".$id."';";
            $this -> resultado = $conn -> query($sql);
        }

        public function edita_produto( $arrayProduto ) {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = "UPDATE produtos set nome='".$arrayProduto['nome']."', descricao='".$arrayProduto['descricao']."',
                valor_venda='".$arrayProduto['valor_venda']."', custo='".$arrayProduto['custo']."', 
                quantidade='".$arrayProduto['quantidade']."' WHERE id=".$arrayProduto['id'].";";
            $this -> resultado = $conn -> query($sql);
        }

        public function deleta_produto( $id ) {
            $Oconn = new conectarDB();
            $Oconn -> abrirConexao();
            $conn = $Oconn -> conectouDB();
            $sql = "DELETE FROM produtos WHERE id = '".$id."';";
            $this -> resultado = $conn -> query($sql);
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }
?>