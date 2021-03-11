<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
	<body>
		<?php

		//gettype() => retorna o tipo da variavel 
		$valor = true;
		//$valor2 = (real) $valor; // float , double, real
		//$valor2 = (string) $valor; //float , double , real

		//$valor2 = (integer) $valor; // integer, int
		//$valor2 = (string) $valor; 

		//$valor2 = (boolean) $valor; //bool, boolean

		//$valor2 = (int) $valor; // bool, boolean


		$valor2 = (string) $valor;
		$valor3 = (int) $valor2;


		echo $valor .' '. gettype($valor);
		echo "</br>";
		echo $valor2.' '. gettype($valor2);
		echo "</br>";
		echo $valor3.' '. gettype($valor3);



		?>	
	</body>
</html>