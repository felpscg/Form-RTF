<?php
$caract= array("á"=>"\u225\'e1","ã"=>"\u226\'e2 ","é"=>"\u233\'e9","ê"=>"\u234\'ea","í"=>"\u237\'ed",
    "ó"=>"\u243\'f3","ô"=>"\u244\'f4","õ"=>"\u245\'f5","ú"=>"\u250\'fa","ã"=>"testeã");
while ($nome = current($caract)) {
   
        echo key($caract).$caract[key($caract)].'<br />';
        
    next($caract);
}