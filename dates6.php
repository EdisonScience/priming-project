<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 8</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates7.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao7" value="Ira">Ira <br>
			<input type="radio" name="nnao7" value="Alegría">Alegría<br>
			<input type="radio" name="nnao7" value="Miedo">Miedo<br>
			<input type="radio" name="nnao7" value="Asco">Asco<br>
			<input type="radio" name="nnao7" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao7" value="Tristeza">Tristeza
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>">
			<input type="hidden" name="nnao2" value="<?php echo $_POST["nnao2"]; ?>">
			<input type="hidden" name="nnao3" value="<?php echo $_POST["nnao3"]; ?>">
			<input type="hidden" name="nnao4" value="<?php echo $_POST["nnao4"]; ?>">
			<input type="hidden" name="nnao5" value="<?php echo $_POST["nnao5"]; ?>">
			<input type="hidden" name="nnao6" value="<?php echo $_POST["nnao6"]; ?>"><br>
			<input type="submit" value="Siguiente"></form>
		<script src="script.js"></script>
		<script>/*AMARILLO-NARANJA*/
			var listaImg = new Array('https://th.bing.com/th/id/OIP.zSWrIO8zZp9oY0h9EMPchgHaF7?w=198&h=180&c=7&o=5&pid=1.7', 
 	'https://th.bing.com/th/id/OIP.CP1n2Wb63s5nNZKOJoBfSQHaI_?w=154&h=187&c=7&o=5&pid=1.7');
		setTimeout(()=>{location.replace("dates7.php");}, 17000);
	</script>
	</body>
</html>