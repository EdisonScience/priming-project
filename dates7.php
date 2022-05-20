<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 9</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates8.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao8" value="Ira">Ira <br>
			<input type="radio" name="nnao8" value="Alegría">Alegría<br>
			<input type="radio" name="nnao8" value="Miedo">Miedo<br>
			<input type="radio" name="nnao8" value="Asco">Asco<br>
			<input type="radio" name="nnao8" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao8" value="Tristeza">Tristeza
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>">
			<input type="hidden" name="nnao2" value="<?php echo $_POST["nnao2"]; ?>">
			<input type="hidden" name="nnao3" value="<?php echo $_POST["nnao3"]; ?>">
			<input type="hidden" name="nnao4" value="<?php echo $_POST["nnao4"]; ?>">
			<input type="hidden" name="nnao5" value="<?php echo $_POST["nnao5"]; ?>">
			<input type="hidden" name="nnao6" value="<?php echo $_POST["nnao6"]; ?>">
			<input type="hidden" name="nnao7" value="<?php echo $_POST["nnao7"]; ?>"><br>
			<input type="submit" value="Siguiente"></form>
			<?php 
		//	include("db.php");	
		//	$nnao0=$_POST["nnao0"];
		//	$nnao1=$_POST["nnao1"];
		//	$nnao2= $_POST["nnao2"];
		/*	$nnao3= $_POST["nnao3"];
			$nnao4= $_POST["nnao4"];
			$nnao5= $_POST["nnao5"];
			$nnao6= $_POST["nnao6"];
			$nnao7= $_POST["nnao7"];
			$cons="INSERT INTO respuestas (emocion,emocion2, emocion3,emocion4,emocion5,emocion6,emocion7,emocion8) VALUES ('$nnao0','$nnao1','$nnao2','$nnao3','$nnao4','$nnao5','$nnao6','$nnao7')";
			mysqli_query($enlace,$cons);*/
			 ?>
		<script src="script.js"></script>
		<script>/*VERDE-AZUL*/
		var listaImg = new Array('https://th.bing.com/th/id/OIP.ZNyNXN-p3Ys9hMBXID6RjAHaHa?w=187&h=187&c=7&o=5&pid=1.7', 
 	'https://previews.123rf.com/images/zzuzya/zzuzya1604/zzuzya160400011/57053528-la-cabeza-del-hombre-disparó-con-expresión-de-la-cara-neutral-y-fondo-blanco.jpg');
		setTimeout(()=>{location.replace("dates8.php");}, 17000);</script>
	</body>
</html6