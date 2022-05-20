<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>Priming Project-Try 3</title>
	</head>
	<body>
		<div style="height: 20px"><h1 id="timer" style="text-align: center;margin:0;"></h1></div>
		<img id="divImg" class="form">
		<form class="form" id="form" action="dates2.php" name="contacto" method="post">
			<h5 style="margin: 0 0 1em -65px;">¿Qué emoción le produce?</h5>
			<input type="radio" name="nnao2" value="Ira">Ira <br>
			<input type="radio" name="nnao2" value="Alegría">Alegría<br>
			<input type="radio" name="nnao2" value="Miedo">Miedo<br>
			<input type="radio" name="nnao2" value="Asco">Asco<br>
			<input type="radio" name="nnao2" value="Sorpresa">Sorpresa<br>
			<input type="radio" name="nnao2" value="Tristeza">Tristeza
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>"><br>
			<input type="submit" value="Siguiente"></form>
		<div>
		<?php 
		//	session_start();
			//include("db.php");
			//$nnao1=$_POST["nnao1"];
			//$id=mysql_insert_id($enlace);
			//$id='SELECT id FROM respuestas ORDER BY id DESC LIMIT 1';
			//$cons="UPDATE respuestas SET emocion2='$nnao1' WHERE id='$id'";
			//mysqli_query($enlace,$cons);
			//$_SESSION["$id"];
          	//$id2="SELECT id FROM respuestas ORDER BY id ASC LIMIT 1";	
		?></div>
		<script>
			/*NARANJA*/
			var listaImg = new Array('https://significadodelossuenos24.com/wp-content/uploads/significado-del-color-naranja.png', 
 	'https://i.pinimg.com/originals/7b/08/82/7b088240774d298e4e249059fb9e8cc6.jpg');
		setTimeout(()=>{location.replace("dates2.php");}, 17000);
	</script>
		<script src="script.js"></script>
		</body>
	</html>