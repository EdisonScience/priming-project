<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="dates2.php" name="contacto" method="post">
			<input type="radio" name="nnao2" value="Feliz">Feliz<br>
			<input type="radio" name="nnao2" value="Miedo">Miedo<br>
			<input type="radio" name="nnao2" value="Asco">Asco<br>
			<input type="submit">
		<div>
		<?php
			include("db.php");
			$nnao0=$_POST["nnao0"];
			$nnao1=$_POST["nnao1"];
			//$nnao2=$_GET["nnao2"];
	//		$cons="INSERT INTO respuestas (emocion,emocion2) VALUES ('$nnao0','$nnao1')";
	//		mysqli_query($enlace,$cons);
		?></div>
		</body>
	</html>