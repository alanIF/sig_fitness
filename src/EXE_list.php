<?php
    require_once 'error505.php';
    require_once 'head.php';

 ?>
 <div class="container-fluid">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Exercícios</h6>
                                </div>
                                <div class="card-body">
                                      <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>Demostração</th>
                      
                      <th>Grupo</th>
                      <th>Intervalo</th>
                      <th>Série </th>
                      <th>Nº Repetições </th>
                

                      <th>Ações</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php 
                        require_once '../Controller/ExercicioController.php';
                        $objControl = new ExercicioController();
                        $dados=$objControl->listar();
                        $tamanho = count($dados);
                        if ($tamanho > 0) {
                            for ($i = 0; $i < $tamanho; $i++) {
                                 echo "<tr>";
                                            echo"<td>" . $dados[$i]['id'] . "</td>";

                                            echo"<td>" . $dados[$i]['nome'] . "</td>";
                                           echo"<td>" . $dados[$i]['demostracao'] . "</td>";

                                            
                                            echo"<td>" . $dados[$i]['grupo'] . "</td>";
                                            echo"<td>" . $dados[$i]['intervalo'] . "</td>";
                                            echo"<td>" . $dados[$i]['serie'] . "</td>";
                                            echo"<td>" . $dados[$i]['repeticao'] . "</td>";
                                            
                                            echo"<td>  <a href='EXE_edit.php?id=" . $dados[$i]['id'] . "'><i class='fas fa-file' title='Editar Proposta'  aria-hidden='true'></i></a>
                                      <a onclick='return confirmar();' href='EXE_delete.php?id=" . $dados[$i]['id'] . "'><i class='fa fa-trash' title='Excluir Proposta'  aria-hidden='true'></i></a></td></tr>";
                            }
                        
                        }else{
                            echo "<tr><td colspan='8'> Você não cadastrou  nenhum exercicio ainda, cadastre uma proposta!</td>";
                        }
                    ?>
                        <tfoot>
                                    <tr>
                                        <th colspan="8"> <a href="EXE_add.php"><i class="fa fa-plus-square" aria-hidden="true"></i></a></th>
                                      
                                      
                                    </tr>
                                </tfoot>
                  </tbody>
                </table>
              </div> 
                                </div>
                            </div>

</div>
<?php 
    $page->foot();
?>