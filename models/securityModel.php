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

    public function getConsulta(){
        return $this -> resultado;
    }
}
?>