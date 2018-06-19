<?php
class produtosModel {    
    public function __construct(){   
        require_once("db/logarDB.php");
    }
    public function listaProdutos(){

        $Oconn = new conectarDB();
        $Oconn -> abrirConexao();
        $conn = $Oconn -> conectouDB();
        $sql = 'SELECT * FROM produtos';
        $this -> resultado = $conn -> query($sql);
    }

    public function pegaCart( $cod ){

        $Oconn = new conectarDB();
        $Oconn -> abrirConexao();
        $conn = $Oconn -> conectouDB();
        $sql = "SELECT * FROM produtos WHERE id IN (".$cod.")";
        $this -> resultado = $conn -> query($sql);
    }

    public function mostrarResultado(){
        return $this -> resultado;
    }
}
?>