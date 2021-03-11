<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
	<body>
	<?php
	$usuario_possui_cartao_loja = true;
	$valor_compra = 225;
	$valor_frete = 50;

	if ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
		$valor_frete = 0;
		$recebeu_desconto_frete = true;
	}
	?>
	<h1>Detalhes do pedido</h1>
	<p>Possui catao da loja
		<?php
		if ($usuario_possui_cartao_loja == true) {
			echo "Sim";
		} else {
			echo "Nao";
		} 
		?>
		</p>

		<p><?php echo "Valor da compra: $valor_compra"; ?></p>
		<p>
			<?php
			if ($recebeu_desconto_frete == true) {
				echo " recebeu desconto no frete ? Sim";
			} else {
				echo " recebeu desconto no frete ? Nao";
			}
			
			?>

		</p>
		<p><?php echo "o valor do frete foi de: $valor_frete" ?></p>

	</body>
</html>
