var btmore = document.getElementById("more");
var btless = document.getElementById("less");
var add = document.getElementById("prox");

//var lim = 1;
var intermediario ;
var intervalor;
var cont;
var num = 1;
btmore.onclick= function (){
    cont=num;

    num ++;
    var namenum="name='atval"+num+"'";
    var namedesc="name='descatval"+num+"'";
    var nameatv="name='nomeatval"+num+"'";
    var namedtin="name='dtiniatval"+num+"'";
    var namedtfim="name='dtfimatval"+num+"'";
    var html = "<p>";
        html +="<input "+namenum+" type='hidden' value="+num+" />";
        html +="<span class='bloco-atv' >"+num+"</span>";
        html +="<textarea "+namedesc+" class='bloco-atv b-a' placeholder='Descreva sobre as atividades'></textarea>";
        html +="<input "+nameatv+" class='bloco-atv' maxlength='100' size='65' type='text'/>";
        html +="<input "+namedtin+" class='bloco-atv' type='date'/>";
        html +="<input "+namedtfim+" class='bloco-atv' type='date'/>";
        html +="</p>";
    intermediario=add.innerHTML;
    intervalor=add.value;
    add.innerHTML=add.innerHTML+html;
    
    
};

btless.onclick= function (){
    for(cont ;num>cont;num --){
        //concional bloqueia para que ele altere somente o ultimo numero
        add.innerHTML=intermediario;
        add.value=intervalor;
    }
};

