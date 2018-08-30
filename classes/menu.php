<?php
class menu {
    public $localLogo = "img/fatec-logo-basico-b.png";
  
    
    

        function ativoMenu($valorAtivo){
        $valAtv = array("","","","");
        switch ($valorAtivo) {
            case 0:
            $valAtv[0] = "ativo"; 
            
        break;

            case 1:
            $valAtv[1] = "ativo"; 
            
        break;

            case 2:
            $valAtv[2] = "ativo"; 
            
        break;

            case 3:
            $valAtv[3] = "ativo"; 
            
        break;

        default:
            echo  "<h1>Erro ao carregar Menu</h1>";
        break;
        }
        
        echo "
        <ul id='menu' >
            <a href='index.php'><li class='m-p logo'><img class='logo-p' src='$this->localLogo' alt='Fatec Ourinhos'/></li></a>

            <li class='m-p $valAtv[0]' ><a href='index.php'>Início</a></li>
            <li class='m-p $valAtv[1]'><a href='form.php'>Formulário</a></li>
            <li class='m-p $valAtv[2]'><a href='docs/modelosdocs/modelos_de_documentos.zip'>Modelos</a></li>
            <li class='m-p $valAtv[3]'><a href='normas.php'>Normas</a></li>

        </ul>";
        return ; 
    }    

}
?>