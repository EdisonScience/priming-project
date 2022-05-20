<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 6</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates5.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao5" value="Ira">Ira <br>
			<input type="radio" name="nnao5" value="Alegría">Alegría<br>
			<input type="radio" name="nnao5" value="Miedo">Miedo<br>
			<input type="radio" name="nnao5" value="Asco">Asco<br>
			<input type="radio" name="nnao5" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao5" value="Tristeza">Tristeza
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>">
			<input type="hidden" name="nnao2" value="<?php echo $_POST["nnao2"]; ?>">
			<input type="hidden" name="nnao3" value="<?php echo $_POST["nnao3"]; ?>">
			<input type="hidden" name="nnao4" value="<?php echo $_POST["nnao4"]; ?>"><br>
			<input type="submit" value="Siguiente"></form>
		<script src="script.js"></script>
		<script>
			/*ROJO+NARANJA*/
			var listaImg = new Array('http://colores.org.es/imagenes_colores/rojo-ferrari.jpg', 
 	'http://www.viewzone.com/attractive.female.jpg');
		setTimeout(()=>{location.replace("dates5.php");}, 17000);
	</script>
	</body>
</html>