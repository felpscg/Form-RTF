<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta content="Felipe Correa Gomes" name="author" />
<meta charset="utf-8" />

<title>Fatec Ourinhos - Formulario Estágio</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="plugin/reveal/jquery-1.4.4.min.js" defer="defer"></script>
<script src="plugin/reveal/jquery.reveal.js" defer="defer"></script>
        <?php
			require_once "classes/menu.php";
		?>
    </head>

<body>
<?php

$obg = new menu ();
$obg->ativoMenu ( 0 );

?>
   


    <div id="telIni">
    
    <form action="classes/e_mail.php" method="POST"><p></p>
		<p>
			Assunto: <input type="text" name="assunt" />
		</p>
		<p>
			Discreva ou de a sua opnião
			<textarea name="mens"></textarea>
		</p>
		<input type="submit"/>
	</form>
	</div>
	<div id='rodape'>
		<a href='rep_erro.php' style="color: #999;">Reportar erro</a>
	</div>
</body>
</html>