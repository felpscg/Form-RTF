/**
 * @author FELIPECORREAGOMES verifica documento para exportar -- Finalizado
 */
var bt = document.getElementsByName("btsubpdf");
var ac = document.getElementById("formp");
var exc = document.getElementById("infconv");
var cce = document.getElementById("cce");
var cec = document.getElementById("cec");
function selecconv(valor) {
	switch (valor) {
	case 1:
		exc.style.display = "none";
		cce.style.display = "none";
		cec.style.display = "none";
		break;

	case 2:
		exc.style.display = "block";
		cce.style.display = "inline";
		cec.style.display = "inline";
		break;

	default:

		break;
	}
}

function selectdoc(valor) {

	switch (valor) {
	case 1:
		ac.action = "docs/rtf1.php";

		break;

	case 2:
		ac.action = "docs/rtf2.php";

		break;

	case 3:
		ac.action = "docs/rtf3.php";

		break;

	case 4:
		ac.action = "docs/rtf4.php";

		break;

	case 5:
		ac.action = "docs/rtf5.php";

		break;

	// case 6:
	// ac.action = "docs/rtf6.php";
	//            
	// break;

	default:
		document.write("Erro ao selecionar o documento para exportar");
		break;
	}
};