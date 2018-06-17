<?php

    class userController { 

        function __construct() {
            require_once ("models/securityModel.php");
        }

        public function consultaLoginUser(){
            $login = $_POST["email"];
            $user = new securityModel();
            $user -> consultaLogin($login);
            $resultado = $user -> getConsulta();

            if ($line = $resultado -> fetch_assoc()) {
                $logou = $line['senha'];
                $passouUser = $_POST["senha"];

                if ($logou == $passouUser) {
                    $_SESSION['idUser'] = $line['id'];
                    $_SESSION['User'] = $line['email'];
                    $_SESSION['nome'] = $line['nome'];
                    
                    if ($line['adm'] != 0) {
                        header("location: index.php?c=a&a=i");
                    }
                    else {
                    header("location: index.php?c=c&a=i");
                    }
                 }
                 else{
                     header("location: index.php?c=m&a=cc");
                 }
            }
            else {
                header("location: index.php?c=m&a=cc");
            }
        }

        public function sessionOff() {
            session_destroy();
            header("Location: index.php?c=m&a=i");
        }
    }
?>