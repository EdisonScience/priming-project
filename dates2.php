<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 4</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates3.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao3" value="Ira">Ira <br>
			<input type="radio" name="nnao3" value="Alegría">Alegría<br>
			<input type="radio" name="nnao3" value="Miedo">Miedo<br>
			<input type="radio" name="nnao3" value="Asco">Asco<br>
			<input type="radio" name="nnao3" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao3" value="Tristeza">Tristeza
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>">
			<input type="hidden" name="nnao2" value="<?php echo $_POST["nnao2"]; ?>"><br>
			<input type="submit" value="Siguiente"></form>
			<?php
		//	include("db.php");
		//	$nnao0=$_POST["nnao0"];
	//		$nnao1=$_POST["nnao1"];
	//		$nnao2= $_POST["nnao2"];
	//		$cons="INSERT INTO respuestas (emocion,emocion2, emocion3) VALUES ('$nnao0','$nnao1','$nnao2')";
		//	mysqli_query($enlace,$cons);
			?>
		<script>
			/*MORADO*/
			var listaImg = new Array('https://th.bing.com/th/id/OIP.Z5AeLRU782IbNZTsObiZUQEsEs?w=182&h=182&c=7&o=5&pid=1.7', 
 	'https://th.bing.com/th/id/OIP.u_6Z2U7aG6srgLgZMLleXgAAAA?pid=Api&w=217&h=289&c=7');
		setTimeout(()=>{location.replace("dates3.php");}, 17000);
	</script>
		<script src="script.js"></script>
	</body>
</html>