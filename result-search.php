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
			<a href="/AlaskaII/Sub-Pages/_insert_brand.php">
				<button class="button">Insert brand</button>
			</a>
		</div>
		<div class="back">
			<a class="link" href="index.php">Volver</a>
		</div>
		<?php
			include('info-conection.php');

			$search = $_GET['search'];
			$filter = $_GET['select'];
			$query = "SELECT * FROM Hoja1 WHERE $filter LIKE '%$search%'";
			$result = mysqli_query($conection,$query);

			echo "<table class='table-head'>
					<tr>
						<th>Codigo</th>
						<th>Descripcion</th>
						<th>Rubro</th>
						<th>Equipo</th>
						<th>Precio</th>
						<th>Proveedor</th>
						<th>Reemplazo</th>
					</tr>
				</table>";

			echo "<table class='table-body'>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td>";
				echo $row["code"] . "</td><td>";
				echo $row["description"] . "</td><td>";
				echo $row["section"] . "</td><td>";
				echo $row["model"] . "</td><td>";
				echo $row["price"] . "</td><td>";
				echo $row["provider"] . "</td><td>";
				echo $row["replacement"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($conection);
		?>
	</body>
</html>