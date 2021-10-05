<?php
           
      
    require_once 'error505.php';
    if (isset( $_GET['id'])) {
        require_once '../Controller/ExercicioController.php';

         $id=(int)$_GET['id'];
        $objControl = new ExercicioController();
       $mensagem=  $objControl->excluirExercicio($id);
         echo "<script language='javascript' type='text/javascript'>"
            . "alert('".$mensagem."');";

                echo "</script>";
                echo "<script language='javascript' type='text/javascript'>
window.location.href = 'EXE_list.php';
</script>";
           

    }else{
        
        header("Location:EXE_list.php");
        
    }

?>