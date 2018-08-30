<?php

/**
 * Description de rtf3
 * @author FELIPECORREAGOMES
 */


require '../classes/varCamp.php';
/*
require_once '../classes/enviar.php';
$obg = new enviar();
$obg->verificaArq();
*/
header("Content-type: application/word");
header("Content-Disposition:attachment;filename=03-Plano_de_Atividades_de_Estagio.rtf");//salvar com o nome ...


$caract= array("á"=>"\u225\'e1","ã"=>"\u226\'e2","é"=>"\u233\'e9","ê"=>"\u234\'ea","í"=>"\u237\'ed","ó"=>"\u243\'f3","ô"=>"\u244\'f4","õ"=>"\u245\'f5","ú"=>"\u250\'fa","ã"=>"\u227\'e3","ç"=>"\u231\'e7","à"=>"\u224\'e0");


$filename = "modeloPAE.rtf";

$fileopem = fopen($filename, "r");//apenas leitura
$saida = fread($fileopem, filesize($filename));

fclose($fileopem);
$s= array("descatval","nomeatval","dtiniatval","dtfimatval");
    while ($e = current($atval)) {
        
        $t=key($atval)+1;
        
        for ($k = 1; $k <=count($atval); $k++){
            $l = $k;
            $varTable="
                \\trowd \\irow1\\irowband1\\lastrow \\ltrrow\\ts11\\trgaph70\\trleft-70\\trbrdrt\\brdrs\\brdrw10 \\trbrdrl\\brdrs\\brdrw10 \\trbrdrb\\brdrs\\brdrw10 \\trbrdrr\\brdrs\\brdrw10 
                \\trbrdrh\\brdrs\\brdrw10 \\trbrdrv\\brdrs\\brdrw10 \\trftsWidth1\\trftsWidthB3\\trftsWidthA3\\trpaddl70\\trpaddr70\\trpaddfl3\\trpaddfr3\\tblrsid14305414\\tblind0\\tblindtype3 \\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr
                \\brdrs\\brdrw10 \\cltxlrtb\\clftsWidth3\\clwWidth779\\clshdrawnil \\cellx709\\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 \\cltxlrtb\\clftsWidth3\\clwWidth4111\\clshdrawnil \\cellx4820\\clvertalt\\clbrdrt
                \\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 \\cltxlrtb\\clftsWidth3\\clwWidth3118\\clshdrawnil \\cellx7938\\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 
                \\cltxlrtb\\clftsWidth3\\clwWidth1701\\clshdrawnil \\cellx9639\\pard \\ltrpar\\qj \\li0\\ri0\\widctlpar\\intbl\\wrapdefault\\aspalpha\\aspnum\\faauto\\adjustright\\rin0\\lin0\\pararsid4875063


                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 \\f1\\fs22\\insrsid5185193 atval".$l."}
                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 \\f1\\fs22\\insrsid6105925\\charrsid5647767 \\cell }
                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 \\f1\\fs22\\insrsid5185193 descatval".$l."}
                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 \\f1\\fs22\\insrsid9006039\\charrsid5647767 \\cell }
                {\\rtlch\\fcs1 \\af1\\afs22 
                \\ltrch\\fcs0 \\f1\\fs22\\insrsid5185193 nomeatval".$l."}


                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 \\f1\\fs22\\insrsid6105925\\charrsid5647767 \\cell }
                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 \\f1\\fs22\\insrsid5185193 dtiniatval".$l." a dtfimatval".$l."}
                {\\rtlch\\fcs1 \\af1\\afs22 \\ltrch\\fcs0 
                \\f1\\fs22\\insrsid6105925\\charrsid5647767 \\cell }



                \\pard \\ltrpar\\ql \\li0\\ri0\\widctlpar\\intbl\\wrapdefault\\aspalpha\\aspnum\\faauto\\adjustright\\rin0\\lin0 

                {\\rtlch\\fcs1 \\af1\\afs24 \\ltrch\\fcs0 \\f1\\fs24\\insrsid6105925\\charrsid5647767 
                \\trowd \\irow1\\irowband1\\lastrow \\ltrrow\\ts11\\trgaph70\\trleft-70\\trbrdrt\\brdrs\\brdrw10 \\trbrdrl\\brdrs\\brdrw10 \\trbrdrb\\brdrs\\brdrw10 \\trbrdrr\\brdrs\\brdrw10 \\trbrdrh\\brdrs\\brdrw10 \\trbrdrv\\brdrs\\brdrw10 
                \\trftsWidth1\\trftsWidthB3\\trftsWidthA3\\trpaddl70\\trpaddr70\\trpaddfl3\\trpaddfr3\\tblrsid14305414\\tblind0\\tblindtype3 \\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 
                \\cltxlrtb\\clftsWidth3\\clwWidth779\\clshdrawnil \\cellx709\\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 \\cltxlrtb\\clftsWidth3\\clwWidth4111\\clshdrawnil \\cellx4820\\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl
                \\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 \\cltxlrtb\\clftsWidth3\\clwWidth3118\\clshdrawnil \\cellx7938\\clvertalt\\clbrdrt\\brdrs\\brdrw10 \\clbrdrl\\brdrs\\brdrw10 \\clbrdrb\\brdrs\\brdrw10 \\clbrdrr\\brdrs\\brdrw10 
                \\cltxlrtb\\clftsWidth3\\clwWidth1701\\clshdrawnil \\cellx9639\\row }

            ";
        if($k < count($atval))
            $varTable.=$varTable;
        
        }
        
        $saida= str_replace("atv", $varTable, $saida);
        for($i = 0; $i< count($s) ; $i++) {

            $temp=$s[$i].$t;
            $saida= str_replace($temp, $$temp, $saida);

        }
        next($atval);
    }
    
    
    
    
while ($nome = current($caract)) {
   
    $saida = str_replace(key($caract),$caract[key($caract)],$saida);
        
    next($caract);
}
echo $saida;

?>
