<?php
	$fileName = $_FILES['pdf']['name'];
	$fileSaved = $_FILES['pdf']['tmp_name'];
	$fileDestiny = $_SERVER['DOCUMENT_ROOT'] . '/Alaska2/files/';
	$filePath = $fileDestiny . $fileName;
?>	

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="return.css">
		<title>Insertar PDF</title>
	</head>
	<body>
		<div class="header">
			<img src="Assets/image.jpg" alt="Alaska II" class="title"><!--Imagen de titulo-->
		</div>
		<div class="message">
			<?php
				if (move_uploaded_file($fileSaved, $filePath)) {
					echo "¡El PDF se subio con exito!";
				} else {
					echo "Hubo un error al subir el PDF :(";
				}
			?>
		</div>
		<div class="back">
			<a href="index.php" class="link">Volver</a>
		</div>				
	</body>
</html>
