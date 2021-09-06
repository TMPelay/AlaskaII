<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Insert</title>
		<link rel="stylesheet" href="_insert.css">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<script src="pdf.js"></script>
	</head>
	<body>
		<!--Creo un formulario para ingresar los datos que se subiran a la base de datos-->
		<form method="post" action="/Alaska2/insert_pdf.php" class="form" enctype="multipart/form-data">
			<label class="label">PDF:</label>
			<input type="file" name="pdf" class="form-input-file" id="input" onchange="return checkExt()" required><!--Creo un input de tipo "text"-->

			<input type="submit" class="form-btn"><!--Creo un boton para enviar los datos-->
			<input type="reset" class="form-btn"><!--Creo un bton para resetear el formulario-->
		</form>
	</body>
</html>