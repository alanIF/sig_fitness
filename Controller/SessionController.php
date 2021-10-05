<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionController
 *
 * @author Admin
 */
class SessionController {
    //put your code here
    public function Login($email, $senha){
       require_once ('./Model/SessionDAO.php');
       $session  = new SessionDAO();
       $session ->logar($email, $senha);
    }
    public function verificarLogin(){
        require_once ('../Model/SessionDAO.php');
        $session    = new SessionDAO();
        $session  ->testLogado();
        
    }
     public function logOut() {
         require_once ('../Model/SessionDAO.php');
         $session    = new SessionDAO();

         $session  ->sair();
    }
      public function is_admin($tipo){
        require_once ('../Model/SessionDAO.php');
        $session    = new SessionDAO();
       return  $session  ->is_admin($tipo);
    }
}
