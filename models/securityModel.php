<?php
class securityModel {

    public function __construct() {
        require_once("db/logardb.php");
    }

    public function consultalogin($login){
        $Oconn = new conectarDB();
        $Oconn -> abrirConexao();
        $sql = "SELECT * FROM usuarios WHERE email='".$login."'";
        $conn = $Oconn -> conectouDB();
        $this -> resultado = $conn -> query($sql);
    }

    public function cadastrarUsuario($arrayCliente) {
        $conectaDb = new conectarDB();
        $conectaDb -> abrirConexao();
        $acessouDb = $conectaDb -> conectouDB();
        $sql = "INSERT INTO usuarios ( nome, email, senha, endereco, telefone) VALUES 
            ('".$arrayCliente['nome']."', '".$arrayCliente['email']."', '".$arrayCliente['senha']."', 
            '".$arrayCliente['endereco']."', '".$arrayCliente['telefone']."');";
        $acessouDb -> query($sql);
        $this -> resultado = $acessouDb;
    }

    public function getConsulta(){
        return $this -> resultado;
    }
}
?>