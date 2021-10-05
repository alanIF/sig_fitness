<?php

if(!$objControl->is_admin($_SESSION['tipo'])){
   echo "<script language='javascript' type='text/javascript'>
          window.location.href = 'home.php';
          </script>";                
}
