<!DOCTYPE html>
<?php
	include('pdf.php');

	$_files = $files;
	$_cycles = $i;
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Insert</title>
		<link rel="stylesheet" href="_insert.css">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	</head>
	<body onload="addOptions()">
		<form method="POST" action="/Alaska2/insert_info.php" class="form" enctype="multipart/form-data">
			<label class="label">Codigo:</label>
			<input type="text" name="code_b" class="form-input" required>
			<label class="label">Descripcion:</label>
			<input type="text" name="description_b" class="form-input" required>
			<label class="label">Rubro:</label>
			<input type="text" name="section_b" class="form-input" required>
			<label class="label">Equipo:</label>
			<input type="text" name="model_b" class="form-input" required>
			<label class="label">Proveedor:</label>
			<input type="text" name="provider_b" class="form-input" required>
			<label class="label">Pub:</label>
			<input type="text" name="pub_b" class="form-input" required>
			<label class="label">Costo:</label>
			<input type="text" name="price_b" class="form-input" required>
			<label class="label">Reemplazo:</label>
			<input type="text" name="replacement_b" class="form-input" required>
			<label class="label">Stock:</label>
			<input type="text" name="stock_b" class="form-input" required>
			<label class="label">CTD:</label>
			<input type="text" name="ctd_b" class="form-input" required>
			<label class="label">PDF:</label>
			<select name="select_b" id="selector" class="form-input" required>
				<option value="null">Ninguno</option>
			</select>
			<input type="submit" class="form-btn"><!--Creo un boton para enviar los datos-->
			<input type="reset" class="form-btn"><!--Creo un bton para resetear el formulario-->
		</form>

		<script>
			var _files = '<?php echo json_encode($_files) ?>';
			var _cycles = '<?php echo $_cycles ?>';
		</script>
		<script src="pdf.js"></script>
	</body>
</html>