<?php
class clientesModel {
    public function __construct() {
        require_once("db/logardb.php");
    }

    public function cadastrarCliente($arrayCliente) {
        $conectaDb = new conectarDB();
        $conectaDb -> abrirConexao();
        $acessouDb = $conectaDb -> conectouDB();
        $sql = "INSERT INTO usuarios ( nome, email, senha, endereco, telefone) VALUES 
            ('".$arrayCliente['nome']."', '".$arrayCliente['email']."', '".$arrayCliente['senha']."', 
            '".$arrayCliente['endereco']."', '".$arrayCliente['telefone']."');";
        $acessouDb -> query($sql);
        $this -> resultado = $acessouDb;
    }

    public function atualizarCliente( $arrayCliente ) {

        $Oconn = new conectarDB();
        $Oconn -> abrirConexao();
        $conn = $Oconn -> conectouDB();
        $sql = "UPDATE usuarios set nome='".$arrayCliente['nome']."', endereco='".$arrayCliente['endereco']."', 
            email='".$arrayCliente['email']."', senha='".$arrayCliente['senha']."', telefone='".$arrayCliente['telefone']."' 
            WHERE id = ".$arrayCliente['id'].";";
        $this -> resultado = $conn -> query($sql);
    }

    public function getConsulta(){
        return $this -> resultado;
    }
}
?>