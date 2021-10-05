<?php
    require_once 'head.php';

    require_once 'error505.php';
 ?>
        
              
            <div class="container-fluid">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Exercício -> Cadastrar</h6>
                                </div>
                                <div class="card-body">
 <form class="user" action="" method="post" enctype="multipart/form-data">
                                              
                        <div class="form-group">
                    <input type="text" name="nome" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nome" required="">
                    </div>
                          <div class="form-group">
                               <textarea class="ckeditor" name="demostracao" placeholder="" required=""> Demostração </textarea>
                    </div>
                           
                         <div class="form-group">
                    <input type="text" name="grupo" class="form-control form-control-user" id="exampleInputEmail" placeholder="Grupo Muscular" required="">
                    </div>
                           <div class="form-group">
                    <input type="text" name="intervalo" class="form-control form-control-user" id="exampleInputEmail" placeholder="Intervalo" required="">
                    </div>
                           <div class="form-group">
                    <input type="text" name="serie" class="form-control form-control-user" id="exampleInputEmail" placeholder="Série" required="">
                    </div> 
                      <div class="form-group">
                    <input type="text" name="repeticao" class="form-control form-control-user" id="exampleInputEmail" placeholder="N° de Repetições" required="">
                    </div>      
          
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Cadastrar</button>
                  <a href="EXE_list.php" class="btn btn-warning btn-user btn-block">Voltar</a>
                
              </form>
                 <?php
                    
                    if (isset($_POST["botao"])) {
                          require_once '../Controller/ExercicioController.php';
                        $objControl = new ExercicioController();
                        $mensagem = $objControl->cadastrarExercicio($_POST["nome"], $_POST["demostracao"], $_POST["grupo"],$_POST['intervalo'],$_POST['serie'], $_POST['repeticao']);
                                echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('".$mensagem."');";
                                echo "</script>";
                            
                      
                    }
                    ?>                                     
                                </div>
                            </div>

</div>
                    
                

   <?php 
    $page->foot();
?>