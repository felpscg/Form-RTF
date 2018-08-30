        //valida dias da semana no input range
		var adp = document.getElementById("adp");
        var ad = document.getElementById("ad");
        var slider = document.getElementById("valRangeSI");
        var slider2 = document.getElementById("valRangeSF");
        var output = document.getElementById("returnSI");
        var output2 = document.getElementById("returnSF");

        var t = 0;


        // toda ves que o range receber um valor ele acessa a função
        //função para definoir a escolha dos dias da semana em range e adicionais

        ad.innerHTML = " a ";
        output2.innerHTML = "Selecione outro dia";
        output.innerHTML = "Selecione um dia da semana";
        slider.oninput = function defSem() {
        t = parseInt(this.value);
        if(t==6){
            adp.innerHTML = "Sómente";
            output.innerHTML = "Sábado";
            ad.style.display = output2.style.display = "none";
            slider2.disabled = "disabled";
        }
        else{
            adp.innerHTML = "Inicia de";
            ad.style.display = output2.style.display = slider2.disabled = "";
        switch(t){
        case 1:
            output.innerHTML = "Segunda";
            slider2.min = 2;

            break;
        case 2:
            output.innerHTML = "Terça";
            slider2.min = 3;

            break;
        case 3:
            output.innerHTML = "Quarta";
            slider2.min = 4;

            break;
        case 4:
            output.innerHTML = "Quinta";
            slider2.min = 5;

            break;
        case 5:
            output.innerHTML = "Sexta";
            slider2.min = 6;
            slider2.value = 6;
            break;

        default:
               alert("selecione um dia da semana");

        }
        }
        }

        slider2.oninput = slider2.onclick = function () {
            t = parseInt(this.value);
        switch(t){
        case 1:
            output2.innerHTML = "Segunda";

            break;
        case 2:
            output2.innerHTML = "Terça";

            break;
        case 3:
            output2.innerHTML = "Quarta";

            break;
        case 4:
            output2.innerHTML = "Quinta";

            break;
        case 5:
            output2.innerHTML = "Sexta";

            break;
        case 6:
            output2.innerHTML = "Sábado";

            break;
        default:
               alert("selecione um dia da semana");

        }

        }