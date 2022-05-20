<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<title>End of Try</title>
	</head>
	<body>
		<form action="index.html" method="post">
			<input type="hidden" name="nnao0" value="<?php echo $_POST["nnao0"]; ?>">
			<input type="hidden" name="nnao1" value="<?php echo $_POST["nnao1"]; ?>">
			<input type="hidden" name="nnao2" value="<?php echo $_POST["nnao2"]; ?>">
			<input type="hidden" name="nnao3" value="<?php echo $_POST["nnao3"]; ?>">
			<input type="hidden" name="nnao4" value="<?php echo $_POST["nnao4"]; ?>">
			<input type="hidden" name="nnao5" value="<?php echo $_POST["nnao5"]; ?>">
			<input type="hidden" name="nnao6" value="<?php echo $_POST["nnao6"]; ?>">
			<input type="hidden" name="nnao7" value="<?php echo $_POST["nnao7"]; ?>">
			<input type="hidden" name="nnao8" value="<?php echo $_POST["nnao8"]; ?>"><br>
			<input type="submit" value="Enviar respuestas" style="cursor: pointer; width: auto;"></form>
			<?php
				//session_start();
				//session_destroy();
				$host="localhost";
				$user="id15554079_root";
				$password="jr@dpUB61_3%cQ2v";
				$db="id15554079_datos";
				$enlace=mysqli_connect($host,$user,$password,$db);
			$nnao0=$_POST["nnao0"];
			$nnao1=$_POST["nnao1"];
			$nnao2= $_POST["nnao2"];
			$nnao3= $_POST["nnao3"];
			$nnao4= $_POST["nnao4"];
			$nnao5= $_POST["nnao5"];
			$nnao6= $_POST["nnao6"];
			$nnao7= $_POST["nnao7"];
			$nnao8= $_POST["nnao8"];
			$nnao9= $_POST["nnao9"];
			$cons="INSERT INTO respuestas (calido1, frio1,calido2, frio2, calido3,calido4,frio3,calido5,frio4,frio5) VALUES ('$nnao0','$nnao1','$nnao2','$nnao3','$nnao4','$nnao5','$nnao6','$nnao7','$nnao8','$nnao9')";
			mysqli_query($enlace,$cons);
			 try{  }catch(Exception $ex){
     echo "".$ex->getMessage();  }
			?>
	</body>
</html>