<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionDAO
 *
 * @author Admin
 */
class SessionDAO {
        function logar($email, $senha) {
        require_once 'Model/connect.php';   

        $conn = F_conect();
        session_start();
        $result = mysqli_query($conn, "SELECT * FROM usuario WHERE email='" . $email . "' AND senha='" . $senha . "'");
        if (mysqli_num_rows($result) == 1) {
            // teste - certo

            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $nome=$row['nome'];
                $tipo=$row['tipo'];
            }
            //fim teste
            $_SESSION['nome']=$nome;
            $_SESSION['usuario'] = $email;
            $_SESSION['tipo']=$tipo;
            $_SESSION['id'] = $id;
            $_SESSION['ativo'] = true;

            header('Location:./src/home.php');


        } else if (mysqli_num_rows($result) != 1) {
            $_SESSION['usuario'] = "";
            $_SESSION['ativo'] = false;
            Alert("Ops!", "Email e senha não correspondem", "danger");
        } else {
            $_SESSION['usuario'] = "";
            $_SESSION['ativo'] = false;
            Alert("Ops!", "Email e senha não correspondem", "danger");
        }
    }

    function sair() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }


              $_SESSION = array();
              if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

                session_destroy();
                header('Location: ../index.php');
        }
        Alert("Ops!", "Erro ao sair do sistema, procure o suporte!", "danger");
    }

    function testLogado() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($_SESSION['usuario'] == false) {
            $_SESSION = array();
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
                );
            }
            session_destroy();
            header('Location: ../index.php');
        }
    }
    function is_admin($tipo) {
        if( $tipo==0) {
            return true; 
        }
        return false;
    }

}
