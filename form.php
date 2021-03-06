﻿<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta content="Felipe Correa Gomes" name="author"/>
    <meta charset="utf-8"/>

    <title>Formulario Estágio</title>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="plugin/reveal/reveal.css"/>

    <script charset="utf-8" src="js/versem.js" defer="defer"></script>
    <script charset="utf-8" src="js/selbtrtf.js" defer="defer"></script>
    <script charset="utf-8" src="js/cep.js" defer="defer"></script>
    <script charset="utf-8" src="js/cepemp.js" defer="defer"></script>
    <script charset="utf-8" src="js/classestagio.js" defer="defer"></script>
    <script charset="utf-8" src="js/addatv.js" defer="defer"></script>



    <script src="plugin/reveal/jquery-1.4.4.min.js" defer="defer"></script>
    <script src="plugin/reveal/jquery.reveal.js" defer="defer"></script>
    <?php
        require_once "classes/menu.php";
    ?>

  </head>
  <body id="form">

      
    <?php

    $obg = new menu();
    $obg ->ativoMenu(1);

    ?>



    <noscript>
        <center>
            Para que o formulário funcione corretamente,
            <a href="https://www.hostnet.com.br/info/ativar-o-javascript-no-navegador/" target="_blank">
                ative o javascrip do navegador
            </a>
        </center>
    </noscript>

      
      
    <form enctype="multipart/form-data" method="POST" name="formbasic" id="formp" action="">
        <fieldset>
        <!--__ID-ALUNO__-->
            <legend>
                <u>
                Identificação do aluno:
                </u>
            </legend>

        	<p>
                Nome completo:*&nbsp;&nbsp;&nbsp;
        	        <input  placeholder="Digite seu nome completo" maxlength="100" name="nomeal" type="text"/>

        	</p>

            <p>
                RG:*&nbsp;&nbsp;&nbsp;
                <input  placeholder="00.000.000-0" maxlength="12" size="10" name="rgal" class="innum" type="text"/>
                RA:*&nbsp;&nbsp;&nbsp;
                <input  placeholder="0210XXXXXXXXX" maxlength="13" name="raal" class="innum" type="text"/>
            </p>
            <p>
                Telefone:*&nbsp;&nbsp;&nbsp;
                <input  placeholder="(DDD)0000-0000" maxlength="15" size="14" name="telal" class="innum" type="text"/>
            </p>
        	<p>
        		E-mail:*&nbsp;&nbsp;&nbsp;
        		<input maxlength="70" size="65"  name="emailal"  type="email"/>
        	</p>


            <fieldset>
                <legend>Endereço</legend>

                <p>
                    CEP:*&nbsp;&nbsp;&nbsp;
            	    <input  placeholder="00000-000" maxlength="9" size="8" name="cepal" class="innum" id="cepal" onblur="pesquisacep(this.value);" type="text"/>
                </p>

                <p>
                    Rua:*&nbsp;&nbsp;&nbsp;
            	    <input maxlength="100" size="65" name="ruaal" id="ruaal" type="text"/>

            	</p>

                <p>
                    Número:*&nbsp;&nbsp;&nbsp;
            	    <input  maxlength="5" size="6" name="numeroal" id="numeroal"  type="number"/>

            	</p>

                <p>
                    Complemento:&nbsp;&nbsp;&nbsp;
            	    <input  maxlength="5" size="6" name="compal"  id="compal" type="number"/>

            	</p>

                <p>
                    Bairro (Jd):*&nbsp;&nbsp;&nbsp;
            	    <input  placeholder="" maxlength="100" size="65" name="bairroal"  id="bairroal" type="text"/>

            	</p>

                <p>
                    Cidade:*&nbsp;&nbsp;&nbsp;
            	    <input  placeholder="" maxlength="30" size="40" name="cidadeal"  id="cidadeal" type="text">

            	</p>

                <p>
                    UF:*&nbsp;&nbsp;&nbsp;


                <select name="ufal" id="ufal">
                	<option value="">Selecione</option>
                	<option value="AC">AC</option>
                	<option value="AL">AL</option>
                	<option value="AM">AM</option>
                	<option value="AP">AP</option>
                	<option value="BA">BA</option>
                	<option value="CE">CE</option>
                	<option value="DF">DF</option>
                	<option value="ES">ES</option>
                	<option value="GO">GO</option>
                	<option value="MA">MA</option>
                	<option value="MG">MG</option>
                	<option value="MS">MS</option>
                	<option value="MT">MT</option>
                	<option value="PA">PA</option>
                	<option value="PB">PB</option>
                	<option value="PE">PE</option>
                	<option value="PI">PI</option>
                	<option value="PR">PR</option>
                	<option value="RJ">RJ</option>
                	<option value="RN">RN</option>
                	<option value="RS">RS</option>
                	<option value="RO">RO</option>
                	<option value="RR">RR</option>
                	<option value="SC">SC</option>
                	<option value="SE">SE</option>
                	<option value="SP">SP</option>
                	<option value="TO">TO</option>
                 </select>


            	</p>

                <p style="display:none;">
                    <input name="ibgeal" type="text" id="ibgeal" size="8" />
                </p>

            </fieldset>

        <fieldset>
        <legend>Curso</legend>


            <p>
                Nome do curso - Turno:&nbsp;&nbsp;&nbsp;
                <select name="cursoturno" size="1" >
                    <option value="" disabled="disabled" selected="selected">Selecione a sua opção</option>
                    <optgroup label="Turno - Matutino">
                        <option value="agrm">
                            Agronegócio
                        </option>
                        <option value="jogosm">
                            Jogos
                        </option>
                        <option value="segm">
                            Segurança
                        </option>
                    </optgroup>
                    <optgroup label="Turno - Vespertino">
                        <option value="adsv">
                             ADS
                        </option>

                    </optgroup>
                    <optgroup label="Turno - Noturno">
                        <option value="adsn">
                            ADS
                        </option>
                        <option value="agrn">
                            Agronegócio
                        </option>

                        <option value="segn">
                            Segurança
                        </option>

                        </optgroup>
                </select>
        	<!--<input  maxlength="100" size="65" name="name" type="text">-->

        	</p>

        <p>
            Semestre:&nbsp;&nbsp;&nbsp;
    	<select id="semestre" name="semestre">
    	    <option value=0 disabled="disabled" selected="selected">--</option>
            <option value=1>1º</option>
            <option value=2>2º</option>
            <option value=3>3º</option>
            <option value=4>4º</option>
            <option value=5>5º</option>
            <option value=6>6º</option>
        </select>

    	</p>

        </fieldset>
            <fieldset >
                <legend>Seguro</legend>
                <p>
                    Seguradora:
                	<input  placeholder="Nome da seguradora" maxlength="100" size="65" name="nomeseg" type="text"/>
                    Número da apólice:
                	<input  maxlength="15" name="numapol" class="innum" type="number"/>

            	</p>



            </fieldset>
        </fieldset>
        <fieldset>
            <legend><u>Identificação do estágio</u></legend>
            <div  class="classif">
              <!--se o semestre for maior que 4 ele é obrigatório-->
                Classificação:?&nbsp;&nbsp;&nbsp;
                <div class="rcla"><input  name="classifica" type="radio" id="estobg" value="obr" disabled="disabled"/><span class="rclao">Obrigatório</span></div>
                <div class="rcla"><input name="classifica" type="radio" id="estnobg" value="nobr" checked="checked"/><span class="rclao">Não obrigatório</span></div>
            </div>


            <p>              <!--Dentro do inicio e fim do estágio-->
                Data de início:?&nbsp;&nbsp;&nbsp;
        	<input  type="date" name="datainivig" min="2018-01-02"/>

        	</p>

            <p>
                Data de témino:?&nbsp;&nbsp;&nbsp;
        	<input  type="date" name="datafimvig" min="2018-01-02"/>
            <!--Pegar data no server(PHP)-->
            <!--Aplicar regra (JS)-->

        	</p>

            <p>
                Data de término do contrato:?&nbsp;&nbsp;&nbsp;
        	<input  type="date" name="datafimcont" min="2018-01-02"/>
            <!--Pegar data no server(PHP)-->
            <!--Aplicar regra (JS)-->

        	</p>

                <div id="rangsem">
                <p class="ad">
                Dias da semana:&nbsp; <span id="adp" ></span>
                </p>
                <div id="rang1">
                    <input type="range" min="1"  max="6" value="3" class="slider" name="semanaini" id="valRangeSI"/>
                    <span id="returnSI" ></span>
                    <input type="hidden" value="" name="inisem"/>
                    <span id="ad" ></span>
                </div>

                <div id="rang2">
                    <input type="range" min="1"  max="6" value="2" class="slider" name="semanafim" id="valRangeSF"/>
                    <span id="returnSF"></span>
                    <input type="hidden" value="" name="fimsem" />
                </div>





        </div>

        <div id="rangsem">
            <p>
            Horário* &nbsp;&nbsp;&nbsp;
        	Das:&nbsp;&nbsp;&nbsp;

            <input id="hrini" class="hr" type="time" name="horarioini" >
            <span class="validity"></span>


            &nbsp;&nbsp;&nbsp;as:&nbsp;&nbsp;&nbsp;
            <input  class="hr" name="horariofim" type="time"/>
        	</p>


            Intervalo:&nbsp;&nbsp;&nbsp;
            <p>
            <input type="radio" name="intervalo" value ="s"/>Sim&nbsp;&nbsp;&nbsp;
            <input   type="radio" name="intervalo" value="n"/> Não
            </p>Das:&nbsp;&nbsp;&nbsp;
            <input  name="horariointeri" type="time"/>
            &nbsp;&nbsp;&nbsp;as:&nbsp;&nbsp;&nbsp;
            <input  name="horariointerf" type="time"/>

            <br>





            <p>              <!--se não for obrigatório o valor não pode ser 0-->
                Valor da bolsa:?&nbsp;&nbsp;&nbsp;
        	<input  maxlength="9" size="10" name="valbolsa" type="number"/>

        	</p>

            <p>
                Vale Transporte:&nbsp;&nbsp;&nbsp;
        	<input maxlength="5" size="6" name="valvale" type="text"/>

        	</p>
                </div>
        </fieldset>

    <fieldset>
        <legend><u>
            Plano de atividades

            </u></legend>
        <a id="more">
            <div class="atv-c"><img id="more-atv" src="img/icon/more-40.png"/></div>
        </a>
        <p >
            <span class="sp-jb">Nº </span>
            <span class="sp-jb"  style="margin-left: 5% !important;"> Descrição da atividade</span>
            <span class="sp-jb" style="margin-left: 9% !important;">Objetivo ou resultado esperado</span><span class="sp-jb" style="margin-left: 7% !important;">Período previsto </span><span class="sp-rb">(data: início e término)</span></p>
        <div>

            <p >
                <input name="atval1"  type="hidden" value=1 />
                <span class="bloco-atv" >1</span>
                <textarea name="descatval1" class="bloco-atv b-a" placeholder="Discreva sobre as atividades"></textarea>
                <input name="nomeatval1" class="bloco-atv" maxlength="100" size="65"  type="text"/>
                <input name="dtiniatval1"  class="bloco-atv" type="date"/>
                <input name="dtfimatval1" class="bloco-atv" type="date"/>
            </p>
            <span id="prox"></span>
        </div>
        <a id="less">
            <div class="atv-c"><img id="less-atv" src="img/icon/less-40.png"/></div>
        </a>

    </fieldset>
          
    <fieldset>
    <legend><u>
        Identificação da empresa
    </u></legend>

    <p>                      
        Timbre:?&nbsp;&nbsp;&nbsp;
    <input type="file" name="imgtimbre"/>
	</p>

        <p style="display: none;">                     
        Logo:?&nbsp;&nbsp;&nbsp;
        <input type="file" name="imglogo"/>

	</p>

    <!--
	<p>
        Empresa conveniada:?&nbsp;&nbsp;&nbsp;
	<input maxlength="100" size="65" name="name" type="text"/>

	</p>
    -->
    <input type="radio" name="conv" onclick="selecconv(1);"/>Empresa com convênio
    <input type="radio" name="conv" onclick="selecconv(2);"/>Empresa sem convênio
    <p>
        Nome da empresa:*&nbsp;&nbsp;&nbsp;
	    <input  placeholder="Digite o nome da empresa" maxlength="100" size="65" name="nomeemp" type="text"/>

	</p>

    <p>
        CNPJ:*&nbsp;&nbsp;&nbsp;
	    <input  maxlength="100" size="65" name="cnpjemp" type="text"/>

	</p>

    <p>
        Telefone:*&nbsp;&nbsp;&nbsp;
        <input  placeholder="(DDD)0000-0000" maxlength="15" size="12" name="telemp" type="text"/>
    </p>
	<p>
            E-mail:*&nbsp;&nbsp;&nbsp;
            <input maxlength="70" size="65"  name="emailemp"  type="email"/>
	</p>
    <p>
        Site:&nbsp;&nbsp;&nbsp;
        <input type="url" size="65" name="siteemp">
    </p>
    <p>

    Divisão ou departamento de estágio:*&nbsp;&nbsp;&nbsp;
    <input  maxlength="100" size="65" name="diviempre" type="text"/>
    </p>


    <fieldset >


    <legend>Endereço</legend>



    <p>

        CEP:*&nbsp;&nbsp;&nbsp;
        <input  placeholder="00000-000" maxlength="9" size="8" class="innum" name="cepemp" id="cepemp" onblur="pesquisacepe(this.value );" type="text">

	</p>

    <p>
        Rua:*&nbsp;&nbsp;&nbsp;
	<input  maxlength="100" size="65" name="ruaemp" id="ruaemp" type="text">

	</p>

    <p>
        Número:*&nbsp;&nbsp;&nbsp;
	<input maxlength="5" size="6" name="numeroemp" id="numeroemp"  type="number">

	</p>

    <p>
        Complemento:&nbsp;&nbsp;&nbsp;
	<input maxlength="5" name="compemp"  id="compemp" type="number">

	</p>

    <p>
        Bairro (Jd):*&nbsp;&nbsp;&nbsp;
	<input  placeholder="" maxlength="100" size="65" name="bairroemp"  id="bairroemp" type="text">

	</p>

    <p>
        Cidade:*&nbsp;&nbsp;&nbsp;
	<input  placeholder="" maxlength="30" size="40" name="cidadeemp"  id="cidadeemp" type="text">

	</p>

    <p>
        UF:*&nbsp;&nbsp;&nbsp;
	<select name="ufemp" id="ufemp">
	<option value="">Selecione</option>
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AM">AM</option>
	<option value="AP">AP</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MG">MG</option>
	<option value="MS">MS</option>
	<option value="MT">MT</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="PR">PR</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RS">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SE">SE</option>
	<option value="SP">SP</option>
	<option value="TO">TO</option>
 </select>
	</p>

    <p style="display:none;"> IBGE:
        <input name="ibgeE" type="text" id="ibgeemp"/>
    </p>
    </fieldset>
    <fieldset>
        <legend><u>Supervisor</u></legend>
    <p>
        Nome:*
	<input  placeholder="Digite o nome completo" maxlength="100" name="nomesup"  type="text"/>
        RG:*&nbsp;&nbsp;&nbsp;
    <input  placeholder="00.000.000-0" maxlength="12" size="10" class="innum" name="rgsup" type="text"/>
    </p>
    <p>
    Cargo
    <input maxlength="12" size="10" name="cargosup" type="text"/>
    </p>
    <p>
    Telefone:*&nbsp;&nbsp;&nbsp;
    <input  placeholder="(DDD)0000-0000" maxlength="15" size="14" class="innum" name="telsup" type="text"/>
    </p>
	<p>
		E-mail:*&nbsp;&nbsp;&nbsp;
		<input maxlength="70" size="65"  name="emailsup"  type="email"/>
	</p>
    </fieldset>
    <div id="infconv">
    <fieldset id="proemp">
        <legend><u>Caracterização da empresa</u></legend>
        Ramo de atividade principal:
        <div><input type="radio" name="ramoativ" value=1/>Industria</div>
        <div><input type="radio" name="ramoativ" value=2/>Serviços</div>
        <div><input type="radio" name="ramoativ" value=3/>Pesquisa</div>
        <div><input type="radio" name="ramoativ" value=4/>Comécio</div>
        <div><input type="radio" name="ramoativ" value=5/>Educação</div>
        <div><input type="radio" name="ramoativ" value=0/>Outro</div>
        <div><input type="text"/>
        <br><br>
        </div>
        Natureza da empresa:

        <div><input type="radio" name="natureza" value=1/>Iniciativa privada</div>
        <div><input type="radio" name="natureza" value=2/>Iniciativa pública</div>
        <div><input type="radio" name="natureza" value=3/>Economia mista</div>
        <div><input type="radio" name="natureza" value=4/>Multinacional</div>
        <div><input type="radio" name="natureza" value=0/>Outra</div>
        <div><input type="text" /></div>
        <br><br>
        Classificação da empresa:

        <div><input type="radio" name="classemp" value=1/>Pequena</div>
        <div><input type="radio" name="classemp" value=2/>Média</div>
        <div><input type="radio" name="classemp" value=3/>Grande</div>
        <br>
        Número de colaboradores:
        <input type="number" maxlength="6"/><!--remover erro"pagamento não seguro"-->
        <br> <br>
        Produto(s):
        <br>
        <textarea ></textarea>
        <br>
        Áreas de interesse para oferecimento de estágios:
        <br>
        <textarea ></textarea>
    </fieldset>

    <fieldset>
        <legend><u>Testemunhas</u></legend>

    <p>1º Testemunha<br>
        Nome:*&nbsp;&nbsp;&nbsp;
	<input  placeholder="Digite o nome completo" maxlength="100" size="65" name="nometestp"  type="text"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RG:*&nbsp;&nbsp;&nbsp;
    <input  placeholder="00.000.000-0" maxlength="12" size="10" name="rgtestp" type="text"/>
    </p>

    <p>2º Testemunha<br>
        Nome:*&nbsp;&nbsp;&nbsp;
	<input  placeholder="Digite o nome completo" maxlength="100" size="65" name="nometests" type="text"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RG:*&nbsp;&nbsp;&nbsp;
    <input  placeholder="00.000.000-0" maxlength="12" size="10" name="rgtests" type="text"/>
    </p>


    </fieldset>
    </div>
    </fieldset>
        <a href="#"   data-reveal-id="janelaModal"><img src="img/epdf.png" /></a>
        
        <div id="janelaModal" class="reveal-modal">
            <h1>Exportar ...</h1>
            <br>
            Cidade local dos documentos:<br>
            <input name="cidadelocaldoc" type="radio" value=1 /><span class="rclao">Local da empresa</span><br>
            <input name="cidadelocaldoc" type="radio" value=2 checked="checked"/><span class="rclao">Local da instituição</span><br>
            <input name="cidadelocaldoc" type="radio" value=3 /><span class="rclao">Local de preferência do estagiário</span>

            <p>selecione o documento para exportar</p>
            <button type="submit" id="cce" name="btsubpdf" onclick="selectdoc(1);">CCE</button>
            <button type="submit" id="tce" name="btsubpdf" onclick="selectdoc(2);">TCE</button>
            <button type="submit" id="pae" name="btsubpdf" onclick="selectdoc(3);">PAE</button>
            <button type="submit" id="fie" name="btsubpdf" onclick="selectdoc(4);">FIE</button>
            <button type="submit" id="cec" name="btsubpdf" onclick="selectdoc(5);">CEC</button>
            <button type="submit" id="mde" name="btsubpdf" onclick="selectdoc(6);">MDE</button>
            <a class="close-reveal-modal">x</a>
        </div>
    </form>
</body>
</html>