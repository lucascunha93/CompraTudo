<?php
class adminController {
    public function cadastrarAdmin(){

        $arrayUsuario["nome"] = $_POST["nome"];
        $arrayUsuario["endereco"] = $_POST["endereco"];
        $arrayUsuario["senha"] = $_POST["senha"];
        $arrayUsuario["telefone"] = $_POST["telefone"];
        $arrayUsuario["email"] = $_POST["email"];
        $usuario = new securityModel();
        $usuario -> inserirUsuario($arrayUsuario);
        header("location: index.php?c=m&a=l");
    }

}
?>