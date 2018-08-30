<?php

require_once '../classes/enviar.php';
$obg = new enviar();
$obg->verificaArq();

header("Content-type: application/word");
header("Content-Disposition:attachment;filename=01 CCE.rtf");




foreach($_POST as $campo => $val){ 
   $comando = "\$" . $campo . "='" . $val . "';"; 
   //echo $comando;
   eval($comando); 
} 



$mespt = array("","Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");



$cidadelocaldoc="Ourinhos";
$dia = date("d");
$mes = date("n");

$ano = date("Y");
$data = $dia." de ". $mespt[$mes]. " de ". $ano;

$filename = "modeloTCE.rtf";

$fileopem = fopen($filename, "r");//apenas leitura
$saida = fread($fileopem, filesize($filename));

fclose($fileopem);
    $endemp = $ruaemp." número ".$numeroemp;
    $endal  = $ruaal." número ".$numeroal;
    $saida = str_replace("valbolsa",$valbolsa, $saida);

    $saida = str_replace("nomeemp",$nomeemp, $saida);
    $saida = str_replace("nomeal",ucwords(strtolower($nomeal)), $saida);
    $saida = str_replace("nomesup",$nomesup, $saida);
    
    $saida = str_replace("cnpjemp",$cnpjemp, $saida);
   
    
    $saida = str_replace("endemp",$endemp, $saida);
    $saida = str_replace("endal",$endal, $saida);
    $saida = str_replace("rgal",$rgal, $saida);
    $saida = str_replace("cidadeal", $cidadeal ,$saida);
    
    
    //$saida= str_replace("cursoal",$curso, $saida);
    $saida = str_replace("numseg",$numapol, $saida);
    $saida = str_replace("nomeseg",$nomeseg, $saida);

    $saida = str_replace("ddmmextaaaa",$data, $saida);
    $saida = str_replace("cidadeal",$cidadeal,$saida);

    //$saida = str_replace("IMGBLOP",$obg->getCodificado(), $saida);

echo $saida;


?>