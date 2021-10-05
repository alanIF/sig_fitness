<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of table
 *
 * @author Admin
 */
class table {
    public function build($data,$collumns,$add){
        $table = new table();
        $table->head($collumns);
        $table->body($data);
        $table->foot($add);
    }
    public function head($collumns){
       
       echo '  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><thead><tr>';
       foreach ($collumns as $c) {
            echo "<th>".$c."</th>";
        }
        echo '</tr></thead>';
    }
    public function body($data){
        
    }   
    public function foot($add){
        echo ' <tfoot>
                                    <tr>
                                        <th colspan="8"> <a href="'.$add.'"><i class="fa fa-plus-square" aria-hidden="true"></i></a></th>
                                      
                                      
                                    </tr>
                                </tfoot>
                  </tbody>
                </table>
              </div> ';
    }
                    
    }
