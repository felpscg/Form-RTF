<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta content="Felipe Correa Gomes" name="author"/>
        <meta charset="utf-8"/>

        <title>Fatec Ourinhos - Formulario Estágio</title>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="plugin/reveal/jquery-1.4.4.min.js" defer="defer"></script>
        <script src="plugin/reveal/jquery.reveal.js" defer="defer"></script>
        <?php
        require_once "classes/menu.php";
        ?>
    </head>

<body>
<?php

$obg = new menu();
$obg ->ativoMenu(0);

?>
   


    <div id="telIni">
        <!--

        <p>As regras para preenchimento e entrega dos documentos seguem em <a href="docs/modelosdocs/normas_de_estagio.zip">anexo</a> ou se desejar, acesse o menu regras</p>
        <p>Após a exportação dos documentos, devem ser verificados e revisados para prevenir erros na entrega final. Para que não ocorram erros mais comuns, os seguintes itens devem estar em ordem:</p>
        
		-->
		<ul class="p">
            <li>Quantidade de cópias
                <dl>
                    <dd>02 &nbsp;- CCE (Convênio de Concessao de Estágio)</dd>
                    <dd>03 &nbsp;- TCE (Termo de Compromisso de Estágio)</dd>
                    <dd>02 &nbsp;- PAE (Plano de Atividades de Estágio)</dd>
                    <dd>01 &nbsp;&nbsp;- FIE (Ficha de Início de Estágio)</dd>
                    <dd>01 &nbsp;&nbsp;- CEC (Cadastro de Empresa Conveniada para Estágio)</dd>

                    <dd>01 &nbsp;&nbsp;- Seguro</dd>

               </dl>
            </li>
            <li>Alinhamento, fonte</li>
            Não devera ser alterado o alinhamento e tão menos o tamanho ou a fonte do texto dos documentos
            <li>Timbre</li>
            (Rasão social, CNPJ, Endereço, Nome da empresa)
            <li>As datas</li>
            As datas de todos os documentos devem coincidir. (Inicio, fim, atividades, ...)
        </ul>
    </div>
    <div id='rodape'>
    <a href='rep_erro.php'>Reportar erro</a>
    </div>
</body>
</html>