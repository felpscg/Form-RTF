<?php
/*
 * @author FELIPECORREAGOMES
 */
class cursot {
    
    
    function verificaTurma($curso) {
        switch ($curso) {
            case "agrm":
                return "Agronegócio";
            break;
            case "jogosm":
                return "Jogos";
            break;
            case "segm":
                return "Segurança";
            break;
            case "adsv":
                return "Análise e Desenvolvimento de Sistemas";
            break;
            case "adsn":
                return "Análise e Desenvolvimento de Sistemas";
            break;
            case "agrn":
                return "Agronegócio";
            break;
            case "segn":
                return "Segurança";
            break;

            default:
                echo "erro ao carregar o curso do documento";
            break;
        }

    }
}