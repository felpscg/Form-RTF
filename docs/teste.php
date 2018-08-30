<?php



foreach($_POST as $nome_campo => $valor){ 
       $comando = "\$" . $nome_campo . "='" . $valor . "';"; 
       //echo $comando;
       eval($comando); 
    } 


echo $cursoer;
