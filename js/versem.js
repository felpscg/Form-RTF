  //valida dias da semana no input range
var adp = document.getElementById("adp");
var ad = document.getElementById("ad");
var slider = document.getElementById("valRangeSI");
var slider2 = document.getElementById("valRangeSF");
var output = document.getElementById("returnSI");
var output2 = document.getElementById("returnSF");
var conv = document.getElementsByName("conv");
var ademp = document.getElementById("proemp");
ad.innerHTML = " a ";
var output3 = document.getElementsByName("inisem").value;
var output4 = document.getElementsByName("fimsem").value;
output2.innerHTML = "Selecione outro dia";
output.innerHTML = "Selecione um dia da semana";
var t = 0;


        //função para definoir a escolha dos dias da semana em range e adicionais

        function convenio(){
            if(conv.value==1)
                ademp.style.display=none;
            else
                ademp.style="display:block;"
        }


        slider.oninput = function defSem() {
        t = parseInt(this.value);
        if(t==6){
            adp.innerHTML = "Sómente";
            output.innerHTML = "Sábado";
            ad.style.display = output2.style.display = "none";
            slider2.value = null;
            slider2.disabled = "disabled";

        }
        else{
            adp.innerHTML = "Inicia de";
            ad.style.display = output2.style.display = slider2.disabled = "";
        switch(t){
        case 1:
            output3 = output.innerHTML = "Segunda";
            slider2.min = 2;

            break;
        case 2:
            output3 = output.innerHTML = "Terça";
            slider2.min = 3;

            break;
        case 3:
            output3 = output.innerHTML = "Quarta";
            slider2.min = 4;

            break;
        case 4:
            output3 = output.innerHTML = "Quinta";
            slider2.min = 5;

            break;
        case 5:
            output3 = output.innerHTML = "Sexta";
            slider2.min = 6;
            slider2.value = 6;
            break;

        default:
               alert("selecione um dia da semana");

        }
        }
        };

        slider2.oninput = slider2.onclick = function () {
            t = parseInt(this.value);
        switch(t){
        case 1:
            output4 = output2.innerHTML = "Segunda";

            break;
        case 2:
           output4 =  output2.innerHTML = "Terça";

            break;
        case 3:
            output4 = output2.innerHTML = "Quarta";

            break;
        case 4:
            output4 = output2.innerHTML = "Quinta";

            break;
        case 5:
            output4 = output2.innerHTML = "Sexta";

            break;
        case 6:
            output4 = output2.innerHTML = "Sábado";

            break;
        default:
               alert("selecione um dia da semana");

        }

        };
