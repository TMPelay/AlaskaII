<?php
	include('conection.php');

	$_info = $info;
	$_cycles = $cycles;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<title>AlaskaII</title>
	</head>
	<body>
		<div class="header">
			<img src="Assets/image.jpg" alt="Alaska II" class="title">
			<a href="/Alaska2/Sub-Pages/_insert_pdf.php">
				<button class="button">Insertar PDF</button>
			</a>
			<a href="/Alaska2/Sub-Pages/_insert_info.php">
				<button class="button">Insertar informacion</button>
			</a>
		</div>
		<form class="form" action="javascript:void(0);" id="busquedaForm">
				<label class="label">Buscar: <input class="in-text" id="value" type="text" name="search"></label><input class="in-button" type="submit" name="btn-search" value="Buscar">
		</form>
		<div class="headers">
			<h2 class="theader">Codigo</h2>
			<h2 class="theader">Descripcion</h2>
			<h2 class="theader">Rubro</h2>
			<h2 class="theader">Equipo</h2>
			<h2 class="theader">Proveedor</h2>
			<h2 class="theader">Pub</h2>
			<h2 class="theader">Costo</h2>
			<h2 class="theader">Reemplazo</h2>
			<h2 class="theader">Stock</h2>
			<h2 class="theader">CTD</h2>
		</div>
		<script>
			var _info = '<?php echo json_encode($_info) ?>';
			var _cycles = '<?php echo $_cycles ?>';
		</script>
		<script src="script.js"></script>
	</body>
</html>