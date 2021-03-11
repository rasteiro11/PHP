<html>
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
	</head>
<body>
	<?php 
	$nome = "maria";
	$cor = "amarelo";
	$idade = 25;
	$atividade_preferida = "andar de bike";

	//operador
	echo "ola" . $nome . ", vi que sua cor preferida e " . $cor . "estou vendo tambem que voce tem " . $idade . " anos e que gosta de andar de " . $atividade_preferida;


	//aspas duplas
	echo '<br>';

	echo " ola $nome , vi que sua cor preferida e $cor estou vendo tambem que voce tem $idade anos e que gosta de andar de $atividade_preferida";

	//aspsas simples
	echo '<br>';
	echo ' ola $nome , vi que sua cor preferida e $cor estou vendo tmbem que voce tem $idade anos e que gosta de andar de $atividade_preferida';



	?>
</body>
</html>