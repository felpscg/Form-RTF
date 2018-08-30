<?php



/**
 * since criado em 07/06/2018
 * @author FELIPECORREAGOMES
 */
class valDados {
    private $compinter ; //String adicional do intervalo em TCE sendo alterado por intervaloinifim no documento
    private $qtddiassem;
    private $totalhr;//total hr semana
    private $totalhrsem;//total hrs semanais
    
//Início Getters e Setters
    
    public function getCompinter() {
        return $this->compinter;
    }

    public function getQtddiassem() {
        return $this->qtddiassem;
    }

    public function getTotalhr() {
        return $this->totalhr;
    }

    public function getTotalhrsem() {
        return $this->totalhrsem;
    }

    public function setCompinter($compinter) {
        $this->compinter = $compinter;
    }

    public function setQtddiassem($qtddiassem) {
        $this->qtddiassem = $qtddiassem;
    }

    public function setTotalhr($totalhr) {
        $this->totalhr = $totalhr;
    }

    public function setTotalhrsem($totalhrsem) {
        $this->totalhrsem = $totalhrsem;
    }


//Fim Getters e Setters
//= "com intervalo das refeições das ".$horariointeri." às hhintfim horas,"
    function inter($intervalo,$horarioini,$horariofim,$horariointeri,$horariointerf){//tudo f
        if($horarioini<$horariointeri && $horariointerf<$horariofim){
            if(strcmp($intervalo, "true"))
                $this->setCompinter("com intervalo das refeições das " .$horariointeri. " às " .$horariointerf. " horas,");
            else
                $this->setCompinter("");
        }
        else 
            echo "</br><h2>preencha novamente o formulario</h2></br>Horários não coincidem";
    }
    
    function horarioCalc($intervalo,$valRangeSI,$valRangeSF,$horarioini, $horariofim, $horariointeri, $horariointerf){
        $this->setTotalhr($horariofim-$horarioini);
        $this->setQtddiassem($valRangeSF-$valRangeSI);
        $this->setTotalhrsem($this->getTotalhr() * $this->getQtddiassem());
        $this->inter($intervalo,$horarioini, $horariofim, $horariointeri, $horariointerf);
    }
    
}

//Fim classe valDados
