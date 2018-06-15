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

    public function listaMarcas(){

        $Oconn = new conectarDB();
        $Oconn -> abrirConexao();
        $conn = $Oconn -> conectouDB();
        $sql = 'SELECT * FROM fabricantes';
        $this -> resultado = $conn -> query($sql);
    }

    public function addCart( $cod ){

        $Oconn = new conectarDB();
        $Oconn -> abrirConexao();
        $conn = $Oconn -> conectouDB();
        $sql = "SELECT nome, valor FROM produtos WHERE id = ".$cod.";";
        $this -> resultado = $conn -> query($sql);
    }

    public function mostrarResultado(){
        return $this -> resultado;
    }
}
?>