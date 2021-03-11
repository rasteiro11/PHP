<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<?php 
		// string
		$nome = "Jorge Sant Ana";
		//int 
		$idade = 29;
		//float 
		$peso = 82.5;
		//boolean
		$fumante_sn = true; // (true = 1) ou false 

		$idade = '30';

 	?>
 	<h1>Ficha de cadastro</h1>
 	<br>
 	<p>Nome: <? echo $nome; ?></p>
 	<p>Idade: <? echo $idade; ?></p>
 	<p>Peso: <? echo $peso; ?></p>
 	<p>Fumante: <? echo $fumante_sn; ?></p>

</body>
</html>
