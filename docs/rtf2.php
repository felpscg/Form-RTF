<?php

/**
 * Description de rtf2
 * @author FELIPECORREAGOMES
 */

//require_once '../classes/valDados.php';

require_once '../classes/enviar.php';
require_once '../classes/cursot.php';
require_once '../classes/dtHr.php';

$obg =  new enviar();
$obg->  verificaArq();
$obg2 = new cursot();
$obg3 = new dtHr();








header("Content-type: application/word");
header("Content-Disposition:attachment;filename=02-Termo_de_Compromisso_de_Estagio.rtf");



$acinter = "";

// --- Percorre todos os elementos pelo POST e retorna em uma variavel com o seu respectivo nome

foreach($_POST as $nome_campo => $valor){ 
   $comando = "\$" . $nome_campo . "='" . $valor . "';"; 
   //echo $comando;
   eval($comando); 
} 

$tothrsem = $obg3->calculoHr($horarioini, $horariofim, true, $semanaini, $semanafim);



$semanaini;
$semanafim;
$horarioini;
$horariofim;



$caract= array("á"=>"\u225\'e1","ã"=>"\u226\'e2","é"=>"\u233\'e9","ê"=>"\u234\'ea","í"=>
    "\u237\'ed","ó"=>"\u243\'f3","ô"=>"\u244\'f4","õ"=>"\u245\'f5","ú"=>"\u250\'fa","ã"=>
    "\u227\'e3","ç"=>"\u231\'e7","à"=>"\u224\'e0");

$cursoer = $obg2->verificaTurma($cursoturno);

if($intervalo=="s"){
    $acinter = "com intervalo das refeições das '$horariointeri' às '$horariointerf',"; 
}

switch ($cidadelocaldoc) {
    case 1:
        $cidadelocaldoc=$cidadeemp;
    break;

    case 2:
        $cidadelocaldoc="Ourinhos";
    break;

    case 3:
        $cidadelocaldoc=$cidadeal;
    break;

    default:
        echo "erro ao carregar a cidade do documento";
    break;
}




$mespt = array("","Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto",
    "Setembro", "Outubro", "Novembro", "Dezembro");



$dia = date("d");
$mes = date("n");

$ano = date("Y");
$data = $dia." de ". $mespt[$mes]. " de ". $ano;


$filename = "MS-O/model/2-TCE.rtf";

$fileopem = fopen($filename, "r");//apenas leitura
$saida = fread($fileopem, filesize($filename));

fclose($fileopem);
    $endemp = $ruaemp." número ".$numeroemp;
    $endal  = $ruaal." número ".$numeroal;
    $saida = str_replace("intervaloinifim",$acinter, $saida);
    $saida = str_replace("valbolsa",$valbolsa, $saida);
    //$saida = str_replace("totalhrs",$t, $saida);
    $saida = str_replace("nomeemp",$nomeemp, $saida);
    $saida = str_replace("cnpjemp",$cnpjemp, $saida);
    $saida = str_replace("nomeal",ucwords(strtolower($nomeal)), $saida);
    $saida = str_replace("nomesup",$nomesup, $saida);
    
    $saida = str_replace("datainivig",$datainivig, $saida);
    $saida = str_replace("datafimvig",$datafimvig, $saida);
    
    $saida = str_replace("diassem","de ".$inisem ." a ".$fimsem , $saida);
    $saida = str_replace("tothrsem",$tothrsem, $saida);
    $saida = str_replace("horarioini",$horarioini, $saida);
    $saida = str_replace("horariofim",$horariofim, $saida);
    
    $saida = str_replace("cidadelocaldoc",ucwords(strtolower($cidadelocaldoc)), $saida);
    $saida = str_replace("cursoal",$cursoer, $saida);
    
    $saida = str_replace("endemp",$endemp, $saida);
    $saida = str_replace("endal",$endal, $saida);
    $saida = str_replace("rgal",$rgal, $saida);
    $saida = str_replace("numseg",$numapol, $saida);
    $saida = str_replace("nomeseg",$nomeseg, $saida);
    $saida = str_replace("ddmmextaaaa",$data, $saida);
    $saida = str_replace("cidadeal",$cidadeal,$saida);
    $saida = str_replace("IMGBLOP",$obg->getCodificado(), $saida);
	
    while ($nome = current($caract)) {
   
    $saida = str_replace(key($caract),$caract[key($caract)],$saida);
        
    next($caract);
	
}//Verifica todos os caracteres acentuados e altera


echo $saida;

?>
