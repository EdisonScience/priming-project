<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 2</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates1.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao1" value="Ira">Ira <br>
			<input type="radio" name="nnao1" value="Alegría">Alegría<br>
			<input type="radio" name="nnao1" value="Miedo">Miedo<br>
			<input type="radio" name="nnao1" value="Asco">Asco<br>
			<input type="radio" name="nnao1" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao1" value="Tristeza">Tristeza<br>
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="submit" value="Siguiente"></form>
			<?php
			//Incluir en todos los archivos:
			//session_start();
			//$usersession=$_SESSION['user']='Esteban';
				//	include("db.php");
				//	$nnao0=$_POST["nnao0"];
				//if ($nnao0!=null||$nnao1!=null){
				//	$cons="INSERT INTO respuestas (emocion) VALUES ('$nnao0')";
				//	mysqli_query($enlace,$cons);
				//}
			?>
			<h1 id="timer" style="text-align: center;"></h1>
		<script>
			/*AZUL*/
			var listaImg = new Array('https://th.bing.com/th/id/OIP.V5OGtteY8F2kN28YKFstyAHaFs?w=219&h=180&c=7&o=5&pid=1.7', 
 	'http://www.faceresearch.org/demos/images/thumbs/avg_res/individuals/036_03');
			//setTimeout(function(counter),5000);
			setTimeout(()=>{location.replace("dates1.php");}, 17000);
		</script>
		<script src="script.js"></script>
	</body>
</html>