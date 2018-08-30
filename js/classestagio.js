var sem = document.getElementById("semestre");
var estobg = document.getElementById("estobg");
var classest = document.getElementsByName('classifica');

sem.oninput = function () {
	var selecionado = sem.options[sem.selectedIndex].value;
	//var retorno = document.getElementById("return").innerHTML = selecionado;

        if (selecionado<4){
			classest[1].checked = true;
            classest[1].disabled = false;
            classest[0].disabled = true;

        }
        else{
            classest[0].checked = false;
            classest[1].checked = true;
            classest[0].disabled = false;
            classest[1].disabled = false;

        }
    };