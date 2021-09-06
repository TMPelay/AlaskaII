<?php

include('info-conection.php');

$code = $_POST['code_b'];
$description = $_POST['description_b'];
$section = $_POST['section_b'];
$model = $_POST['model_b'];
$provider = $_POST['provider_b'];
$pub = $_POST['pub_b'];
$price = $_POST['price_b'];
$replacement = $_POST['replacement_b'];
$stock = $_POST['stock_b'];
$ctd = $_POST['ctd_b'];
$pdf = $_POST['select_b'];


$insert_part = "INSERT INTO `PARTES` (`codigo`, `descripcion`, `rubro`, `equipo`, `proveedor`, `pub`, `costo`, `reemplazo`, `stock`, `ctd`, `pdf`) VALUES ('$code', '$description', '$section', '$model', '$provider', '$pub', 'price', '$replacement', '$stock', '$ctd', '$pdf')";


$queryp = mysqli_query($conection, $insert_part);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="return.css">
		<title>Insert model</title>
	</head>
	<body>
		<div class="header">
			<img src="Assets/image.jpg" alt="Alaska II" class="title"><!--Imagen de titulo-->
		</div>
		<div class="message">
			<?php
				if ($queryp) {
					echo "¡Los datos fueron escritos con exito!";
				} else {
					echo "Hubo un error al escribir los datos :(";
				}
			?>
		</div>
		<div class="back">
			<a href="index.php" class="link">Volver</a>
		</div>				
	</body>
</html>
