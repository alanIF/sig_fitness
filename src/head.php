<?php
    require_once '../generics/page.php';
    require_once '../Controller/SessionController.php';

    $page = new page();
    $objControl = new SessionController();

    $objControl->verificarlogin();
        if($objControl->is_admin($_SESSION['tipo'])){
                $page->head_adm();

        }else{
                $page->head_aluno();

        }
    
 ?>
