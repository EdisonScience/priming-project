<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 7</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates6.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao6" value="Ira">Ira <br>
			<input type="radio" name="nnao6" value="Alegría">Alegría<br>
			<input type="radio" name="nnao6" value="Miedo">Miedo<br>
			<input type="radio" name="nnao6" value="Asco">Asco<br>
			<input type="radio" name="nnao6" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao6" value="Tristeza">Tristeza
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>">
			<input type="hidden" name="nnao2" value="<?php echo $_POST["nnao2"]; ?>">
			<input type="hidden" name="nnao3" value="<?php echo $_POST["nnao3"]; ?>">
			<input type="hidden" name="nnao4" value="<?php echo $_POST["nnao4"]; ?>">
			<input type="hidden" name="nnao5" value="<?php echo $_POST["nnao5"]; ?>"><br>
			<input type="submit" value="Siguiente"></form>
		<script src="script.js"></script>
		<script>/*CELESTE*/
			var listaImg = new Array('https://th.bing.com/th/id/OIP.nUnz9LtTzbTIDIhF5n-otQHaHa?w=178&h=180&c=7&o=5&pid=1.7', 
 	'https://1ammce38pkj41n8xkp1iocwe-wpengine.netdna-ssl.com/wp-content/uploads/2013/05/0411-300x445.jpg');
		setTimeout(()=>{location.replace("dates6.php");}, 17000);</script>
	</body>
</html6