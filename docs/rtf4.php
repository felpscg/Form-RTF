<?php

/**
 * Description de rtf3
 * @author FELIPECORREAGOMES
 */

//require_once '../classes/valDados.php';

require_once '../classes/enviar.php';
$obg = new enviar();
$obg->verificaArq();

header("Content-type: application/word");
header("Content-Disposition:attachment;filename=04-Ficha_de_Inicio_de_Estagio.rtf");//salvar com o nome ...


// --- Percorre todos os elementos pelo POST e retorna em uma variavel com o seu respectivo nome


 

foreach($_POST as $nome_campo => $valor){ 
   $comando = "\$" . $nome_campo . "='" . $valor . "';"; 
   //echo $comando;
   eval($comando); 
} 
$caract= array("á"=>"\u225\'e1","ã"=>"\u226\'e2","é"=>"\u233\'e9","ê"=>"\u234\'ea","í"=>"\u237\'ed","ó"=>"\u243\'f3","ô"=>"\u244\'f4","õ"=>"\u245\'f5","ú"=>"\u250\'fa","ã"=>"\u227\'e3","ç"=>"\u231\'e7","à"=>"\u224\'e0");
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
//$intervalo = $_POST['intervalo'];

//$valD = new valDados();
//$valD->horarioCalc($intervalo,$valRangeSI, $valRangeSF, $horarioini, $horariofim, $horariointeri, $horariointerf);
   
//$t=$valD->getTotalhrsem();

$mespt = array("","Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
//o valor não pode ser 0 se não for obrigatório
//email bairroal ufal cepal telal
//$endal
// semal / turnoal
//interal recebe string "intervalo das" + hhintini+ "até as"+hhintfim -- se não tiver recebe NULL==""
//$aluno = array($nomeal, $rgal, $raal,  $curso, $numapol, $nomeseg, $valbolsa);
//ddvmmvaaaav ddvfmmvfaaaavf  ddtmmtaaaat(termino contrato)

/*



//dados superiaor
$nomesup = $_POST['nomesup'];
$rgsup = $_POST['rgsup'];

//dados testemunhas
$nometestp = $_POST['nometestp'];
$nometests = $_POST['nometests'];
$rgtestp = $_POST['rgtestp'];
$rgtests = $_POST['rgtests'];
// divdepempre divisão de departamento de aplicação do estágio

//telsup, emailsup e cargosup do supervisor
//op(obrigatório) - np (não obrigatório)
 * */

$cidadelocaldoc="Ourinhos";
$dia = date("d");
$mes = date("n");//array do mês ou verificar alguma extenção em pt

$ano = date("Y");
$data = $dia." de ". $mespt[$mes]. " de ". $ano;


$filename = "modeloTCE2.rtf";

$fileopem = fopen($filename, "r");//apenas leitura
$saida = fread($fileopem, filesize($filename));

fclose($fileopem);
    $endemp = $ruaemp." número ".$numeroemp;
    $endal  = $ruaal." número ".$numeroal;
    //$saida = str_replace("valbolsa",$valbolsa, $saida);
    //$saida = str_replace("totalhrs",$t, $saida);
    $saida = str_replace("nomeemp",$nomeemp, $saida);
    $saida = str_replace("nomeal",ucwords(strtolower($nomeal)), $saida);
    $saida = str_replace("nomesup",$nomesup, $saida);
    
    $saida = str_replace("cnpjemp",$cnpjemp, $saida);
   
    
    $saida = str_replace("endemp",$endemp, $saida);
    $saida = str_replace("endal",$endal, $saida);
    $saida = str_replace("rgal",$rgal, $saida);
    $saida = str_replace("cidadeal", $cidadeal ,$saida);
    
    
//    = str_replace("cursoal",$curso, $saida)
    $saida = str_replace("numseg",$numapol, $saida);
    $saida = str_replace("nomeseg",$nomeseg, $saida);
//   = str_replace("nomeemp",$nomeemp, $saida)
    $saida = str_replace("ddmmextaaaa",$data, $saida);
    $saida = str_replace("cidadeal",$cidadeal,$saida);

    $saida = str_replace("IMGBLOP",$obg->getCodificado(), $saida);

    while ($nome = current($caract)) {
   
    $saida = str_replace(key($caract),$caract[key($caract)],$saida);
        
    next($caract);
}

echo $saida;

?>
