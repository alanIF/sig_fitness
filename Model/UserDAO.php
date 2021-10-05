<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author PICHAU
 */
class UserDAO {

  function listar(){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from usuario");
        $i = 0;
        $usuarios= array();
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $usuarios[$i]['id'] = $row['id'];
                   $usuarios[$i]['nome'] = $row['nome'];
                   $usuarios[$i]['email'] = $row['email'];
                   $usuarios[$i]['tipo'] = $row['tipo'];
                   $usuarios[$i]['senha'] = $row['senha'];
                
                 
                    $i++;
                }
        }
       $conn->close();
       return $usuarios;
}
function getUsuario($id){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from usuario where id='".$id."'");
        $i = 0;
        $usuarios= array();
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $usuarios[$i]['id'] = $row['id'];
                   $usuarios[$i]['nome'] = $row['nome'];
                   $usuarios[$i]['email'] = $row['email'];
                   $usuarios[$i]['tipo'] = $row['tipo'];
                   $usuarios[$i]['senha'] = $row['senha'];
                
                 
                    $i++;
                }
        }
       $conn->close();
       return $usuarios;
}

function cadastrar($nome, $email, $senha,$tipo) {
   require_once 'connect.php';

    $conn = F_conect();
    $sql = "INSERT INTO usuario(nome, email, senha, tipo)
            VALUES('" . $nome . "','" . $email . "','" . $senha . "' , '".$tipo."')";
    if ($conn->query($sql) == TRUE) {
       return "Usuario cadastrado com sucesso";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function atualizarUsuario($nome, $email, $senha,$tipo, $id) {
     require_once 'connect.php';

    $conn = F_conect();
    $sql = " UPDATE usuario SET  nome='" . $nome . "', email='" . $email . " ', senha='" .
            $senha . "' , tipo='".$tipo."' WHERE id= " . $id;

    if ($conn->query($sql) === TRUE) {
       
       return "Usuario atualizado com sucesso";
    } else {
       return "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function excluirUsu($id) {
   require_once 'connect.php';

    $conn = F_conect();

    $sql = "DELETE FROM usuario WHERE id=" . $id;
    if ($conn->query($sql)) {
                return "Usuario excluído com sucesso";

            }else{
                return "Error: " . $sql . "<br>" . $conn->error;

            }

            $conn->close();
}
}