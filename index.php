<?php

	require __DIR__ . '/vendor/autoload.php';
	
	$sub = new Subject();
	
	$primeiro = new PrimeiraClasse();
	$segundo = new SegundaClasse();
	$terceiro = new TerceiraClasse();
	
	$sub->subscribe($primeiro);
	$sub->subscribe($segundo);
	$sub->subscribe($terceiro);
	
	$nmr;
	if (isset($_REQUEST['NumeroPedido'])) {
		$nmr = $_REQUEST['NumeroPedido'];
		
		$sub->notify($nmr);
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemplo Observer</title>
	</head>
	<body>
		<h1>Observer pattern</h1>
		<form method="POST">
			<input type="number" name="NumeroPedido" placeholder="número">
			<button type="submit">Avisar</button>
		</form>
	</body>
</html>