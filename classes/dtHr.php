<?php
/**
 * Description de dtHr
 * @author FELIPECORREAGOMES
 */
class dtHr {
    
    function calculoHr($hrIniEst ,$hrFimEst, $est, $semini,$semfim) {

        $horario1 = explode(":",$hrIniEst);
        $horario2 = explode(":",$hrFimEst);
        $acumulador1 = ($horario1[0] * 3600) + ($horario1[1] * 60);
        $acumulador2 = ($horario2[0] * 3600) + ($horario2[1] * 60);
        $resultado = $acumulador2 - $acumulador1;
        $hora_ponto = floor($resultado / 3600);
        $resultado = $resultado - ($hora_ponto * 3600);
        $min_ponto = floor($resultado / 60);
        $tempo = $hora_ponto.":".$min_ponto;
        $tempo2=array ($hora_ponto,$min_ponto);
//        if($hora_ponto>6 && $min_ponto>0){
//           return "<h2>horário ultrapassa o permitido</h2>";
//        }
        //echo $tempo,"</br>";
        if($est==true){
            return $this->calcTotHrSem($tempo2, $semini, $semfim);
        }
        else{
        return $tempo;
        
        
        }
        
        }
function calcTotHrSem($totalHrs,$iniDiaSem,$fimDiaSem) {
    $totdia = $fimDiaSem - $iniDiaSem + 1;
    //echo $totalHrs[0],"e",$totalHrs[1],"</br>";
    $totalMinDias=$totalHrs[1]*$totdia;
    $totalHrsDias=$totalHrs[0]*$totdia;
    $acumulador = ($totalHrsDias * 3600) + ($totalMinDias * 60);
    
    $hora = floor($acumulador / 3600);
    $acumulador = $acumulador - ($hora * 3600);
    $min = floor($acumulador / 60);
    if($min<10){
        $min = "0".$min;
    }
    if($hora>=30 && $min>0){
        return "<center><h2>horário ultrapassa o permitido</h2>".
        "<h3>Sua carga horária são de $hora:$min Horas </br>".
        "O limite são 30 Horas semanais</h3></center>";
    }
    
    
    
    else{
        return $hora . ':'. $min;
    }
    
}
    
}//     Fim classe dtHr
//      $obg = new dtHr();
//      echo $obg->calculoHr("19:00", "22:00", false,1,5);


